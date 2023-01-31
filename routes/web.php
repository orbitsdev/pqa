<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LandingPageController;
use Inertia\Inertia;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return Inertia::render('Official',[
//         'status'=> 'Success Install'
//     ]);
// });


Route::get('/', [LandingPageController::class , 'index'])->name('client.index');
// Route::get('/', function(){
//     return Inertia::render('Test');
// });
// Route::get('/page-1', function(){
//     return Inertia::render('Page1');
// });
// Route::get('/page-2', function(){
//     return Inertia::render('Page2');
// });
// Route::get('/page-3', function(){
//     return Inertia::render('Page3');
// });


Route::group(
    [
        'prefix' => 'pqa/admin', 
        'as' => 'pqa.'
    ],
    function(){
        Route::get('/', [AdminController::class,'index'])->name('index');
        Route::get('/dashboard', [AdminController::class,'dashboard'])->name('dashboard');
        Route::get('/about-pqa', [AdminController::class,'about_pqa'])->name('about_pqa');
        Route::get('/event-management', [AdminController::class,'event_management'])->name('event_management');
        Route::get('/about-pqa', [AdminController::class,'about_pqa'])->name('about_pqa');
        Route::get('/applicants', [AdminController::class,'applicants'])->name('applicants');
        Route::get('/assessores', [AdminController::class,'assessores'])->name('assessores');
        Route::get('/resources', [AdminController::class,'resources'])->name('resources');
        Route::get('/news-and-articles', [AdminController::class,'news_and_articles'])->name('news_and_articles');
        Route::get('/frequently-ask', [AdminController::class,'fqa'])->name('fqa');
        Route::get('/contact-information', [AdminController::class,'contact_information'])->name('contact_information');

});
// Route::group(
//     [
//         'prefix' => 'pqa', 'as' => 'pqa.'
//     ],
//     function(){

// });
// Route::group([
//     'prefix' => 'pqa/admin', 'as' => 'admin.'
// ], function(){
//     Route::get('/', [AdminController::class , 'index'])->name('index');

// });


Route::get('/contact', function(){
    return Inertia::render('client/Contact');
});
