<?php

namespace aspelsoluciones;

use Illuminate\Database\Eloquent\Model;

class Articulo_Vendido extends Model
{
    protected $table    = 'articulos__vendidos';
    protected $fillable = ['Precio', 'Cantidad', 'producto_id', 'venta_id'];

    //relacion con ventas
    public function venta()
    {
        return $this->belongsTo(Venta::class);
    }

    //relacion con productos
    public function producto()
    {
        return $this->belongsTo(Producto::class);
    }

}
