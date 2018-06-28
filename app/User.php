<?php

namespace App;

use TCG\Voyager\Traits\Translatable;
use Illuminate\Notifications\Notifiable;

class User extends \TCG\Voyager\Models\User
{
    use Notifiable;
    //use Translatable;

   // protected $translatable = ['name']; // hangi alanın translate olmasını istiyorsak onu yazıyoruz

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
