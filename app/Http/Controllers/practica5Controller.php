<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class practica5Controller extends Controller
{
    public function  practica5(){
        return view('practica5.practica5');
    }
    public function resultado_pr5(Request $request){
       $x = $request->numero;

       $potencia= pow($x,2);
       $resultado= 3*$potencia + 7*$x -15;
        return view('practica5.resultado_pr5',compact('resultado'));



    }
}
