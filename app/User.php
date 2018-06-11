<?php

namespace aspelsoluciones;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

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

    //relacion con pedidos
    public function pedidos()
    {
        return $this->hasMany(Pedido::class);
    }

    //relacion con ventas
    public function ventas()
    {
        return $this->hasMany(Venta::class);
    }
}
