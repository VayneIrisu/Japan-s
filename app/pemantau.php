<?php

namespace App;

use Auth;
use Illuminate\Database\Eloquent\Model;

class pemantau extends Model
{
	protected $table = 'pemantau';
  protected $primaryKey = 'id';
	public $timestamps = true;
	protected $fillable = [
		'nama','nohp','email','alamat','image','user_id'
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
