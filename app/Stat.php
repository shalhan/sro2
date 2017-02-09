<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stat extends Model
{
    protected $fillable = [
        'detail'
    ];

    public function restitutions()
    {
        return $this->hasMany('App\Restitution');
    }
}
