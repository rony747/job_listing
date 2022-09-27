<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Jobs;
use Illuminate\Http\Request;

class JobController extends Controller
{
  public function index()
  {
    $data[ 'allJobs' ] = Jobs ::paginate(9);
    return view('frontend.jobs.allJobs', $data);
  }

  public function view($id)
  {
    $data = Jobs ::where('id', $id) -> first();
    return view('frontend.jobs.single_job', compact('data'));
  }
}
