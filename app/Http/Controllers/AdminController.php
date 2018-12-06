<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\user;
use App\kepalatanaman;
use App\petani;
use App\pemantau;
use App\Lahan;
use App\Laporan;


class AdminController extends Controller
{
  public function index()
  {
      return view('KepalaTanaman');
  }
  public function daftarPetani()
  {
    $i = 1;
    $petanis = petani::with('user')->get();
    return view('Admin.daftar-petani', compact('petanis','i'));
  }
  public function daftarKepalaTanaman()
  {
    $i = 1;
    $keptans = kepalatanaman::with('user')->get();
    return view('Admin.daftar-kepala-tanaman', compact('keptans','i'));
  }
  public function daftarPemantau()
  {
    $i = 1;
    $pemantaus = pemantau::with('user')->get();
    return view('Admin.daftar-pemantau', compact('pemantaus','i'));
  }
  public function registrasiPemantau (Request $request)
  {
    $username = str_slug($request->username, '_');
    if (Auth::user()->level == 0) {
      $this->validate($request,[
          'username' => 'required|string|max:255|unique:users',
          'email' => 'required|string|email|max:255|unique:users',
          'password' => 'required|string|min:6|confirmed',
        ]);

      $user = User::create([
          'username'  => $username,
          'email'     => $request->email,
          'password'  => bcrypt($request->password),
          'level'     => 1,
      ]);

      pemantau::create([
        'nama'      => $request->nama,
        'nohp'      => $request->nohp,
        'email'     => $request->email,
        'alamat'    => $request->alamat,
        'image'     => "https://www.gravatar.com/avatar/". md5( strtolower( trim(  $request->email ) ) ) ."?d=monsterid",
            // 'image'     => "https://img00.deviantart.net/abf8/i/2017/028/d/3/souma_yukihira__shokugeki_no_souma__vector_by_greenmapple17-d9titiu.png",
        'user_id'   => $user->id
      ]);

      return redirect('/daftar-pemantau');
    } else {
      abort(404);
    }
    
  }
  public function dasboard()
  {
    if (Auth::user()->level == 0) {
     return view('Admin.index');
    } else {
     abort(404);
    }
  }
}
