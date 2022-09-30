<?php

use App\Http\Controllers\frontend\JobController;
use App\Http\Controllers\frontend\ProfileController;
use App\Models\Jobs;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
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

Route::get('/dashboard', [ProfileController::class, 'view'])->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';

// jobs routes
Route::group(['prefix'=>'jobs'],function(){
  Route::get('/', [JobController::class, 'index'])->name('jobs');
  Route::get('/view/{id}', [JobController::class, 'view'])->name('view.jobs');
  Route::get('/add', [JobController::class, 'add'])->name('add.jobs');
  Route::post('/store', [JobController::class, 'store'])->name('store.jobs');
  Route::get('job-filter',[JobController::class,'filter'])->name('job.filter');
});

// Profile routes
Route::group(['prefix'=>'profile'],function(){
  Route::get('/view/', [ProfileController::class, 'view'])->name('profile');
  Route::post('/store/', [ProfileController::class, 'store'])->name('store.profile');
  Route::get('/change-password/', [ProfileController::class, 'changePass'])->name('change.password');
  Route::post('/update-password/', [ProfileController::class, 'passUpdate'])->name('update.password');
//  Route::get('/view/{id}', [JobController::class, 'view'])->name('view.jobs');
});



