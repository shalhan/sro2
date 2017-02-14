<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'username', 'password', 'nip', 'position'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

     public function restitutions()
    {
        return $this->hasMany('App\Restitution');
    }

    public function report()
    {
        return $this->hasManyThrough('App\Report', 'App\Restitution', 'user_id', 'restitusi_id', 'id');
    }
}
