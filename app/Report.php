<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $fillable = [
        'restitusi_id', 'message'
    ];

    public function restitution()
    {
        return $this->belongsTo('App\Restitution', 'restitusi_id');
    }
}
