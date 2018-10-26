<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class presentacionMD extends Model
{
   var $tipoComida;
   var $cantidadPlatos;
   var $tipoUtensillos;
   var $estiloPresentacion;
   public function setPresentacion($tipoC,$cantPlatos,$tipoUtensillo,$estiloPresentacion){
   		$this->tipoComida=$tipoC;
   		$this->cantidadPlatos=$cantPlatos;
   		$this->tipoUtensillos=$tipoUtensillo;
   		$this->estiloPresentacion=$estiloPresentacion;

   }
   public function  getTipoComida(){
   		return $this->tipoComida;

   }
   public function getCantidadPlatos(){
   		return $this->cantidadPlatos;
   }
   public function getTipoUtensillos(){
   		return $this->tipoUtensillos;
   		$this->estiloPresentacion=$estiloPresentacion;

   }public function getEstiloPresentacion(){
   		return $this->estiloPresentacion;

   }
}