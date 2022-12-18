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
            'message' => 'Este es tu alumno elegido',
            'data' => $alumno
        ];

        return response()->json($response);

    }

    public function delete(Request $request){

        $alumno = Alumno::where('id', $request->id)->delete();
        $response = [
            'success' => true,
            'message' => 'Alumno borrado correctamente ',
        ];

        return response()->json($response);

    }

    public function create(Request $request) {
        
        Alumno::create($request->validate([
            
        'nombre' =>'required|string|max:32',
        'telefono' => 'nullable|string|max:16',
        'edad'=> 'nullable|integer',
        'password'=> 'required|string|max:64',
        'email'=>'nullable|string|max:64|unique:alumnos',
        'sexo'=> 'nullable|string'
        ]));
        $response = [
            'success' => true,
            'message' => 'Alumno creado correctamente',
        ];

        return response()->json($response);
    }


    public function modificar(Request $request , $id){
        $alumno = Alumno::findOrFail($id);

        $alumno ->nombre = $request->nombre;
        $alumno ->telefono = $request->telefono;
        $alumno ->edad = $request->edad;
        $alumno ->password = $request->password;
        $alumno ->email = $request->email;
        $alumno ->sexo = $request->sexo;
        $alumno->save();
        
        $response = [
            'success' => true,
            'message' => 'Alumno modificado correctamente',
            'data' => $alumno
        ];

        return response()->json($response);

    }
}
