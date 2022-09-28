<?php

use App\Http\Controllers\frontend\JobController;
use App\Http\Controllers\frontend\ProfileController;
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

Route::get('/frontend.home', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';

Route::group(['prefix'=>'jobs'],function(){
  Route::get('/', [JobController::class, 'index'])->name('jobs');
  Route::get('/view/{id}', [JobController::class, 'view'])->name('view.jobs');
});
Route::group(['prefix'=>'profile'],function(){
  Route::get('/view/', [ProfileController::class, 'view'])->name('profile');
  Route::post('/store/', [ProfileController::class, 'store'])->name('store.profile');
//  Route::get('/view/{id}', [JobController::class, 'view'])->name('view.jobs');
});

Route::get('job-filter',[JobController::class,'filter'])->name('job.filter');
