<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Lab04Controller extends Controller
{
    function web(){
    	return view('lab04.index');
    }

    function ejer1(){
    	return view('lab04.ejercicio01');
    }

    function res1(Request $request){
    	$valor1 = $request->input('valor_a');
    	$valor2 = $request->input('valor_b');
    	$ope = $request->input('operador');

    	if ($ope == "suma") {
            $resultado = $valor1 + $valor2;
          } else if ($ope == "resta") {
            $resultado = $valor1 - $valor2;
          } else if ($ope == "multiplicacion") {
          	$resultado = $valor1 * $valor2;
          } else if ($ope == "division") {
          	$resultado = $valor1 / $valor2;
          }

        $datos = [
    		'val_1' => $valor1,
    		'val_2' => $valor2,
    		'val_ope' => $ope,
    		'val_res' => $resultado
    	];

    	return view('lab04.respuesta01', $datos);
    }

    function ejer2(){
    	return view('lab04.ejercicio02');
    }

    function res2(Request $request){
        $nombrea = $request->input('nombrea');
        $nombreb = $request->input('nombreb');
        $fechaa = $request->input('fechaa');
        $fechab = $request->input('fechab');

        $datea = strtotime($fechaa);
        $dateb = strtotime($fechab);

        if($datea < $dateb)
        {
          $x = $dateb - $datea;
          $days =floor($x/(60*60*24));
          $res = "$nombrea es mayor que $nombreb por $days días.";
        }else
        {
          $x = $datea - $dateb;
          $days =floor($x/(60*60*24));
          $res = "$nombreb es mayor que $nombrea por $days días.";
        }
        $datos = [
            'respuesta' => $res
        ];

        return view('lab04.respuesta02', $datos);
    }
}