<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class practica6Controller extends Controller
{
    public function  practica6(){
        return view('practica6.practica6');
    }
    public function resultado_pr6(Request $request){
       $numero1= $request->numero1;
       $caracter= $request->caracter;
       $numero2= $request->numero2;

       if($caracter== "+"){
           $resultado1= $numero1 + $numero2;
       }

       elseif($caracter== "-"){
        $resultado1= $numero1 - $numero2;
       }

       elseif($caracter== "*"){
        $resultado1= $numero1 * $numero2;
       }

       elseif($caracter== "/"){
        $resultado1= $numero1 / $numero2;
       }
       
        return view('practica6.resultado_pr6',compact('resultado1'));



    }
}
