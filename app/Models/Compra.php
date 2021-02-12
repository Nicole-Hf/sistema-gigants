<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    use HasFactory;

    protected $table = 'compras';
    protected $fillable = [
        'estado',
        'fecha',
        'total',
        'saldo',
        'tipo_compra_id',
        'administrador_id',
        'proveedor_id'
    ];

    public function administrador()
    {
        return $this->belongsTo(Persona::class,'administrador_id');
    }

    public function proveedor()
    {
        return $this->belongsTo(Persona::class,'proveedor_id');
    }

    public function cuotas()
    {
        return $this->hasMany(Cuota::class,'compra_id');
    }

    public function tipo_compra()
    {
        return $this->belongsTo(TipoCompra::class,'tipo_compra_id');
    }

    public function compra_detalles()
    {
        return $this->hasMany(DetalleCompra::class,'compra_id');
    }
}
