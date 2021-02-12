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
        'inventario_id',
        'cantidad',
        'precio_venta',
        'importe'
    ];

    public function factura()
    {
        return $this->belongsTo(Factura::class,'factura_id');
    }

    public function inventario()
    {
        return $this->belongsTo(Inventario::class,'inventario_id');
    }
}
