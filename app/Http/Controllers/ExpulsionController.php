<?php

namespace App\Http\Controllers;

use App\Models\expulsion;
use Illuminate\Http\Request;

class ExpulsionController extends Controller
{
    //
    public  function alumno(Request $request , $id){

        $alumno = expulsion::find($id)->alumno;

        return $alumno ;

    }
}
