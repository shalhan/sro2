<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restitution extends Model
{
    protected $fillable = [
        'user_id', 'title', 'stat_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function stat()
    {
        return $this->belongsTo('App\Stat');
    }

    public function report()
    {
        return $this->hasMany('App\Report');
    }
}
