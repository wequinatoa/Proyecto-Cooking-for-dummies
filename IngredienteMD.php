<?php

class IngredienteMD
{

    function insertar($Ingrediente) 
	{
		$conec=conectar();
		
		$codigo=$Ingrediente->getCodigo();
        $nombre==$Ingrediente->getNombre();
        $valor=$Ingrediente->getValor();
		
		$query= "INSERT INTO `Ingrediente`(`CODIGO`, `NOMBRE`, `VALOR`) VALUES('".$codigo."','".$nombre."','".$valor."')";
	
		$result=mysqli_query($conec,$query);

		if($result)
			echo "Ingrediente insertado exitosamente";
		else
			die(mysqli_error($conec));
		
	}
    
	function consultar($Ingrediente) 
	{
		$conec=conectar();
		
		$codigo=$Ingrediente->getCodigo();
		
		$query= "SELECT `CODIGO`, `NOMBRE`, `VALOR` FROM `Ingrediente` WHERE `CODIGO`='".$codigo."'";
	
		$result=mysqli_query($conec,$query);

		if($result)
			echo "Consulta exitosa";
		else
			die(mysqli_error($conec));
		
	}
}
?>