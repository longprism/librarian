<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class LawController extends Controller
{
  public function __constuct()
  {
    $this->middleware('guest');
  }
  public function index()
  {
    return view('logon.login');
  }
  public function getLogin(Request $request)
  {
    $user = [
      'username'=>Request::input('username'),
      'password'=>Request::input('password'),
      'access'=>'User'
    ];
    $admin = [
      'username'=>Request::input('username'),
      'password'=>Request::input('password'),
      'access'=>'Admin'
    ];
    if (Auth::attempt($user)) {
      if (Auth::check()) {
        return redirect()->intended('/home')->with(['msg', 'Logged in']);
      }
    }
    elseif (Auth::attempt($admin)) {
      if (Auth::check()) {
        return redirect()->intended('/member');
      }
    }
    else {
      return redirect('logon')->withErrors(['msg', 'Incorrect Password']);
    }
  }
}
