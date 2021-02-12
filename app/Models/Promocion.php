<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promocion extends Model
{
    use HasFactory;

    protected $table = 'promociones';
    protected $fillable = [
        'precio',
        'ini_date',
        'fin_date'
    ];

    public function productos()
    {
        return $this->hasMany(Producto::class,'promocion_id');
    }
}
