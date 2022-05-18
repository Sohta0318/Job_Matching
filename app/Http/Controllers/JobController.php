<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    function index(){
    $jobs = Job::all();
        return view('user.job.index',compact('jobs'));
    }

    function search(){
        return view('layouts.filter_jobs');
    }

    function job(Job $job){
        return view('layouts.filter_job',compact('job'));
    }

    function store (Request $request){
        $keyword = $request->keyword;
        $place = $request ->place;
        $job = Job::where('place', 'LIKE',  "%{$place}%")->first();
        $jobs = Job::where('place', 'LIKE',  "%{$place}%")->get();
        return redirect()->route('job.search')->with(['jobs'=>$jobs]);
    }
}