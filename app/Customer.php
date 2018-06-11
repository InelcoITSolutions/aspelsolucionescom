<?php

namespace aspelsoluciones;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table      = 'customers';
    protected $fillable   = ['id_user', 'razon_social', 'rfc', 'nombre_comercial', 'contribuyente', 'calle', 'no_exterior', 'no_interior', 'colonia', 'ciudad', 'cp', 'pais', 'estado', 'telefono', 'correo_facturacion', 'nombre_apellidos', 'puesto', 'correo'];
    protected $primaryKey = 'id';

    public function usuarios()
    {
        return $this->belongsTo(User::class);
    }
}
