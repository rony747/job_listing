<form action="{{route('job.filter')}}" method="get">
  <div class="search-menu">

    <div class="search-bar">
      <div class="search mt-3 mx-3">
        <div class="searched-show">Showing @php echo count($allJobs) @endphp Jobs</div>
      </div>
    </div>
    <div class="search-location">
      <svg xmlns="http://www.w3.org/2000/svg"
           viewBox="0 0 24 24"
           fill="none"
           stroke="currentColor"
           stroke-width="2"
           stroke-linecap="round"
           stroke-linejoin="round"
           class="feather feather-map-pin">
        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/>
        <circle cx="12"
                cy="10"
                r="3"/>
      </svg>
      <select name="job_location" id="job_location" class="form-control">
        <option value="" disabled selected> Select Location</option>
        @foreach($joblocation as $job)
          <option value="{{$job->job_location}}" {{ (request()->get('job_location') == $job->job_location) ? 'selected' : ''}}>{{$job->job_location}} ({{$job->total}})</option>
        @endforeach
      </select>
    </div>
    <div class="search-job">
      <svg xmlns="http://www.w3.org/2000/svg"
           viewBox="0 0 24 24"
           fill="none"
           stroke="currentColor"
           stroke-width="2"
           stroke-linecap="round"
           stroke-linejoin="round"
           class="feather feather-briefcase">
        <rect x="2"
              y="7"
              width="20"
              height="14"
              rx="2"
              ry="2"/>
        <path d="M16 21V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v16"/>
      </svg>
      <select name="job_employment_status" id="job_employment_status" class="form-control">
        <option value="" disabled selected> Select Job type</option>
        @foreach($jobstatus as $job)
          <option value="{{$job->job_employment_status}}" {{ (request()->get('job_employment_status') == $job->job_employment_status) ? 'selected' : ''}}>{{$job->job_employment_status}} ({{$job->total}})</option>
        @endforeach
      </select>
    </div>
    <div class="search-salary">

      <i class="fa-regular fa-clock mx-2"></i>

      <select name="job_experience" id="job_experience" class="form-control">
        <option value="" disabled selected> Required Experience </option>
        @foreach($jobExperience as $job)
          <option value="{{$job->job_experience}}" {{ (request()->get('job_experience') == $job->job_experience) ? 'selected' : ''}}>{{$job->job_experience}} years</option>
        @endforeach
      </select>

    </div>
    <button class="search-button" type="submit">Find Job</button>

  </div>
</form>