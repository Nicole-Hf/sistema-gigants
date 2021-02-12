<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoCompra extends Model
{
    use HasFactory;

    protected $table = 'tipos_compras';
    protected $fillable = ['tipo'];

    public function compras()
    {
        return $this->hasMany(Compra::class,'tipo_compra_id');
    }
}
