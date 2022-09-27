<?php

use App\Http\Controllers\frontend\JobController;
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

Route::get('/', function () {
    return view('frontend.home');
});

Route::group(['prefix'=>'jobs'], function(){
Route::get('/', [JobController::class, 'index'])->name('jobs');
Route::get('/view/{id}', [JobController::class, 'view'])->name('view.jobs');

});