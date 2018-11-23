<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\kepalatanaman;
use Auth;
class KepalaTanamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       if (Auth::user()->level == 3) {
           $kepalatanaman = kepalatanaman::where('email',Auth::user()->email)->first();
           dd($kepalatanaman);
           return view('kepalatanaman.index',compact('kepalatanaman'));
       } else {
           abort(404);
       }

   }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kepalatanaman = kepalatanaman::findOrFail($id);
        return view('kepalatanaman.profile', compact('kepalatanaman'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $kepalatanaman = kepalatanaman::findOrFail($id);
        $user = User::findOrFail(Auth::user()->id);
        if ($request->email == Auth::user()->email) {
           // validari
            $this->validate($request,[
                'email' => 'required|string',
                'nama' => 'required',
                'nik' => 'required',
                'alamat' => 'required',
                'nohp' => 'required',
                'image' => 'required',
            ]);
        } else {
            // validari
            $this->validate($request,[
                'email' => 'required|string|email|max:255|unique:users',
                'email' => 'required|string',
                'nama' => 'required',
                'nik' => 'required',
                'nohp' => 'required',
                'alamat' => 'required',
                'image' => 'required',
            ]);

        }

        if ($kepalatanaman->isOuner()) {
            $user->update([
                'email'     => $request->email,
            ]);

            $kepalatanaman->update([
                'nama'     => $request->nama,
                'nik'      => $request->nik,
                'nohp'     => $request->nohp,
                'email'     => $request->email,
                'alamat'     => $request->alamat,
                'image'     => $request->image,
            ]);
        }else {
         abort(403);
     }
     return redirect('/home');
 }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
