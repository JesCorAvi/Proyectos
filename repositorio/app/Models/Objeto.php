<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Objeto extends Model
{
    use HasFactory;

    public function Inventario()
    {
        return $this->belongsToMany(Inventario::class);
    }
}
