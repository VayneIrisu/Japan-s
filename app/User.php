<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{

	use Notifiable;
	public $timestamps = true;
	protected $fillable = [
		'password','level','username','email','status_id','status'
	];

	protected $hidden = [
		'password', 'remember_token',
	];

	public function petanis()
	{
		return $this->hasMany('App\petani');
	}
	public function pemantau()
	{
		return $this->hasMany('App\pemantau');
	}
	public function kepalatanaman()
	{
		return $this->hasMany('App\kepalatanaman');
	}
	public function isAdmin()
	{
		if ($this->level == 0) {
			return true;
		} else {
			return false;
		}
	}
}
