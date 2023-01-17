<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clase extends Model
{
    public $table = 'clase';
    use HasFactory;
    protected $fillable = [
        'lengua',
        'matematicas',
        'ciencias',
        'educacion_fisica',
        'lenguas_extrangeras'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function alumno()
{
    return $this->belongsTo(Alumno::class);
}
}
