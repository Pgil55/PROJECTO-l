<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class alumno extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nombre',
        'telefono',
        'edad',
        'email',
        'sexo'
    ];

    protected $hidden = [
        'password',
        'created_at',
        'updated_at'
    ];

    
}
