<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    use HasFactory;

    // Definir los campos que se pueden llenar (fillable) para evitar asignación masiva insegura.
    protected $fillable = ['titulo', 'completada'];
}
