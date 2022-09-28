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
}
