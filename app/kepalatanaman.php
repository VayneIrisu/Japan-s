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
		'nama','nik','nohp','alamat','email','image','user_id'
	];

}
