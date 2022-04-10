<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;

class InvoiceController extends Controller
{
    public function indexVoice()
    {
      $countconfirm = DB::table('confirm_session')->count();
      $confirmin = DB::table('confirm_session')
      ->join('users', 'confirm_session.ids', '=', 'users.ids')
      ->join('db_buku', 'confirm_session.idb', '=', 'db_buku.idb')
      ->select('users.*', 'db_buku.*', 'confirm_session.*')
      ->get();
      return view('dashuser.invoice',['borrow' => $confirmin, 'countconfirm'=>$countconfirm]);
    }
    public function storeVoice(Request $request)
    {
      DB::table('invoice_session')->insert([
        'idb_session' => Request::input('confirm_id'),
        'ids_session' => Request::input('confirm_user'),
        'namabk_session' => Request::input('confirm_nama'),
        'pinjam' => Request::input('confirm_datep'),
        'kembali' => Request::input('confirm_datek'),
        'qty' => Request::input('confirm_qty'),
      ]);
      return redirect('invoice',['voice' => $onvoice]);
    }
    public function printVoice()
    {
      $onvoice = DB::table('invoice_session')->get();
      return redirect('invoice-print',['voice' => $onvoice]);
    }
}
