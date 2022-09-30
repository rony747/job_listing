@extends('frontend.templates.app')
@section('title', 'Home Page')
@section('content')

  <div class="content">
    <div class="container">
      <div class="row gutters">
        <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
          <div class="card h-100">
            <div class="card-body">
              <div class="account-settings">
                <div class="user-profile">
                  <div class="user-avatar">
                    @if($data->profile_photo)
                      <img src="/upload/user_profile_photo/{{$data->profile_photo}}" id="profilePhoto" alt="Maxwell Admin">
                    @else
                      <img src="https://via.placeholder.com/150" id="profilePhoto" alt="Maxwell Admin">
                    @endif

                  </div>
                  <h5 class="user-name">{{$data->name}}</h5>
                  <h6 class="user-email">{{$data->email}}</h6>
                </div>
                @if($data->about)
                  <div class="about">
                    <h5>About</h5>
                    <p>{!! $data->about !!}</p>
                  </div>
                @endif
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
          <div class="card h-100">
            <div class="card-body">
              <form action="{{ route('update.password') }}" method="post">
                @csrf

                <div class="row gutters">
                  <!-- Password Reset Token -->
                  @if (session('error'))
                    <div class="alert alert-danger">
                      {{ session('error') }}
                    </div>
                  @endif
                  @if (session('success'))
                    <div class="alert alert-success">
                      {{ session('success') }}
                    </div>
                  @endif
                  @if($errors)
                    @foreach ($errors->all() as $error)
                      <div class="alert alert-danger">{{ $error }}</div>
                    @endforeach
                  @endif
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="form-group mb-3">
                      <label for="oldPassword">Old password</label>
                      <input type="password" class="form-control" id="oldPassword" name="oldPassword" >
                    </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="form-group mb-3">
                      <label for="password">New Password</label>
                      <input type="password"  class="form-control" id="password" name="password" >
                    </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="form-group mb-3">
                      <label for="password_confirmation">Confirm Password</label>
                      <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" >
                    </div>
                  </div>
                </div>
                <div class="row gutters">
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="text-right">
                      <button type="submit" id="submit" name="submit" class="btn btn-primary">Update Password</button>
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

