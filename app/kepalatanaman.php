<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;
use app\User;

class kepalatanaman extends Model
{
	protected $table = 'kepalatanaman';
  protected $primaryKey = 'id';
	public $timestamps = true;
	protected $fillable = [
		'nama','nik','alamat','email','nohp','image','user_id'
	];

	public function user()
    {
        return $this->belongsTo('App\User');
    }

}
