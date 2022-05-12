<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class practica7Controller extends Controller
{
    public function  practica7(){
        return view('practica7.practica7');
    }
    public function resultado_pr7(Request $request){

        $sueldo =$request->sueldo;
        $clase =$request->clase;
        $saldo =0;

        if($clase == 1){
            $saldo = $sueldo * 0.2;
        }elseif($clase ==2){
            $saldo = $sueldo * 0.15;
        }elseif($clase ==3){
            $saldo = $sueldo * 0.2;

        }elseif($clase ==4){
            $saldo = $sueldo * 0.17;
        }else{
            //$vacio = "estas sin recursos";
        }
        return view('practica7.resultado_pr7', compact('saldo'));



    }
}
