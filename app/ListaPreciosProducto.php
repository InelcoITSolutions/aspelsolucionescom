<?php

namespace aspelsoluciones;

use Illuminate\Database\Eloquent\Model;

class ListaPreciosProducto extends Model
{
    public function producto()
    {
        return $this->belongsTo(Producto::class);
    }

}
