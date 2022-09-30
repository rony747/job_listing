<div class="search-type">
  <form action="{{route('job.filter')}}" method="get" id="sideJobEmp">
  <div class="alert">
    <div class="alert-title">Create Job Alert</div>
    <div class="alert-subtitle">Create a job alert now and never miss a job</div>
    <input type="text"
           placeholder="Enter job keyword">
    <button class="search-buttons">Create Job Alerts</button>
  </div>
  <div class="job-time">
    <div class="job-time-title">Type of Employment</div>
    <div class="job-wrapper">
      @php
      $count = 0;
      @endphp
      @foreach($jobstatus as $data)
        @php
           $count++;
        @endphp
      <div class="type-container">
        <input type="radio" {{ (request()->get('jobEmp') == $data->job_employment_status) ? 'checked' : ''}} id="job{{$count}}" name="jobEmp" class="job-style" value="{{$data->job_employment_status}}">
        <label for="job{{$count}}">{{$data->job_employment_status}}</label>
        <span class="job-number">{{$data->total}}</span>
      </div>
      @endforeach
    </div>
  </div>
  <div class="job-time">
    <div class="job-time-title">Location</div>
    <div class="job-wrapper">
      @php
        $count = 0;
      @endphp
      @foreach($joblocation as $data)
        @php
          $count++;
        @endphp
        <div class="type-container">
          <input type="radio" {{ (request()->get('jobLoc') == $data->job_location) ? 'checked' : ''}} id="jobLoc{{$count}}" name="jobLoc" class="job-style" value="{{$data->job_location}}">
          <label for="jobLoc{{$count}}">{{$data->job_location}}</label>
          <span class="job-number">{{$data->total}}</span>
        </div>
      @endforeach
    </div>
  </div>

  </form>
</div>