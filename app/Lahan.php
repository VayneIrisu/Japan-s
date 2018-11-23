<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lahan extends Model
{
protected $table = 'lahan';
protected $primaryKey = 'id_lahan';
public $timestamps = true;
protected $fillable = [
  'pemiliklahan','lokasilahan','luas','harga','tgl_sewa','tgl_berakhirsewa','status_sewa','denah'
    //
}
