<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Jobs;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class JobController extends Controller
{
  public function index()
  {
    if ( Auth ::check() ) {
      $data = User ::find(Auth ::user() -> id);
    }
    $data[ 'allJobs' ]     = Jobs ::paginate(9);
    $data[ 'allTags' ]     = Tag ::all();
    $data[ 'jobstatus' ]   = Jobs ::groupBy('job_employment_status') -> select('job_employment_status', DB ::raw('count(*) as total')) -> get();
    $data[ 'joblocation' ] = Jobs ::groupBy('job_location') -> select('job_location', DB ::raw('count(*) as total')) -> get();
    $data[ 'jobExperience' ] = Jobs ::groupBy('job_experience') -> select('job_experience', DB ::raw('count(*) as total')) -> get();
    return view('frontend.jobs.allJobs', $data);
  }

  public function view($id)
  {
    $data = Jobs ::where('id', $id) -> first();
    return view('frontend.jobs.single_job', compact('data'));
  }


  public function filter(Request $request)
  {
    $jobs          = Jobs ::query();
    $jobStatus     = $request -> job_employment_status;
    $jobLocation   = $request -> job_location;
    $jobExperience   = $request -> job_experience;
    $jobStatusSide = $request -> jobEmp;
    $jobLocationSide = $request -> jobLoc;
    // Top filter
    if ( $jobStatus ) {
      $jobs -> where('job_employment_status', 'LIKE', '%' . $jobStatus . '%');
    }
    if ( $jobLocation ) {
      $jobs -> where('job_location', 'LIKE', '%' . $jobLocation . '%');
    }
    if ( $jobExperience ) {
      $jobs -> where('job_experience', 'LIKE', '%' . $jobExperience . '%');
    }
    // Top filter ends here

    // sidebar filter
    if ( $jobStatusSide ) {
      $jobs -> where('job_employment_status', 'LIKE', '%' . $jobStatusSide . '%');
    }
    if ( $jobLocationSide ) {
      $jobs -> where('job_location', 'LIKE', '%' . $jobLocationSide . '%');
    }
    // sidebar filter ends here

    $data                  = [
      'allJobs' => $jobs -> latest() -> paginate(9),
      'allTags' => Tag ::all(),
    ];
    $data[ 'jobstatus' ]   = Jobs ::groupBy('job_employment_status') -> select('job_employment_status', DB ::raw('count(*) as total')) -> get();
    $data[ 'joblocation' ] = Jobs ::groupBy('job_location') -> select('job_location', DB ::raw('count(*) as total')) -> get();
    $data[ 'jobExperience' ] = Jobs ::groupBy('job_experience') -> select('job_experience', DB ::raw('count(*) as total')) -> get();
    return view('frontend.jobs.allJobs', $data);
  }

  public function add()
  {
    $data[ 'allTags' ] = Tag ::all();
    return view('frontend.jobs.job_add', $data);
  }

  public function store(Request $request)
  {
    $data[ 'tags' ] = $request -> job_tags;
    dd($data[ 'tags' ]);
  }


}
