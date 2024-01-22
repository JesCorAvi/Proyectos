<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyeccion extends Model
{
    use HasFactory;
    protected $table = "proyecciones";

    public function pelicula(){
        return $this->belongsTo(Entrada::class);
    }

    public function sala(){
        return $this->belongsTo(Sala::class);
    }

    public function entradas(){
        return $this->hasMany(Entrada::class);
    }
}
