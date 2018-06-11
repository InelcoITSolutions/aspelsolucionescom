<?php

namespace aspelsoluciones;

use aspelsoluciones\Notifications\UserAdminResetPasswordNotification;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Administrador extends Authenticatable
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table    = 'administradors';
    protected $fillable = [
        'nombre', 'email', 'telefono', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new UserAdminResetPasswordNotification($token));
    }
}
