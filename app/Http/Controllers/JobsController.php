<?php

namespace App\Http\Controllers;

use App\Models\JobPosts;
use Illuminate\Http\Request;

class JobsController extends Controller
{
    public function index()
    {
        return view('jobs.index');
    }

    public function jobs()
    {
        return view('jobs.jobs_list');
    }

    public function show($id)
    {
        return view(
            'jobs.jobs-detail',
            ['jobId' => $id]
        );
    }
}
