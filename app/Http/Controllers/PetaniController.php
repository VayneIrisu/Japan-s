<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\petani;
use App\User;
use Illuminate\Support\Facades\Storage;
use Auth;

class PetaniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
{
      if (Auth::user()->level == 1) {
        $petani = petani::where('email',Auth::user()->email)->first();
        return view('petani.index',compact('petani'));
    } else {
     abort(404);
      }

}
    public function edit($id)
{
    $petani = petani::findOrFail($id);
    return view('petani.profile', compact('petani'));
}
    public function update(Request $request, $id)
{
        $petani = petani::findOrFail($id);
        $user = User::findOrFail(Auth::user()->id);
        if ($request->email == Auth::user()->email) {
           // validari
            $this->validate($request,[
                'email' => 'required|string',
                'ttl' => 'required|date_format:d-m-Y',
                'status_hidup' => 'required',
                'jenisKelamin' => 'required',
            ]);
        } else {
            // validari
            $this->validate($request,[
                'email' => 'required|string|email|max:255|unique:users',
                'ttl' => 'required|date_format:d-m-Y',
                'status_hidup' => 'required',
                'jenisKelamin' => 'required',
            ]);

        }


        if ($petani->isOuner()) {
            $user->update([
                'email'     => $request->email,
            ]);

            $petani->update([
                'name'     => $request->name,
                'nohp'     => $request->nohp,
                'email'     => $request->email,
                'alamat'     => $request->alamat,
                'nik'     => $request->nik,
                'status'     => $request->status_hidup,
                'jenisKelamin'     =>$request->jenisKelamin,
                'agama'     => $request->agama,
                'image'     => $request->image,
                'fotoKtp'     => $request->fotoKtp,
            ]);
        }else {
         abort(403);
     }
     return redirect('/home');
 }
}
