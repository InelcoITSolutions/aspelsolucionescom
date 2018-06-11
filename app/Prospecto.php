<?php

namespace aspelsoluciones;

use Illuminate\Database\Eloquent\Model;

class Prospecto extends Model
{
    protected $table      = 'prospectos';
    protected $fillable   = ['Nombre', 'Correo', 'Telefono', 'Empresa', 'Comentarios', 'Interesado'];
    protected $primaryKey = 'id_usuario';
}
