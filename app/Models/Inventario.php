<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
    use HasFactory;

    protected $table = 'inventarios';
    protected $fillable = [
        'almacen_id',
        'producto_id',
        'existencia',
        'minimo_stock',
        'maximo_stock'
    ];

    public function producto()
    {
        return $this->belongsTo(Producto::class,'producto_id');
    }

    public function almacen()
    {
        return $this->belongsTo(Almacen::class,'almacen_id');
    }

    /*public function factura_detalles()
    {
        return $this->hasMany(DetalleFactura::class,'inventario_id');
    }*/

    /*public function compra_detalles()
    {
        return $this->hasMany(DetalleCompra::class,'inventario_id');
    }*/
}
