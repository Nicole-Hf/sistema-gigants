<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleCompra extends Model
{
    use HasFactory;

    protected $table = 'detalles_compras';
    protected $fillable = [
        'compra_id',
        'inventario_id',
        'cantidad',
        'costo_compra',
        'importe'
    ];

    public function compra()
    {
        return $this->belongsTo(Compra::class,'compra_id');
    }

    public function inventario()
    {
        return $this->belongsTo(Inventario::class,'inventario_id');
    }
}
