<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class utencillosDP extends Controller
{

	function sugerenciaUtensillotipoComida($tipo){
		
		if($tipo!=="asiatico")
			$tipoUtensillo='Palillos';
		else
			$tipoUtensillo='Cubiertos';
		return view('utencillo',['comidaBlade'=>$tipo,'tipoUtencilloBlade'=>$tipoUtensillo]);
	}
	function create($descripcion,$tipo,$uso){
		$utencillo=new Utensillo();
		$utencillo->crearUtencillo($descripcion,$tipo,$uso);
		$mensaje='El utensillo '.$descripcion.' fue creado exitósamente';
		return view('utencillo',['mensajeBlade'=>$mensaje]);
	}
	
	function update($id,$descripcion,$tipo,$uso){
		$utencillo=new Utensillo();
		$utencillo->actualizarUtencillo($id,$descripcion,$tipo,$uso);
		$mensaje='El utensillo '.$descripcion.' fue modificado exitósamente';
		return view('utencillo',['mensajeBlade'=>$mensaje]);
	}
	function delete($id){
		$utencillo=new Utensillo();
		$utencillo->eliminarUtencillo($id);
		$mensaje='El utensillo fue eliminado exitósamente';
		return view('utencillo',['mensajeBlade'=>$mensaje]);
	}

    
}
