<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible"
        content="IE=edge">
  <meta name="viewport"
        content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>

<body>
<div class="job">
  <div class="header">
    <div class="logo">
      <svg xmlns="http://www.w3.org/2000/svg"
           viewBox="0 0 512 512">
        <path xmlns="http://www.w3.org/2000/svg"
              d="M512 503.5H381.7a48 48 0 01-45.3-32.1L265 268.1l-9-25.5 2.7-124.6L338.2 8.5l23.5 67.1L512 503.5z"
              fill="#0473ff"
              data-original="#28b446" />
        <path xmlns="http://www.w3.org/2000/svg"
              fill="#0473ff"
              data-original="#219b38"
              d="M361.7 75.6L265 268.1l-9-25.5 2.7-124.6L338.2 8.5z" />
        <path xmlns="http://www.w3.org/2000/svg"
              d="M338.2 8.5l-82.2 234-80.4 228.9a48 48 0 01-45.3 32.1H0l173.8-495h164.4z"
              fill="#0473ff"
              data-original="#518ef8" />
      </svg>
      Milao
    </div>
    <div class="header-menu">
      <a href="{{route('jobs')}}"
         class="active">Find Job</a>
      <a href="#">Company Review</a>
      <a href="#">Find Salaries</a>
    </div>
    <div class="user-settings">
      <div class="dark-light">
        <svg viewBox="0 0 24 24"
             stroke="currentColor"
             stroke-width="1.5"
             fill="none"
             stroke-linecap="round"
             stroke-linejoin="round">
          <path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z" />
        </svg>
      </div>
      <div class="user-menu">
        <svg xmlns="http://www.w3.org/2000/svg"
             viewBox="0 0 24 24"
             fill="none"
             stroke="currentColor"
             stroke-width="2"
             stroke-linecap="round"
             stroke-linejoin="round"
             class="feather feather-square">
          <rect x="3"
                y="3"
                width="18"
                height="18"
                rx="2"
                ry="2" />
        </svg>
      </div>
      @if (Auth::check())


        @if(Auth::user()->profile_photo)
          <img class="user-profile" src="/upload/user_profile_photo/{{Auth::user()->profile_photo}}" id="profileImg" alt="Maxwell Admin">
        @else
          <img class="user-profile" src="https://via.placeholder.com/150" id="profileImg" alt="Maxwell Admin">
        @endif

        <div class="dropdown profile-menu">
          <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            My account
          </button>
          <ul class="dropdown-menu " aria-labelledby="dropdownMenuButton1">
            <li class="px-3 py-2">{{Auth::user()->name}}</li>
            <li><a class="dropdown-item" href="{{route('profile')}}">Edit Profile</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </div>

      @else
        <div class="user-name"><a href="{{route('login')}}">Login</a> | <a href="{{route('register')}}">Register</a></div>
      @endif


    </div>
  </div>
  <div class="wrapper">


