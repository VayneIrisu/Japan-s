<?php

namespace App;

use Auth;
use Illuminate\Database\Eloquent\Model;
use app\User;

class pemantau extends Model
{
	protected $table = 'pemantau';
  protected $primaryKey = 'id';
	public $timestamps = true;
	protected $fillable = [
		'nama','nik','nohp','alamat','email','image','user_id'
	];
	public function user()
    {
        return $this->belongsTo('App\User');
    }
}
