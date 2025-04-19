<?php

namespace App\Http\Controllers;

use App\Models\AdminReviewNotice;
use App\Models\AwardNotice;
use App\Models\DebarmentNotice;
use App\Models\IntentionToAward;
use App\Models\OpenTender;
use App\Models\vacancy;
use App\Utils\PaginateCollection;
use Illuminate\Http\Request;

class NoticesController extends Controller
{
    public function listTenders(){
        $tenders = OpenTender::where('closingdate', '>=', now()->toDate())->orderBy('dateposted', 'desc')->get();
        return view('tenders', compact('tenders'));
    }

    public function listIntentionsToAward(){
        $intentions = IntentionToAward::all();
        return view('intention-notices', compact('intentions'));
    }

    public function listAwards(){
        $awards = AwardNotice::all();
        return view('award-notices', compact('awards'));
    }

    public function listVacancies(){
        $vacancies = vacancy::where('archive', 0)->where('close_date','>=',now()->toDate())->orderBy('created_at', 'desc')->get();
        $vacancies = PaginateCollection::paginate($vacancies, 10);
        return view('vacancies', compact('vacancies'));
    }

    public function viewVacancyDetails($id){
        $data = vacancy::find($id);
        return view('vacancydetail', [
            'vacancydetail'=>$data
        ]);
    }

    public function listDebarments(){
        $data = DebarmentNotice::orderBy('created_at', 'desc')->get();
        return view('debarments', compact('data'));
    }

    public function listAdminReviews(){
        $data = AdminReviewNotice::orderBy('created_at', 'desc')->get();
        return view('admin-reviews', compact('data'));
    }
}
