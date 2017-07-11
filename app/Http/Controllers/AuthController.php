<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
  public function Logout(){
    Auth::logout();
    return view('pages.welcome');
  }
}
