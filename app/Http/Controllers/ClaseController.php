<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clase;

class ClaseController extends Controller
{
    //

    public  function alumno(Request $request , $id){

        $alumno = Clase::find($id)->alumno;

        return $alumno ;

    }
}
