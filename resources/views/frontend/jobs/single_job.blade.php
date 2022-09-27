@extends('frontend.templates.app')
@section('title', 'Home Page')
@section('content')

  @include('frontend.templates.parts.search')
  <div class="row mt-4">
    <div class="col-md-3">
      <div class="alert">

        <ul class="list-group">
          <li class="list-group-item" style="background-color: transparent"><b>Published on: </b> {{$data->created_at}}</li>
          <li class="list-group-item" style="background-color: transparent"><b>Vacancy: </b> {{$data->job_vacancy}}</li>
          <li class="list-group-item" style="background-color: transparent"><b>Employment Status: </b>{{$data->job_employment_status}}</li>
          <li class="list-group-item" style="background-color: transparent"><b>Experience: </b> {{$data->job_experience}}</li>
          <li class="list-group-item" style="background-color: transparent"><b>Gender: </b> {{$data->job_gender}}</li>
          <li class="list-group-item" style="background-color: transparent"><b>Age: </b> {{$data->job_age}}</li>
          <li class="list-group-item" style="background-color: transparent"><b>Job Location: </b> {{$data->job_location}}</li>
          <li class="list-group-item" style="background-color: transparent"><b>Salary: </b> @php echo number_format($data->job_salary); @endphp taka</li>
          <li class="list-group-item" style="background-color: transparent"><b>Application Deadline: </b>{{$data->job_application_deadline}}</li>
        </ul>
      </div>
    </div>
    <div class="col-md-9">
      <div class="content_area">
        <h4 class="searched-show">{{$data->job_title}}</h4>
        <hr>
        <div class="mt-4">
          <h6>Vacancy</h6>
          <p>{{$data->job_vacancy}}</p>
        </div>
        <div class="mt-4">
          <h6>Job Context </h6>
          {{$data->job_summary}}
        </div>
        <div class="mt-4">
          <h6>Job Responsibilities</h6>
          {{$data->job_responsibilities}}
        </div>
        <div class="mt-4">
          <h6>Employment Status </h6>
          {{$data->job_employment_status}}
        </div>
        <div class="mt-4">
          <h6>Educational Requirements</h6>
          {{$data->job_educational_requirements}}
        </div>
        <div class="mt-4">
          <h6>Experience Requirements</h6>
          {{$data->job_experience}}
        </div>
        <div class="mt-4">
          <h6>Additional Requirements</h6>
          {{$data->job_additional_requirements}}
        </div>
        <div class="mt-4">
          <h6>Job Location</h6>
          {{$data->job_location}}
        </div>
        <div class="mt-4">
          <h6>Salary</h6>
          @php echo number_format($data->job_salary); @endphp taka
        </div>
        <div class="mt-4">
          <h6>Compensation & Other Benefits</h6>
          {{$data->job_other_benefits}}
        </div>
        
        <div class="mt-4"><a href="" class="btn btn-default search-buttons card-buttons">Apply Now</a></div>
      </div>

    </div>
  </div>

@endsection