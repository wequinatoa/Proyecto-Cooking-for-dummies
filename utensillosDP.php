<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class utencillosDP extends Controller
{

	function tipoComida($tipo){
		
		if($tipo!=="asiatico")
			$tipoUtensillo='Palillos';
		else
			$tipoUtensillo='Cubiertos';
		return view('utencillo',['comidaBlade'=>$tipo,'tipoUtencilloBlade'=>$tipoUtensillo]);
	}

    
}
