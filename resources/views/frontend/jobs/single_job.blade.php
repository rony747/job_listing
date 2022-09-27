@extends('frontend.templates.app')
@section('title', 'Home Page')
@section('content')

  @include('frontend.templates.parts.search')
  <div class="row mt-4">
    <div class="col-md-3">
      <div class="alert">
        <div class="alert-title">Create Job Alert</div>
        <div class="alert-subtitle">Create a job alert now and never miss a job</div>
        <input type="text"
               placeholder="Enter job keyword">
        <button class="search-buttons">Create Job Alerts</button>
      </div>
    </div>
    <div class="col-md-9">
      <div class="content_area">
        <h4 class="searched-show">{{$data->job_title}}</h4>
      </div>

    </div>
  </div>

@endsection