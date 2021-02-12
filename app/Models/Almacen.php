<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Almacen extends Model
{
    use HasFactory;
    protected $table = 'almacenes';

    protected $fillable = [
        'nombre',
        'ubicacion'
    ];

    public function sectores()
    {
        return $this->hasMany(Sector::class,'almacen_id');
    }

    public function inventarios()
    {
        return $this->hasMany(Inventario::class,'almacen_id');
    }
}
