@extends('frontend.templates.app')
@section('title', 'Home Page')
@section('content')

  <div class="content">
    <div class="container">
      <div class="row gutters">

        <div class="col-md-12 col-sm-12 col-12">
          <div class="card h-100">
            <div class="card-body">
              <form action="{{route('store.jobs')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row gutters">
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <h6 class="mb-2 text-primary">Job Details</h6>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="form-group mb-3">
                      <label for="job_title">Job Title</label>
                      <input type="text" class="form-control" id="job_title" name="job_title" value="">
                    </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="form-group mb-3">
                      <label for="job_vacancy">Job Vacancy</label>
                      <input type="number" class="form-control" id="job_vacancy" name="job_vacancy" value="">
                    </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="form-group mb-3">
                      <label for="job_employment_status">Job Employment Status</label>
                      <select name="job_employment_status" id="job_employment_status" class="form-control">
                        <option value="Part Time">Part Time</option>
                        <option value="Full Time">Full Time</option>
                        <option value="Remote">Remote</option>
                        <option value="Internship">Internship</option>
                        <option value="Contract">Contract</option>
                        <option value="Training">Training</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="form-group mb-3">
                      <label for="job_experience">Job Experience</label>
                      <input type="text" class="form-control" id="job_experience" name="job_experience" value="">
                    </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="form-group mb-3">
                      <label for="job_gender">Gender</label>
                      <select name="job_gender" id="job_gender" class="form-control">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Others">Others</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="form-group mb-3">
                      <label for="job_age">Age Limit</label>
                      <input type="number" class="form-control" id="job_age" name="job_age" value="">
                    </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="form-group mb-3">
                      <label for="job_location">Location</label>
                      <select name="job_location" id="job_location" class="form-control">
                        <option value="Dhaka">Dhaka</option>
                        <option value="Barisal">Barisal</option>
                        <option value="Chittagong">Chittagong</option>
                        <option value="Khulna">Khulna</option>
                        <option value="Rajshahi">Rajshahi</option>
                        <option value="Rangpur">Rangpur</option>
                        <option value="Sylhet">Sylhet</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="form-group mb-3">
                      <label for="job_salary">Salary</label>
                      <input type="text" class="form-control" id="job_salary" name="job_salary" value="">
                    </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="form-group mb-3">
                      <label for="job_application_deadline">Application Deadline</label>
                      <input type="date" class="form-control" id="job_application_deadline" name="job_application_deadline"
                             value="">
                    </div>
                  </div>
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="form-group mb-3">
                      <label for="job_summary">Job Summary</label>
                      <textarea name="job_summary" id="job_summary" class="form-control" cols="30" rows="10"></textarea>
                    </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="form-group mb-3">
                      <label for="job_responsibilities">Job Responsibilities</label>
                      <textarea name="job_responsibilities" id="job_responsibilities" class="form-control" cols="30"
                                rows="10"></textarea>
                    </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="form-group mb-3">
                      <label for="job_educational_requirements">Educational Requirements</label>
                      <textarea name="job_educational_requirements" id="job_educational_requirements" class="form-control"
                                cols="30" rows="10"></textarea>
                    </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="form-group mb-3">
                      <label for="job_additional_requirements">Additional Requirements</label>
                      <textarea name="job_additional_requirements" id="job_additional_requirements" class="form-control"
                                cols="30" rows="10"></textarea>
                    </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="form-group mb-3">
                      <label for="job_other_benefits">Other Benefits</label>
                      <textarea name="job_other_benefits" id="job_other_benefits" class="form-control" cols="30"
                                rows="10"></textarea>
                    </div>
                  </div>
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-6 col-12">
                    <div class="form-group mb-3">
                      <label for="job_tags">Tags</label>
                      <select class="form-control selectpicker js-example-basic-multiple" name="job_tags[]" multiple
                              aria-label="Default select example" data-live-search="true">
                        @foreach($allTags as $data)
                          <option value="{{$data->id}}">{{$data->name}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                </div>

                <div class="row gutters">
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="text-right">
                      <button type="submit" id="submit" name="submit" class="btn btn-primary">Update</button>
                    </div>
                  </div>
                </div>
              </form>
            </div><!-- card-body -->
          </div>
        </div>
      </div>

    </div>
  </div>

@endsection

