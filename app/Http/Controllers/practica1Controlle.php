<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class practica1Controlle extends Controller
{
    public function verformulariopractica1(){
        return view('practica1.practica1');
    }

    public function resultado_practica1(Request $request){
    //asigno ala variable numero1 atravez de riquest lo del inpunt
    
    $numero1 = $request->numero1;

    return view('practica1.resultado_pr1',compact('numero1'));
    }

}
