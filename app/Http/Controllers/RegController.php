<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
// use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class RegController extends Controller
{
    public function __construct() {
      $this->middleware('guest');
    }
    public function index() {
      return view('logon.register');
    }
    public function postReg(Request $request)
    {
      $rules = ['users' => 'required', 'username' => 'required', 'password' => 'required'];
      $validator = Validator::make(Request::all(), $rules);

      $user = new User();
      $user->users = Request::input('users');
      $user->username = Request::input('username');
      $user->password = bcrypt(Request::input('password'));
      $user->access = 'User';
      //dd($user);
      $user->save();
      return view('logon.succreg');
    }
}
