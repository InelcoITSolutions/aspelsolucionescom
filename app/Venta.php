<?php

namespace aspelsoluciones;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    protected $table    = 'ventas';
    protected $fillable = ['subtotal', 'iva', 'total', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function articulo_vendido()
    {
        return $this->hasMany(Articulo_Vendido::class);
    }
}
