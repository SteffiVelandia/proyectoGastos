<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\gastos;

class detalles extends Model
{
    public function detallesGasto(){
        return $this->belongsTo(gastos::class);
    }
}
