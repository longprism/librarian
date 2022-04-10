<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

  // user session

  Route::get('/home', 'HomeController@showItem');

  Route::get('/confirm', 'BorrowController@indexConfirm');

  Route::get('/confirm/diefull/{id}', 'BorrowController@truncateConfirm');

  Route::post('/toconfirm', 'BorrowController@storeConfirm');

  Route::get('/confirm/die/{id}', 'BorrowController@dieConfirm');

  Route::get('/invoice', 'InvoiceController@indexVoice');

  Route::post('/toinvoice', 'InvoiceController@storeVoice');

  Route::get('/invoice-print', 'InvoiceController@printVoice');

  // admin session

  Route::get('/bookco', 'BookController@showBook');

  Route::post('/bookco/reg', 'BookController@regBook');

  Route::post('/bookco/upt/{id}', 'BookController@uptBook');

  Route::get('/bookco/die/{id}', 'BookController@dieBook');

  Route::get('/member', 'TestController@showMember');

  Route::post('/member/reg', 'TestController@regMember');

  Route::post('/member/upt/{id}', 'TestController@uptMember');

  Route::get('/member/die/{id}', 'TestController@dieMember');

// login session

  Route::get('/logon', 'LawController@index');

  Route::post('/getlogin', 'LawController@getLogin');

  Route::get('/registrar', 'RegController@index');

  Route::post('/postreg', 'RegController@postReg');

  Route::get('/logout', function (){
    Auth::logout();
    return view('logon.login');
  });

  Auth::routes();
