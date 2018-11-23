<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\user;
use App\kepalatanaman;
use App\petani;
use App\pemantau;
use App\lahan;


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
  public function dasboard()
  {
    if (Auth::user()->level == 0) {
     return view('Admin.index');
    } else {
     abort(404);
    }
  }
}
