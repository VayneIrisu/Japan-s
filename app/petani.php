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

}
