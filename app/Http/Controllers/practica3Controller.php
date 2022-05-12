<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class practica3Controller extends Controller
{
    public function  practica3(){
        return view('practica3.practica3');
    }
    public function resultado_pr3(Request $request){
        $nota1 = $request->nota1;
        $nota2 = $request->nota2;
        $nota3 = $request->nota3;

        $definitiva = ($nota1 + $nota2 + $nota3) /3;
        $L_porciento= $definitiva*0.5;
        return view('practica3.resultado_pr3',compact('definitiva'));



    }
}
