<?php

namespace aspelsoluciones;

use Illuminate\Database\Eloquent\Model;

class ListaPreciosServicio extends Model
{
    public function servicio()
    {
        return $this->belongsTo(Servicio::class);
    }
}
