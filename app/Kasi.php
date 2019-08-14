<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Kasi extends Authenticatable
{
    protected $fillable = [
        'nama', 'nip_kasi' ,'email_kasi', 'password'
    ];
    protected $hidden = [
        'password'
    ];
}
