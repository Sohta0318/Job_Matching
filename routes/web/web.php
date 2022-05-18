<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;

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
    return view('layouts.home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/job_search',function(){
    return view('layouts.job_search');
});

Route::get('/jobs',[JobController::class, 'index'])->name('job.jobs');

Route::get('/filter_job/{job}',[JobController::class, 'job'])->name('job.filter');
Route::get('/filter_job',[JobController::class, 'search'])->name('job.search');
Route::post('/filter_job/post',[JobController::class, 'store'])->name('job.store');

require __DIR__.'/auth.php';