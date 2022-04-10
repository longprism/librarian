<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Auth;

class TestController extends Controller
{
  public function showMember()
  {
    $userdata = DB::table('users')->get();
    return view('dashadmin.member',['user'=>$userdata]);
  }
  public function regMember(Request $request) {
    $regmember = DB::table('users')->insert([
      'users' => Request::input('users'),
      'username' => Request::input('username'),
      'password' => bcrypt(Request::input('password')),
      'access' => Request::input('access')
    ]);
    return redirect('member');
  }
  public function dieMember($id)
  {
    DB::table('users')->where('ids', '=', $id)->delete();
    return redirect('member');
  }
  public function uptMember($id)
  {
    DB::table('users')
    ->where('ids', $id)
    ->update([
      'users' => Request::input('users'),
      'username' => Request::input('username'),
      'password' => bcrypt(Request::input('password')),
      'access' => Request::input('access'),
    ]);
    return redirect('member');
  }
}
