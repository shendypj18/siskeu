<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seksi extends Model
{
   protected $table = 'seksi';
   protected $primaryKey = 'id_seksi';
   protected $fillable = ['id_seksi','nama_seksi','nama_kepala'];
}
