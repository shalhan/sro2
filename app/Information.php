<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    protected $table = 'informations';
    protected $fillable = [
        'jenis', 'status'
    ];

    public function restitutions()
    {
        return $this->hasMany('App\Restitution');
    }
}
