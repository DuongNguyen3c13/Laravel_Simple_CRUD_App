<?php

namespace App;

use Illuminate\Notifications\Notifiable;

class Admin extends User
{
    protected $table = 'admins';
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['email', 'password','name'];

    use Notifiable;
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function setPasswordAttribute($password) {

        $this->attributes['password'] = bcrypt($password);
    }
}