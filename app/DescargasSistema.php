<?php

namespace aspelsoluciones;

use Illuminate\Database\Eloquent\Model;

class DescargasSistema extends Model
{
    protected $table      = 'descargas_sistemas';
    protected $fillable   = ['correo'];
    protected $primaryKey = 'id';
}
