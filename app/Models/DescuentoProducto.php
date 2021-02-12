<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DescuentoProducto extends Model
{
    use HasFactory;

    protected $table = 'descuentos_productos';
    protected $fillable = [
        'descuento_id',
        'producto_id',
        'cantidad',
        'precio_descuento'
    ];

    public function producto()
    {
        return $this->belongsTo(Producto::class,'producto_id');
    }

    public function descuento()
    {
        return $this->belongsTo(Descuento::class,'descuento_id');
    }
}
