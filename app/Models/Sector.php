<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{
    use HasFactory;

    protected $table = 'sectores';
    protected $fillable = [
        'nombre',
        'almacen_id'
    ];

    public function almacen(){
        return $this->belongsTo(Almacen::class,'almacen_id');
    }

    public function productos()
    {
        return $this->hasMany(Producto::class,'sector_id');
    }
}
