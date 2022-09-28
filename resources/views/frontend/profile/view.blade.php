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
                  <p>{{$data->about}}</p>
                </div>
                @endif
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
          <div class="card h-100">
            <div class="card-body">
              <form action="{{route('store.profile')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row gutters">
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <h6 class="mb-2 text-primary">Personal Details</h6>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="form-group mb-3">
                      <label for="name">Full Name</label>
                      <input type="text" class="form-control" id="name" name="name" placeholder="Enter full name" value="{{$data->name ? $data->name : ''}}">
                    </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="form-group mb-3">
                      <label for="email">Email</label>
                      <input type="email" class="form-control" id="email" name="email" placeholder="Enter email ID" value="{{$data->email ? $data->email : ''}}">
                    </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="form-group mb-3">
                      <label for="phone">Phone</label>
                      <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter phone number" value="{{$data->phone ? $data->phone : ''}}">
                    </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="form-group mb-3">
                      <label for="gender">Gender</label>
                      <select class="form-control" aria-label="Default select example" name="gender" id="gender">
                        <option value="male" {{$data->gender =='male' ? 'selected' : ''}}>Male</option>
                        <option value="female" {{$data->gender =='female' ? 'selected' : ''}}>Female</option>
                        <option value="others" {{$data->gender =='others' ? 'selected' : ''}}>Others</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="form-group mb-3">
                      <label for="skills">Select your skill from following list </label>
                      <select name="skills" id="skills" class="form-control from-control-login">
                        <option value="1" {{$data->skills =='1' ? 'selected' : ''}}>Accounting/Finance</option>
                        <option value="2" {{$data->skills =='2' ? 'selected' : ''}}>Bank/Non-Bank Fin. Institution</option>
                        <option value="3" {{$data->skills =='3' ? 'selected' : ''}}>Commercial/Supply Chain</option>
                        <option value="4" {{$data->skills =='4' ? 'selected' : ''}}>Education/Training</option>
                        <option value="5" {{$data->skills =='5' ? 'selected' : ''}}>Engineer/Architect</option>
                        <option value="6" {{$data->skills =='6' ? 'selected' : ''}}>Garments/ Textile</option>
                        <option value="7" {{$data->skills =='7' ? 'selected' : ''}}>General Management/Admin</option>
                        <option value="8" {{$data->skills =='8' ? 'selected' : ''}}>IT/Telecommunication</option>
                        <option value="9" {{$data->skills =='9' ? 'selected' : ''}}>Marketing/Sales</option>
                        <option value="10" {{$data->skills =='10' ? 'selected' : ''}}>Media/Advertisement/Event Mgt.</option>
                        <option value="11" {{$data->skills =='11' ? 'selected' : ''}}>Medical/Pharma</option>
                        <option value="12" {{$data->skills =='12' ? 'selected' : ''}}>NGO/Development</option>
                        <option value="13" {{$data->skills =='13' ? 'selected' : ''}}>Research/Consultancy</option>
                        <option value="14" {{$data->skills =='14' ? 'selected' : ''}}>Secretary/Receptionist</option>
                        <option value="15" {{$data->skills =='15' ? 'selected' : ''}}>Data Entry/Operator/BPO</option>
                        <option value="16" {{$data->skills =='16' ? 'selected' : ''}}>Customer Support/Call Centre</option>
                        <option value="17" {{$data->skills =='17' ? 'selected' : ''}}>HR/Org. Development</option>
                        <option value="18" {{$data->skills =='18' ? 'selected' : ''}}>Design/Creative</option>
                        <option value="19" {{$data->skills =='19' ? 'selected' : ''}}>Production/Operation</option>
                        <option value="20" {{$data->skills =='20' ? 'selected' : ''}}>Hospitality/ Travel/ Tourism</option>
                        <option value="21" {{$data->skills =='21' ? 'selected' : ''}}>Beauty Care/ Health &amp; Fitness</option>
                        <option value="22" {{$data->skills =='22' ? 'selected' : ''}}>Law/ Legal</option>
                        <option value="23" {{$data->skills =='23' ? 'selected' : ''}}>Electrician/ Construction/ Repair</option>
                        <option value="24" {{$data->skills =='24' ? 'selected' : ''}}>Security/Support Service</option>
                        <option value="25" {{$data->skills =='25' ? 'selected' : ''}}>Driving/Motor Technician</option>
                        <option value="26" {{$data->skills =='26' ? 'selected' : ''}}>Agro (Plant/Animal/Fisheries)</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="form-group mb-3">
                      <label for="profile_photo" class="form-label">Profile Photo</label>
                      <input class="form-control" type="file" id="profile_photo" name="profile_photo">
                    </div>
                  </div>
                </div>
                <div class="row gutters">
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <h6 class="mt-3 mb-2 text-primary">Address</h6>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="form-group mb-3">
                      <label for="street">Street</label>
                      <input type="text" value="{{$data->street ? $data->street : ''}}" class="form-control" id="street" name="street" placeholder="Enter Street">
                    </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="form-group mb-3">
                      <label for="city">City</label>
                      <input type="text" value="{{$data->city ? $data->city : ''}}" class="form-control" id="city" name="city" placeholder="Enter City">
                    </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="form-group mb-3">
                      <label for="state">State</label>
                      <input type="text" value="{{$data->state ? $data->state : ''}}" class="form-control" id="state" name="state" placeholder="Enter State">
                    </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="form-group mb-3">
                      <label for="zip">Zip Code</label>
                      <input type="text" value="{{$data->zip ? $data->zip : ''}}" class="form-control" id="zip" name="zip" placeholder="Zip Code">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group mb-3">
                      <label for="about">About Yourself</label>
                      <textarea  class="form-control" id="about" cols="30" rows="10" name="about"> {{$data->about ? $data->about : ''}}</textarea>
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

