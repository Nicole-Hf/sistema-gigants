<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    use HasFactory;

    protected $table = 'facturas';
    protected $fillable = [
        'nit',
        'nro_factura',
        'nro_autorizacion',
        'fecha_emision',
        'descripcion',
        'total',
        'codigo_control',
        'fecha_limite',
        'cliente_id',
        'vendedor_id'
    ];

    public function cliente()
    {
        return $this->belongsTo(Persona::class,'cliente_id');
    }

    public function vendedor()
    {
        return $this->belongsTo(Persona::class,'vendedor_id');
    }

    public function factura_detalles()
    {
        return $this->hasMany(DetalleFactura::class,'factura_id');
    }
}
