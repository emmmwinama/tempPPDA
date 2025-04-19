<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Newsletters;
use App\Models\Publications;
use Illuminate\Http\Request;
use App\Utils\PaginateCollection;


class NewsController extends Controller
{
    //
    public function news(){
        $data= News::where('ispublished', 1)->orderBy('created_at', 'desc')->skip(4)->take(30000)->get();
        $data = PaginateCollection::paginate($data, 10);
        $latest = News::where('ispublished', 1)->orderBy('created_at', 'desc')->latest()->take(4)->get();
        return view('news', ["news" => $data, "latest" => $latest]);
    }

    public function newslisting(){
        $data= News::all();
        return view('newsdetail', ['newslisting' => $data]);
    }

    public function newsdetail($id) {
        $data = News::find($id);
        $news = News::where('ispublished', 1)->orderBy('created_at', 'desc')->take(5)->get();
        return view('newsdetail', [
            'newsdetail' => $data,
            'news' => $news
        ]);
    }

    public function publications(){

        $data= Publications::all();
        return view('publications', ["publications" => $data]);

    }
    public function newsletters(){
        $data= Newsletters::all();
        return view('newsletters', ["newsletters" => $data]);

    }

    public function homenews(){
        $latest = News::latest()->take(3)->orderBy('created_at', 'desc')->get();
        return view('homepage', ["news" => $latest]);
    }
}
