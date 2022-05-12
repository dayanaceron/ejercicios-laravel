<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class practica4Controller extends Controller
{
    public function  practica4(){
        return view('practica4.practica4');
    }
    public function resultado_pr4(Request $request){
       $nombre = $request->nombre;
       $horas = $request->horas;
       $vrl_hora = $request->vrl_hora;
       $bono = $request->bono;
       $ax_transporte = $request->ax_transporte;
       $credito = $request->credito;
       $sueldo= $horas* $vrl_hora + $bono + $ax_transporte+ $credito;
        return view('practica4.resultado_pr4',compact('sueldo'));



    }
}
