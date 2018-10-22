<?php

class UsuarioMD
{

    function insertar($Usuario) 
	{
		$conec=conectar();
		
		$id=$Usuario->getId();
		$nombre==$Usuario->getNombre();
		
		$query= "INSERT INTO `Usuario`(`ID`, `NOMBRE`) VALUES('".$id."','".$nombre."')";
	
		$result=mysqli_query($conec,$query);

		if($result)
			echo "Usuario insertado exitosamente";
		else
			die(mysqli_error($conec));
		
	}
    
	function consultar($Usuario) 
	{
		$conec=conectar();
		
		$id=$Usuario->getId();
		
		$query= "SELECT `ID`, `NOMBRE` FROM `Usuario` WHERE `ID`='".$id."'";
	
		$result=mysqli_query($conec,$query);

		if($result)
			echo "Consulta exitosa";
		else
			die(mysqli_error($conec));
		
	}
}
?>