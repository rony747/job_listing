@extends('frontend.templates.app')
@section('title', 'Home Page')
@section('content')

  @include('frontend.templates.parts.search')
  <div class="main-container">
    @include('frontend.templates.parts.sidebar')

    <div class="searched-jobs">
      <div class="searched-bar">

        <div class="searched-sort">Sort by: <span class="post-time">Newest Post </span><span
              class="menu-icon">▼</span></div>
      </div>
      <div class="job-cards">
        @foreach($allJobs as $data)
          <div class="job-card">
            <div class="job-card-header">
              <img src="" alt="">
              <div class="menu-dot"></div>
            </div>
            <div class="job-card-title"><a href="{{route('view.jobs', $data->id)}}">{{$data->job_title}}</a></div>
            <div class="job-card-subtitle">

              {{\Illuminate\Support\Str::words($data->job_summary, 20)}}
            </div>
            <div class="job-detail-buttons">
              <button class="search-buttons detail-button">{{$data->job_employment_status}}</button>
              <button class="search-buttons detail-button">{{$data->job_experience}} of exp.</button>
              <button class="search-buttons detail-button"><i
                    class="fa-solid fa-dollar-sign"></i> @php echo number_format($data->job_salary); @endphp</button>
            </div>
            <div class="job-card-buttons">
              <a href="{{route('view.jobs', $data->id)}}">
                <button class="search-buttons card-buttons">View Details</button>
              </a>
            </div>
          </div><!-- job-card -->

        @endforeach
      </div><!-- job-cards -->
      <div class="pagination mt-4">
        {{$allJobs->appends($_GET)->links('pagination::bootstrap-5')}}
      </div>

    </div>

  </div><!-- main-container -->

@endsection