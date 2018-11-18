<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;

class kepalatanaman extends Model
{
	protected $table = 'kepala tanaman';
  protected $primaryKey = 'id';
	public $timestamps = true;
	protected $fillable = [
		'id','name','nik','alamat','email','image','user_id'
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
