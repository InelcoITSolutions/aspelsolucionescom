<?php

namespace aspelsoluciones;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{

    protected $table    = 'productos';
    protected $fillable = ['clave', 'nombre', 'etiqueta', 'descripcion_corta', 'descripcion', 'descripcion_larga', 'incluye1', 'incluye2', 'precio', 'imagen', 'visible', 'categoria_id'];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    public function articulo_vendido()
    {
        return $this->hasOne(Articulo_Vendido::class);
    }

    public function preciosProd()
    {
        return $this->hasMany(ListaPreciosProducto::class);
    }
}
