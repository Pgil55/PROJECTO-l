<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;

use App\Models\Alumno;
use Illuminate\Support\Facades\Hash;

class AlumnoController extends Controller
{
    //

    public function alumnos(Request $request){

        $alumnos = Alumno::all();

        $response = [
            'success' => true,
            'message' => 'Estos son  tus alumnos',
            'data' => $alumnos
        ];

        return response()->json($response);

    }
    public function alumno(Request $request){

        $alumno = Alumno::where('id', $request->id)->get();

        $response = [
            'success' => true,
            'message' => 'Este es tu alumno',
            'data' => $alumno
        ];

        return response()->json($response);

    }

    public function delete(Request $request){

        $alumno = Alumno::where('id', $request->id)->delete();



        return response()->json($alumno);

    }

    public function create(Request $request) {
        
        Alumno::create($request->validate([
            
        'nombre' =>'required|string|max:32',
        'telefono' => 'nullable|string|max:16',
        'edad'=> 'nullable|integer',
        'password'=> 'required|string|max:64',
        'email'=>'nullable|string|max:64',
        'sexo'=> 'nullable|string'
        ]));
    }
}
