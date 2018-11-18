<?php

namespace App;

use Auth;
use Illuminate\Database\Eloquent\Model;

class petani extends Model
{
	protected $table = 'farmers';
  protected $primaryKey = 'id';
	public $timestamps = true;
	protected $fillable = [
		'nama','nohp','nik','alamat','email','jenisKelamin','status','agama','image','fotoKtp','user_id'
];
	public function user(){
		return $this->belongsTo('App\User');
	}
	public function isOuner(){
		if (Auth::guest()) {
			return false;
		}
		return Auth::user()->id == $this->user_id;
	}
}
