<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
  public function view()
  {
    $userId = Auth ::user() -> id;
    $data = User ::where('id', $userId) -> first();
    return view('frontend.profile.view', compact('data'));

  }

  public function store(Request $request)
  {
    $data = User::find(Auth::user()->id);
    $data->name = $request->name;
    $data->email = $request->email;
    $data->phone  = $request->phone;
    $data->gender  = $request->gender;
    $data->skills  = $request->skills;
    $data->street  = $request->street;
    $data->city  = $request->city;
    $data->state  = $request->state;
    $data->zip  = $request->zip;
    $data->about  = $request->about;

    if ($request->file('profile_photo')) {
      $file = $request->file('profile_photo');
      @unlink(public_path('upload/user_profile_photo/' . $data->profile_photo)); /* To remove previous image */
      $filename = date('YmdHi') . '_' . $file->getClientOriginalName();
      $file->move(public_path('upload/user_profile_photo/'), $filename);
      $data->profile_photo = $filename;
    }
    $data->save();
    return redirect()->route('profile');
  }
}
