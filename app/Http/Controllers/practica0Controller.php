<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class practica0Controller extends Controller
{
    public function verformulariopractica0(){
        return view('practica0.practica0');
    }

    public function resultado_practica0(Request $request){
    //asigno ala variable numero1 atravez de riquest lo del inpunt
    $num1 = $request->num1;
    $num2 = $request->num2;
    $resultado = $num1 + $num2;


    return view('practica0.resultado_pr0', compact('resultado'));
    }

}
