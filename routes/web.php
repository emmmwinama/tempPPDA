<?php

use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\SupplierController;
use \App\Http\Controllers\NoticesController;
use \App\Http\Controllers\ResourcesController;
use \App\Http\Controllers\ApiController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('homepage');
})->name('home');

Route::get('/open-data', function (){
    return view('opendata');
})->name('open-data-portal');

Route::get('/about-ppda', function (){
    return view('about');
})->name('about-us');

Route::get('/contactus-ppda', function (){
    return view('contactus');
})->name('contact us');

Route::get('/supplier-registration', function (){
    return view('supplier-registration');
})->name('supplier-registration');

Route::get('/registered-suppliers', [
    SupplierController::class, 'showRegisteredSuppliers'
])->name('registered-suppliers');

Route::get("/test", function (){
    return view('trash.Test');
})->name('test');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/board', function(){
    return view('board');
})->name('board of directors');

Route::get('/management', function (){
    return view('management');
})->name('management');

Route::get('/directories', function (){
    return view('directory');
})->name('directories and departments');

Route::get('/eGP', function (){
    return view('egp');
})->name('eGP');

Route::get('/eGM', function (){
    return view('egm');
})->name('eGM');

Route::get('/msme-order', function (){
    return view('msme-order');
})->name('msme-order');

Route::get('/e-Services', function (){
    return view('eServices');
})->name('eServices');

Route::get('/tenders', [NoticesController::class, 'listTenders']
)->name('tenders');

Route::get('/intentions-to-award', [NoticesController::class, 'listIntentionsToAward']
)->name('intentions');

Route::get('/award-notices', [NoticesController::class, 'listAwards']
)->name('awards');

Route::get('/admin-review-notices', [NoticesController::class, 'listAdminReviews'])
->name('adminreview');

Route::get('/debarments', [NoticesController::class, 'listDebarments'])
->name('debarments');

Route::get('/vacancies', [NoticesController::class, 'listVacancies']
)->name('vacancies');

Route::get('/vacancies/{vacancies}', [NoticesController::class, 'viewVacancyDetails'])->name('vacancyDetails');

Route::get('/news', [NewsController::class, 'news']
)->name('news');

Route::get('newsdetail/{news}',[NewsController::class,'newsdetail'])->name('NewsDetail');

Route::get('/publications', [NewsController::class, 'publications']
)->name('publications');

Route::get('/newsletters', [NewsController::class, 'newsletters']
)->name('newsletters');

Route::get('/', [NewsController::class, 'homenews']
)->name('home');

Route::get('/services', function (){
    return view('services');
})->name('services');

Route::get('/general-resources', [
    ResourcesController::class, 'index'
])->name('resources');

Route::get('/circulars', [
    ResourcesController::class, 'showCirculars'
])->name('circulars');

Route::get('/reports', [
    ResourcesController::class, 'showReports'
])->name('reports');

Route::get('/research', [
    ResourcesController::class, 'showResearch'
])->name('research');

//Route::get('/debarred-suppliers', [
//    SupplierController::class, 'showDebarredSuppliers'
//])->name('debarred-suppliers');

//Route::get('/debarred-suppliers', function (){
//    Route::redirect('/admin');
//})->name('admin');

Route::post('/contactus-ppda', [\App\Http\Controllers\ContactFormController::class, 'email'])->name('contact.store');

Route::get('/validate/{supplier}', [ApiController::class, 'fetchSupplier']);

require __DIR__.'/auth.php';
