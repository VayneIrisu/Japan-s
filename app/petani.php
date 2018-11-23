<?php

namespace App;

use Auth;
use app\User;
use Illuminate\Database\Eloquent\Model;

class petani extends Model
{
	protected $table = 'petani';
  protected $primaryKey = 'id';
	public $timestamps = true;
	protected $fillable = [
		'nama','nohp','nik','alamat','email','jenisKelamin','status','agama','image','fotoKtp','user_id'
		];
	public function user()
	{
			return $this->belongsTo('App\User');
	}
}
