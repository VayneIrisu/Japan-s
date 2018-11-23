<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\kepalatanaman;
use App\pemantau;
use App\petani;
use App\Lahan;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      if(Auth::User()->level==3){
        $kepalatanaman = kepalatanaman::where('user_id', Auth::User()->id)->first();
        return view('KepalaTanaman.index',compact('kepalatanaman'));
      }
      elseif(Auth::User()->level==1){
        $petani = petani::where('user_id', Auth::User()->id)->first();
        return view('Petani.index',compact('petani'));
      }
      elseif(Auth::User()->level==2){
        $pemantau = pemantau::where('user_id', Auth::User()->id)->first();
        return view('Pemantau.index',compact('pemantau'));
      }
      else{
      return view('home');
      }
    }
}
