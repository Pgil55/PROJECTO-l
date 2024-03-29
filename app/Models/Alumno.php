<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class alumno extends Model
{
    use HasFactory;

    protected $fillable = [

        'nombre',
        'telefono',
        'edad',
        'password',
        'email',
        'sexo',
        
    ];

    protected $hidden = [
        'password',
        'created_at',
        'updated_at'
    ];

    public function clase(){
        
        return $this->hasMany(Clase::class);
    }

    public function expulsion(){
        
        return $this->hasOne(expulsion::class);
    }

}
