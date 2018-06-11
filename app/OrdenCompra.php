<?php

namespace aspelsoluciones;

use Illuminate\Database\Eloquent\Model;

class OrdenCompra extends Model
{
    protected $table = 'orden_compras';

    protected $fillable   = ['cliente_id', 'subtotal', 'iva', 'total', 'estado'];
    protected $primaryKey = 'id';

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    public function venta()
    {
        return $this->hasOne(Venta::class);
    }
}
