<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function __construct()
    {
    }
      public function showItem()
    {
      $countconfirm = DB::table('confirm_session')->count();
      $id = Auth::id();
      $user = Auth::user();
      $itemdata = DB::table('db_buku')->get();
      return view('dashuser.userco', [
        'item'=>$itemdata, 
        'user'=>$user, 
        'id'=>$id, 
        'countconfirm'=>$countconfirm
      ]);
    }
}
