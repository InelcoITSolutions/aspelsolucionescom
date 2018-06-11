<?php

namespace aspelsoluciones;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $table = 'pedidos';

    protected $fillable   = ['user_id', 'subtotal', 'iva', 'total', 'estado'];
    protected $primaryKey = 'id';

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function venta()
    {
        return $this->hasOne(Venta::class);
    }
}
