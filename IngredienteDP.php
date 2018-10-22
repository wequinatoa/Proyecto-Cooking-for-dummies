<?php
require("IngredienteMD.php");
	class IngredienteDP
    {
        var $codigo;
        var $nombre;
        var $valor;
		$IngredienteMD=new IngredienteMD();
		
        function getCodigo() {
            return $this->codigo;
        }
		
        function getNombre() {
            return $this->nombre;
        }
		
        function getValor() {
            return $this->valor;
        }
		
        function setCodigo($codigo) {
            $this->codigo = $codigo;
        }

        function setNombre($nombre) {
            $this->nombre = $nombre;
        }

        function setValor($valor) {
            $this->valor = $valor;
        }
		
		function insertar() 
		{
			return $IngredienteMD->insertar($this);
		}
		function consultar() 
		{
			return $IngredienteMD->consultar($this);
		}
		function eliminar() 
		{
			return $IngredienteMD->eliminar($this);
		}
		
    }
?>