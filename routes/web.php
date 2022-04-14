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

  Route::redirect('/', '/home');
  
  Route::get('/home', 'HomeController@showItem')->name('home');

  Route::get('/confirm', 'BorrowController@indexConfirm');

  Route::get('/confirm/diefull/{id}', 'BorrowController@truncateConfirm');

  Route::post('/toconfirm', 'BorrowController@storeConfirm');

  Route::get('/confirm/die/{id}', 'BorrowController@dieConfirm');

  Route::post('/toinvoice/{id}', 'InvoiceController@storeVoice');

  // admin session

  Route::get('/bookco', 'BookController@showBook');

  Route::post('/bookco/reg', 'BookController@regBook');

  Route::post('/bookco/upt/{id}', 'BookController@uptBook');

  Route::get('/bookco/die/{id}', 'BookController@dieBook');

  Route::get('/member', 'TestController@showMember');

  Route::post('/member/reg', 'TestController@regMember');

  Route::post('/member/upt/{id}', 'TestController@uptMember');

  Route::get('/member/die/{id}', 'TestController@dieMember');

  Route::get('/borrow', 'InvoiceController@indexVoice');

// login session

  Route::get('/logon', 'LawController@index')->name('login');

  Route::post('/getlogin', 'LawController@getLogin');

  Route::get('/registrar', 'RegController@index');

  Route::post('/postreg', 'RegController@postReg');

  Route::get('/logout', function (){
    Auth::logout();
    return redirect('/logon');
  });

  