<?php

namespace App\Http\Controllers;

use App\pemantau;
use App\User;
use App\Laporan;
use Illuminate\Http\Request;
use Auth;
class PemantauController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
{
     if (Auth::user()->level == 1) {
       $pemantau = pemantau::where('email',Auth::user()->email)->first();
       return view('admin.index',compact('pemantau'));
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


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pemantau = pemantau::findOrFail($id);
        return view('pemantau.profile', compact('pemantau'));
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
        $pemantau = pemantau::findOrFail($id);
        $user = User::findOrFail(Auth::user()->id);
        if ($request->email == Auth::user()->email) {
           // validari
            $this->validate($request,[
                'email' => 'required|string',
                'nama' => 'required',
                'nohp' => 'required',
                'alamat' => 'required',
                'image' => 'required',
            ]);
        } else {
            // validari
            $this->validate($request,[
                'email' => 'required|string|email|max:255|unique:users',
                'email' => 'required|string',
                'nama' => 'required',
                'nohp' => 'required',
                'alamat' => 'required',
                'image' => 'required',
            ]);

        }


        if ($pemantau->isOuner()) {
            $user->update([
                'email'     => $request->email,
            ]);

            $pemantau->update([
                'nama'     => $request->nama,
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
