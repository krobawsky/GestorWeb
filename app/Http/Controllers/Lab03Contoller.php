<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Lab03Contoller extends Controller
{
    function ejercicio1(){
    	return view('lab03.ejercicio1');
    }

    function procesar1(Request $request){
    	$edad = $request->input('edad');
    	$radio = $request->input('estudiante');

    	if($edad < 12 || $radio == 's'){
    		$precio = 3;
    	} else {
    		$precio = 10;
    	}

    	$condicion = ($radio == 's') ? 'Sí' : 'No';
    	$datos = [
    		'val_edad' => $edad,
    		'val_condicion' => $condicion,
    		'val_precio' => $precio
    	];

	   	return view('lab03.respuesta1', $datos);
	  }

	  function ejercicio2(){
	    return view('lab03.ejercicio2');
	  }

	  function procesar2(Request $request){
    	$monto = $request->input('monto');

    	$ic = $request->input('ic');
    	$cc = $request->input('cc');
    	$gu = $request->input('gu');
    	$pe = $request->input('pe');
    	$sp = $request->input('sp');

    	$total1 = 0.0;
    	$total2 = 0.0;
    	$total3 = 0.0;
    	$total4 = 0.0;
    	$total5 = 0.0;

    	$totalic = 90;
    	$totalcc = 80;
    	$totalgu = 86;
    	$totalpe = 65;
    	$totalsp = 45;

    	if($ic > 0){
    		$total1 = $ic * 3; 
    		$totalic = 90 - $ic;
    	} 
    	if($cc > 0){
    		$total2 = $cc * 3; 
    		$totalcc = $totalcc - $cc;
    	} 
    	if($gu > 0){
    		$total3 = $gu * 1.5; 
    		$totalgu = $totalgu - $gu;
    	} 
    	if($pe > 0){
    		$total4 = $pe * 1.8; 
    		$totalpe = $totalpe - $pe;
    	} 
    	if($sp > 0){
    		$total5 = $sp * 2; 
    		$totalsp = $totalsp - $sp;
    	} 

    	$vuelto = $monto - $total1 - $total2 - $total3 - $total4 - $total5;
    	$datos = [
    		'val_ic' => $ic,
    		'val_total1' => $total1,
    		'val_totalic' => $totalic,
    		'val_cc' => $cc,
    		'val_total2' => $total2,
    		'val_totalcc' => $totalcc,
    		'val_gu' => $gu,
    		'val_total3' => $total3,
    		'val_totalgu' => $totalgu,
    		'val_pe' => $pe,
    		'val_total4' => $total4,
    		'val_totalpe' => $totalpe,
    		'val_sp' => $sp,
    		'val_total5' => $total5,
    		'val_totalsp' => $totalsp,
    		'monto' => $monto,
    		'vuelto' => $vuelto
    	];

	    return view('lab03.respuesta2', $datos);
	  }

	  function ejercicio3(){
    	return view('lab03.ejercicio3');
    }

    function procesar3(Request $request){
    	$dias = $request->input('dias');
    	$radio = $request->input('habitacion');

    	if ($dias > 6) {
    		if ($radio == 's') {
    			$precio = $dias * 50;
	    	} else if ($radio == 'd') {
	    		$precio = $dias * 60;
	    	} else if ($radio == 'm') {
	    		$precio = $dias * 100;
	    	}
    	} else {
    		if ($radio == 's') {
    			$precio = $dias * 70;
	    	} else if ($radio == 'd') {
	    		$precio = $dias * 80;
	    	} else if ($radio == 'm') {
	    		$precio = $dias * 120;
	    	}
    	}

    	$habitacion = ($radio == 's') ? 'Simple' : ($radio == 'd') ? 'Doble' : 'Matrimonial';

    	$datos = [
    		'val_dias' => $dias,
    		'val_habitacion' => $habitacion,
    		'val_precio' => $precio
    	];

	   	return view('lab03.respuesta3', $datos);
	  }
}