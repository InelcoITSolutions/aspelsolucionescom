<?php

namespace aspelsoluciones;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    public function preciosServ()
    {
        return $this->hasMany(ListaPreciosServicio::class);
    }
}
