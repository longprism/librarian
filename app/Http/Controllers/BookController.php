<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Request;

class BookController extends Controller
{
    public function __contruct()
    {
      $this->middleware('guest');
    }
    public function showBook()
    {
      $bookdata = DB::table('db_buku')->get();
      return view('dashadmin.bookco',['books'=>$bookdata]);
    }
    public function regBook(Request $request){
      $regbook = DB::table('db_buku')->insert([
        'namabk' => Request::input('namabk'),
        'cathegory' => Request::input('cathegory'),
        'author' => Request::input('author'),
        'tahun' => Request::input('tahun'),
        'score' => Request::input('score'),
      ]);
      return redirect('bookco');
    }
    public function uptBook($id)
    {
      DB::table('db_buku')
      ->where('idb', $id)
      ->update([
        'namabk' => Request::input('namabk'),
        'cathegory' => Request::input('cathegory'),
        'author' => Request::input('author'),
        'tahun' => Request::input('tahun'),
        'score' => Request::input('score'),
      ]);
      return redirect('bookco');
    }
    public function dieBook($id)
    {
      DB::table('db_buku')->where('idb', '=', $id)->delete();
      return redirect('bookco');
    }
}
