<?php

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
    return view('layouts.home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/test',function(){
    $client = new \GuzzleHttp\Client();
    $response = $client->request(
        'GET',
        'https://job.yahooapis.jp/v1/furusato/jobinfo/?appid=dj00aiZpPXZwWmFNNjJ3ZnM3cSZzPWNvbnN1bWVyc2VjcmV0Jng9NWU-', // URLを設定
    );
    $responseBody = $response->getBody()->getContents();
    return $responseBody;
    // return view('test',compact('responseBody'));
});



require __DIR__.'/auth.php';