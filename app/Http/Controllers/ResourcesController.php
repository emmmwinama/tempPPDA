<?php

namespace App\Http\Controllers;

use App\Models\Resource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ResourcesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(\request('document')){
            $requestsearch =\request('document');
            $resources = DB::table('resources')
                ->where('name', 'like', '%'.$requestsearch.'%')
                ->where('category', '=', 'general')
                ->orWhere('description', 'like',  '%'.$requestsearch.'%')
                ->get();
            return view('resources', ['resources'=>$resources, 'search'=>$requestsearch]);
        }else{
            $resources = Resource::where('category','general')
                ->paginate(10);
            return view('resources', compact('resources'));
        }
    }

    public function showCirculars(){
        if(\request('document')){
            $requestsearch =\request('document');
            $circulars = DB::table('resources')
                ->where('name', 'like', '%'.$requestsearch.'%')
                ->where('category', '=', 'circular')
                ->orWhere('description', 'like',  '%'.$requestsearch.'%')
                ->get();
            return view('circulars', ['circulars'=>$circulars, 'search'=>$requestsearch]);
        }else{
            $circulars = Resource::where('category','circular')
                ->paginate(10);
            return view('circulars', compact('circulars'));
        }
    }

    public function showReports(){
        if(\request('document')){
            $requestsearch =\request('document');
            $reports = DB::table('resources')
                ->where('name', 'like', '%'.$requestsearch.'%')
                ->where('category', '=', 'report')
                ->orWhere('description', 'like',  '%'.$requestsearch.'%')
                ->get();
            return view('reports', ['reports'=>$reports, 'search'=>$requestsearch]);
        }else{
            $reports = Resource::where('category','report')
                ->paginate(10);
            return view('reports', compact('reports'));
        }
    }

    public function showResearch(){
        if(\request('document')){
            $requestsearch =\request('document');
            $researchs = DB::table('resources')
                ->where('name', 'like', '%'.$requestsearch.'%')
                ->where('category', '=', 'research')
                ->orWhere('description', 'like',  '%'.$requestsearch.'%')
                ->get();
            return view('reports', ['researchs'=>$researchs, 'search'=>$requestsearch]);
        }else{
            $researchs = Resource::where('category','research')
                ->paginate(10);
            return view('research', compact('researchs'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Resource  $resources
     * @return \Illuminate\Http\Response
     */
    public function show(Resource $resources)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Resource  $resources
     * @return \Illuminate\Http\Response
     */
    public function edit(Resource $resources)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Resource  $resources
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Resource $resources)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Resource  $resources
     * @return \Illuminate\Http\Response
     */
    public function destroy(Resource $resources)
    {
        //
    }
}
