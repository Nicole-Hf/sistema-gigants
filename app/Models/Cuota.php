<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuota extends Model
{
    use HasFactory;

    protected $table = 'cuotas';
    protected $fillable = [
        'fecha',
        'monto',
        'compra_id'
    ];

    public function compra()
    {
        return $this->belongsTo(Compra::class,'compra_id');
    }
}
