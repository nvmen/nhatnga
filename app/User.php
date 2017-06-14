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
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $fillable = [
        'full_name', 'email', 'password','phone','address','username',
        'is_active','user_type','image'
    ];

    public function is_admin(){
        return ($this->user_type == 'admin');
    }
}
