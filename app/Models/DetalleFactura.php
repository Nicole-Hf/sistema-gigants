<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleFactura extends Model
{
    use HasFactory;

    protected $table = 'detalles_facturas';
    protected $fillable = [
        'factura_id',
        'producto_id',
        'cantidad',
        'precio_venta',
        'importe'
    ];

    public function factura()
    {
        return $this->belongsTo(Factura::class,'factura_id');
    }

    public function producto()
    {
        return $this->belongsTo(Producto::class,'producto_id');
    }
}
