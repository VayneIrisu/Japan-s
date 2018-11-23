<?php
use App\User;
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
  // dd(User::find(99));
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/KepalaTanaman', 'AdminController@index')->name('KepalaTanaman');

Route::get('/daftar-kepala-tanaman', 'AdminController@daftarKepalaTanaman');
Route::get('/daftar-petani', 'AdminController@daftarPetani');
Route::get('/daftar-pemantau', 'AdminController@daftarPemantau');

Route::get('kepalatanaman/{id}/profile', 'KepalaTanamanController@edit');

Route::get('petani/{id}/edit', 'PetaniController@edit');

Route::get('pemantau/{id}/edit', 'PemantauController@edit');
