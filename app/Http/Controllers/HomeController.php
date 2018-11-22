<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\kepalatanaman;

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
        $umum = kepalatanaman::find(Auth::User()->id)->first();
        return view('KepalaTanaman.index',compact('umum'));
      }
      elseif(Auth::User()->level==2){
        $umum = petani::find(Auth::User()->id)->first();
        return view('Petani.index',compact('umum'));
      }
      elseif(Auth::User()->level==1){
        $umum = pemantau::find(Auth::User()->id)->first();
        return view('Pemantau.index',compact('umum'));
      }
      else{
      return view('home');
      }
    }
}
