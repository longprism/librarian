<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Auth;

class BorrowController extends Controller
{
  public function indexConfirm()
  {
    $id = Auth::id();
    $user = Auth::user();
    $countconfirm = DB::table('confirm_session')->count();
    $confirmin = DB::table('confirm_session')
    ->join('users', 'confirm_session.ids', '=', 'users.ids')
    ->join('db_buku', 'confirm_session.idb', '=', 'db_buku.idb')
    ->select('users.*', 'db_buku.*', 'confirm_session.*')
    ->get();
    return view('dashuser.confirm', [
      'borrow' => $confirmin, 
      'user'=>$user, 
      'id'=>$id, 
      'countconfirm'=>$countconfirm
    ]);
  }
  public function storeConfirm(Request $request)
  {
    $confirm = DB::table('confirm_session')->insert([
      'idb' => Request::input('idb'),
      'ids' => Request::input('ids'),
      'pinjam' => Request::input('pinjam'),
      'kembali' => Request::input('kembali'),
    ]);
    return redirect('home');
  }
  public function dieConfirm($id)
  {
    DB::table('confirm_session')->where('idc', '=', $id)->delete();
    return redirect('confirm');
  }
  public function truncateConfirm($id)
  {
    DB::table('confirm_session')->where('ids', '=', $id)->delete();
    return redirect('confirm');
  }
}
