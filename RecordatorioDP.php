<?php
require("RecordatorioMD.php");
	class RecordatorioDP
    {
        var $codigo;
        var $nombre;
        var $fecha;
		$RecordatorioMD=new RecordatorioMD();
		
        function getCodigo() {
            return $this->codigo;
        }
		
        function getNombre() {
            return $this->nombre;
        }
		
        function getFecha() {
            return $this->valor;
        }
		
        function setCodigo($codigo) {
            $this->codigo = $codigo;
        }

        function setNombre($nombre) {
            $this->nombre = $nombre;
        }

        function setFecha($valor) {
            $this->valor = $valor;
        }
		
		function insertar() 
		{
			return $RecordatorioMD->insertar($this);
		}
		function consultar() 
		{
			return $RecordatorioMD->consultar($this);
		}
		function eliminar() 
		{
			return $RecordatorioMD->eliminar($this);
		}
		
    }
?>