<?php

namespace aspelsoluciones;

use Illuminate\Database\Eloquent\Model;

class AspelProspecto extends Model
{
    protected $table      = 'aspel_prospectos';
    protected $fillable   = ['correo'];
    protected $primaryKey = 'id_usuario';
}
