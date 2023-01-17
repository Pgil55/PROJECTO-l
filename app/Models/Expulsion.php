<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class expulsion extends Model
{
    public $table = 'expulsion';
    use HasFactory;

    protected $fillable = [
        'expulsion'
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
