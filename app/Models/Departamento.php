<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    use HasFactory;
    protected $fillable = [
        'codigo',
        'nombre',
        'activo',
        'idUsuarioCreacion',
    ];
    protected $hidden=[
        'created_at',
        'updated_at',
    ];
}
