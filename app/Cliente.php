<?php

namespace aspelsoluciones;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table      = 'clientes';
    protected $fillable   = ['razon_social', 'rfc', 'nombre_comercial', 'contribuyente', 'calle', 'no_exterior', 'no_interior', 'colonia', 'ciudad', 'cp', 'pais', 'estado', 'telefono', 'correo_facturacion', 'nombre_apellidos', 'puesto', 'correo', 'interesado'];
    protected $primaryKey = 'id';

    public function pedidos()
    {
        return $this->hasMany(Pedido::class);
    }
}
