<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restitution extends Model
{
    protected $fillable = [
        'user_id', 'location_id', 'stat_id', 'info_id'
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

    public function location()
    {
        return $this->belongsTo('App\Location','location_id');
    }

    public function info()
    {
        return $this->belongsTo('App\Information','info_id');
    }
}
