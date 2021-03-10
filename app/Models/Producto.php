<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $table = 'productos';
    protected $fillable = [
        'descripcion',
        'codigo_barra',
        'precio',
        'existencia',
        'fecha_creacion',
        'linea_id',
        'marca_id',
        'familia_id',
        'talla_id',
        'color_id',
        'modelo_id',
        'promocion_id',
        'temporada_id',
        'sector_id'
    ];

    public function linea()
    {
        return $this->belongsTo(Linea::class,'linea_id');
    }

    public function marca()
    {
        return $this->belongsTo(Marca::class,'marca_id');
    }

    public function familia()
    {
        return $this->belongsTo(Familia::class,'familia_id');
    }

    public function talla()
    {
        return $this->belongsTo(Talla::class,'talla_id');
    }

    public function color()
    {
        return $this->belongsTo(Color::class,'color_id');
    }

    public function modelo()
    {
        return $this->belongsTo(Modelo::class,'modelo_id');
    }

    public function promocion()
    {
        return $this->belongsTo(Promocion::class,'promocion_id');
    }

    public function temporada()
    {
        return $this->belongsTo(Temporada::class,'temporada_id');
    }

    public function sector()
    {
        return $this->belongsTo(Sector::class,'sector_id');
    }

    public function descuentos()
    {
        return $this->hasMany(DescuentoProducto::class,'producto_id');
    }

    public function inventarios()
    {
        return $this->hasMany(Inventario::class,'producto_id');
    }

    public function compra_detalles()
    {
        return $this->hasMany(DetalleCompra::class,'producto_id');
    }

    public function factura_detalles()
    {
        return $this->hasMany(DetalleFactura::class,'producto_id');
    }
}
