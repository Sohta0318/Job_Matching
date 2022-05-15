<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobController extends Controller
{
    function index(){
        $client = new \GuzzleHttp\Client();
    $response = $client->request(
        'GET',
        'https://job.yahooapis.jp/v1/furusato/jobinfo/?appid=dj00aiZpPXZwWmFNNjJ3ZnM3cSZzPWNvbnN1bWVyc2VjcmV0Jng9NWU-&results=1000&fields=full',
    );
    $responseBody = json_decode($response->getBody()->getContents());
    $pagination = $responseBody->results::pagination(10);
        return view('user.job.index',compact('pagination'));
    }

    function job(){
        return view('layouts.filter_jobs');
    }
}