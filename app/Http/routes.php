<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Halaman TANPA LOGIN (Kata Random & Kata Terbaru)
Route::get('/','KamusController\AlphabetController@getmain');
Route::get('/kamusviewmain','KamusController\AlphabetController@getmain');

// Halaman Cari Kata
Route::get('/cari','KamusController\CariKataController@cari');

// Halaman Penampilan Kata
Route::get('/alphabet/{text}','KamusController\AlphabetController@alphabet');

// Halaman Penjelasan Kata
Route::get('/penjelasan/{kata}','KamusController\PenjelasanController@kataberdasarkanid');

//Halaman Edit Kata
Route::get('data_edit/{id}','KamusController\DataEditController@show');
Route::post('edit/{id}','KamusController\DataEditController@edit');

//Halaman Delete Kata
Route::get('delete/{id}','KamusController\DataDeleteController@destroy');

//Halaman Tong Sampah
Route::get('/tongsampah','KamusController\TongSampahController@tongsampah');

//Halaman Login
Route::get('KamusView.login', function () {
    return view('KamusView.login');
});
Route::post('/login','KamusController\LoginController@login');


//Halaman ADMIN (Kata Random & Kata Terbaru)
Route::get('/kamusmainadmin','KamusController\AlphabetController@getmainAdmin');

// Halaman Cari Kata
Route::get('/cari','KamusController\CariKataController@CariAdmin');

// Halaman Penampilan Kata
Route::get('/admin/alphabet/{text}','KamusController\AlphabetController@alphabetAdmin');

// Halaman Penjelasan Kata
Route::get('/penjelasanadmin/{kata}','KamusController\PenjelasanController@kataberdasarkanidAdmin');

//Halaman Penambahan Kata
Route::get('AdminView.data_create', function () {
    return view('AdminView.data_create');
});
Route::get('insert','KamusController\DataInsertController@AdminInsertForm');
Route::post('createdataadmin','KamusController\DataInsertController@AdminInsertData');

//Halaman Edit Kata
Route::get('data_edit/{id}','KamusController\DataEditController@show');
Route::post('edit/{id}','KamusController\DataEditController@edit');

//Halaman Delete Kata
Route::get('delete/{id}','KamusController\DataDeleteController@destroy');

//Halaman Tong Sampah
Route::get('/tongsampah','KamusController\TongSampahController@tongsampah');

//Info approval
Route::get('/info', 'KamusController\ApprovalController@show');
Route::get('/penjelasanapproval/{id}','KamusController\ApprovalController@penjelasanA');
//Reject kata
Route::get('reject/{id}','KamusController\ApprovalController@reject');
//Reject kata
Route::get('approve/{kata}/{id}','KamusController\ApprovalController@approve');

//LOGOUT
Route::get('/logout','KamusController\LoginController@logout');





///////////USER LOGIN
Route::get('/kamusmainuser','KamusController\AlphabetController@getmainUser');

// Halaman Cari Kata
Route::get('/cari','KamusController\CariKataController@cariUser');

// Halaman Penampilan Kata
Route::get('/user/alphabet/{text}','KamusController\AlphabetController@alphabetUser');

// Halaman Penjelasan Kata
Route::get('/penjelasanuser/{kata}','KamusController\PenjelasanController@kataberdasarkanidUser');

//Halaman Penambahan Kata
Route::get('/createdata', function () {
    return view('UserView.data_create');
});
Route::get('insert','KamusController\DataInsertController@UserInsertForm');
Route::post('create','KamusController\DataInsertController@UserInsertData');
Route::get('/userlogout','KamusController\LoginController@userlogout');


