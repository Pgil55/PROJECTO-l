<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;

use App\Models\Alumno;
use Illuminate\Support\Facades\Hash;

class AlumnoController extends Controller
{
    //

    public function alumno(Request $request){

        $alumno = Alumno::all();

        return response()->json($alumno);

    }
}
