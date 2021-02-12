<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    use HasFactory;

    protected $table = 'colores';
    protected $fillable = ['color'];

    public function productos()
    {
        return $this->hasMany(Producto::class,'color_id');
    }
}
