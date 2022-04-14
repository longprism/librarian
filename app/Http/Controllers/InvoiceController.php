<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Input;

class InvoiceController extends Controller
{
    public function indexVoice()
    {
      $confirmin = DB::table('db_pinjam')
      ->join('confirm_session', 'confirm_session.idc', '=', 'db_pinjam.idc')
      ->join('users', 'confirm_session.ids', '=', 'users.ids')
      ->join('db_buku', 'confirm_session.idb', '=', 'db_buku.idb')
      ->select('*')
      ->get();
      return view('dashadmin.borrow',['borrow' => $confirmin]);
    }
    public function storeVoice($id)
    {
      $confirmin = DB::table('confirm_session')
      ->join('users', 'confirm_session.ids', '=', 'users.ids')
      ->join('db_buku', 'confirm_session.idb', '=', 'db_buku.idb')
      ->select('users.*', 'db_buku.*', 'confirm_session.*')
      ->where('confirm_session.ids', '=', $id)
      ->get();
      
      foreach ($confirmin as $c) {
        $confirm = DB::table('db_pinjam')->insert([
          'idc' => $c->idc,
          'pinjam' => $c->pinjam,
          'kembali' => $c->kembali
        ]);
      }
  
      return redirect('home');
    }
}
