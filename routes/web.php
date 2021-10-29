<?php

use App\Events\FormSubmitted;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/chat', function () {
    return view('chat');
});

Route::get('/chatgan', function () {
    return view('inchat');
});

Route::post('/chatgan', function () {
    // post

    $text = request()->text;
    // echo $text;

    event(new FormSubmitted($text));

});

//=================     REMEMBER!!!     ========================
//=========================== ini ROUTE Login ==========================
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// View public
// Route::get('bale', 'PageControl@umah');
Route::get('sinau', 'PageControl@front');
// Route::get('folio', 'PageControl@front1');
// Route::get('awwal', 'PageControl@front1');

//=========      Tampilan ADMIN
//==========================    DATA buku
Route::get('databuku', 'DataBuku@index');
Route::get('tambahbuku', 'DataBuku@create');
Route::post('simpanbuku', 'DataBuku@store');
Route::get('editbuku/{id}', 'DataBuku@edit');
Route::post('saveedit/{id}', 'DataBuku@update');
Route::delete('deletebuku/{id}', 'DataBuku@edit');

//========================== Data Pinjam
// Route::resource('datapinjam','DataPinjam');
Route::get('datapinjam', 'DataPinjam@index');
Route::get('addpinjam', 'DataPinjam@create');
Route::post('simpanpinjam', 'DataPinjam@store');
Route::get('editpinjam/{id}', 'DataPinjam@edit');
Route::post('Esavejam', 'DataPinjam@update');
Route::post('edittrans', 'DataPinjam@uptrans');
Route::get('bukti/{id}', 'DataPinjam@print');
//Bukti Pencetakan
Route::get('sanksit/{id}', 'DataPinjam@printtelat');
Route::get('sanksih/{id}', 'DataPinjam@printilang');
Route::get('printtrans/{id}', 'DataPinjam@printtrans');
Route::get('/dynamic_pdf/pdf', 'DynamicPDFController@pdf');




// // Route::delete('');

//=========================== Data Anggota
Route::get('dataanggota','DataAnggota@index');
Route::get('tambahanggota','DataAnggota@create');
Route::post('saveanggota','DataAnggota@store');
