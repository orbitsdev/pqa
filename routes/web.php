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


// Route::get('/', [LandingPageController::class , 'index'])->name('client.index');
Route::get('/', function(){
    return Inertia::render('Test');
});
Route::get('/page-1', function(){
    return Inertia::render('Page1');
});
Route::get('/page-2', function(){
    return Inertia::render('Page2');
});
Route::get('/page-3', function(){
    return Inertia::render('Page3');
});


Route::group(
    [
        'prefix' => 'pqa/admin', 
        'as' => 'pqa.'
    ],
    function(){
        Route::get('/', [AdminController::class,'index'])->name('index');
        Route::get('/dashboard', [AdminController::class,'dashboard'])->name('dashboard');

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
