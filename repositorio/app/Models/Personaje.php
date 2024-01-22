<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personaje extends Model
{
    use HasFactory;
    protected $fillable = ["nombre", "descripción", "jugador_id", "inventario_id","monedero"];

    public function inventario()
    {
        return $this->hasOne(Inventario::class);
    }

    public function jugador()
    {
        return $this->belongsTo(Jugador::class);
    }
}
