<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Linea extends Model
{
    use HasFactory;

    protected $table = 'lineas';
    protected $fillable = ['lineas'];

    public function productos()
    {
        return $this->hasMany(Producto::class,'linea_id');
    }
}
