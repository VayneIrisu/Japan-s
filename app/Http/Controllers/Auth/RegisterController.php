<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\petani;
use App\kepalatanaman;
use App\pemantau;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        if ($data['type'] == 'kepalatanaman') {
            return Validator::make($data, [
                'username' => 'required|string|max:255|unique:users',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:6|confirmed',
            ]);
        }else if ($data['type'] == 'petani') {
            // dd('masuk');
         return Validator::make($data, [
            'username' => 'required|string|max:255|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'ttl' => 'required|date_format:d-m-Y',
            'status_hidup' => 'required',
            'jenisKelamin' => 'required',
        ]);
     }else if ($data['type'] == 'pemantau') {
            // dd('masuk');
         return Validator::make($data, [
            'username' => 'required|string|max:255|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
     }
 }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {

        $username = str_slug($data['username'], '_');

        if ($data['type'] == 'kepalatanaman') {
          $pengg = ([
            'username'  => $username,
            'email'     => $data['email'],
            'password'  => bcrypt($data['password']),
            'level'     => 3,
            'status'     => 'setuju'
        ]);

        $user = User::create($pengg);

        $kepalatanaman = ([
            'nama'     => $data['nama'],
            'nik'      => $data['nik']
            'alamat'     => $data['alamat'],
            'email'     => $data['email'],
            'nohp'     => $data['nohp'],
            'image'     => "https://www.gravatar.com/avatar/". md5( strtolower( trim(  $data['email'] ) ) ) ."?d=monsterid",
            // 'image'     => "https://img00.deviantart.net/abf8/i/2017/028/d/3/souma_yukihira__shokugeki_no_souma__vector_by_greenmapple17-d9titiu.png",
            'user_id'     => $user->id,
        ]);
        kepalatanaman::create($kepalatanaman);

        return redirect('login');
      }else if ($data['type'] == 'petani') {
        // dd( $data['nik']);
        $user = User::create([
            'username'  => $username,
            'email'     => $data['email'],
            'password'  => bcrypt($data['password']),
            'level'     => 1,
            'status'     => 'tidak'
        ]);

        $petani = ([
            'nama'     => $data['name'],
            'nohp'     => $data['nohp'],
            'nik'     => $data['nik'],
            'alamat'     => $data['alamat'],
            'email'     => $data['email'],
            'agama'     => $data['agama'],
            'status'     => $data['status_hidup'],
            'jenisKelamin'     => $data['jenisKelamin'],
            'image'     => "https://www.gravatar.com/avatar/". md5( strtolower( trim(  $data['email'] ) ) ) ."?d=monsterid",
            // 'image'     => "https://img00.deviantart.net/abf8/i/2017/028/d/3/souma_yukihira__shokugeki_no_souma__vector_by_greenmapple17-d9titiu.png",
            'fotoKtp'     => $data['fotoKtp'],
            'user_id'     => $user->id
        ]);

        petani::create($petani);
        return redirect('login');
    }else if ($data['type'] == 'pemantau') {
        $user = User::create([
            'username'  => $username,
            'email'     => $data['email'],
            'password'  => bcrypt($data['password']),
            'level'     => 2,
            'status'     => 'tidak'
        ]);

        $pemantau = ([
            'nama'     => $data['nama'],
            'nohp'     => $data['nohp'],
            'alamat'     => $data['alamat'],
            'email'     => $data['email'],
            'image'     => "https://www.gravatar.com/avatar/". md5( strtolower( trim(  $data['email'] ) ) ) ."?d=monsterid",
            // 'image'     => "https://img00.deviantart.net/abf8/i/2017/028/d/3/souma_yukihira__shokugeki_no_souma__vector_by_greenmapple17-d9titiu.png",
            'user_id'     => $user->id
        ]);

        pemantau::create($pemantau);
        return redirect('login');
    }else{
        abort(404);
    }

}
}
