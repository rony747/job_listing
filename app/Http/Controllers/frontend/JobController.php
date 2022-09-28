<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Jobs;
use Illuminate\Http\Request;

class JobController extends Controller
{
  public function index()
  {
    $data[ 'allJobs' ]     = Jobs ::paginate(9);
    $data[ 'jobstatus' ]   = Jobs ::groupBy('job_employment_status') -> pluck('job_employment_status');
    $data[ 'joblocation' ] = Jobs ::groupBy('job_location') -> pluck('job_location');
    return view('frontend.jobs.allJobs', $data);
  }

  public function view($id)
  {
    $data = Jobs ::where('id', $id) -> first();
    return view('frontend.jobs.single_job', compact('data'));
  }


  public function filter(Request $request)
  {
    $jobs      = Jobs ::query();
    $jobStatus = $request -> job_employment_status;
    $jobLocation = $request -> job_location;
    if ( $jobStatus ) {
      $jobs -> where('job_employment_status', 'LIKE', '%' . $jobStatus . '%');
    }
    if ( $jobLocation ) {
      $jobs -> where('job_location', 'LIKE', '%' . $jobLocation . '%');
    }
    $data                  = [
      'allJobs' => $jobs -> latest() -> paginate(9),
    ];
    $data[ 'jobstatus' ]   = Jobs ::groupBy('job_employment_status') -> pluck('job_employment_status');
    $data[ 'joblocation' ] = Jobs ::groupBy('job_location') -> pluck('job_location');
    return view('frontend.jobs.allJobs', $data);
  }
}
