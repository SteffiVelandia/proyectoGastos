<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\detalles;

class gastos extends Model
{
    public function gastosDetalles(){
        return $this->hasMany(detalles::class);
    }
}
