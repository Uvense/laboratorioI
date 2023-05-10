<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tarea extends Model
{
    use HasFactory;
     //reglas de validacion
     static $validacion = [
        'tarea' => 'required|string',
        'fecha_de_creacion' => 'required|string',
        'asignacion' => 'required|string|min:5'
    ];
}
