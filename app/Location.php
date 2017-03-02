<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable = [
        'nama_rs', 'alamat', 'status'
    ];

    public function restitutions()
    {
        return $this->hasMany('App\Restitution');
    }
}
