<?php
require_once(realpath(dirname(__FILE__)) . '/Aprendiz.php');

use Aprendiz;

class Estado {
	
	private $idEstado;
	private $Nombre;
	public $unnamed_Aprendiz_;


	public function Estado($idEstado, $Nombre) {
		$this->idEstado=$idEstado;
		$this->Nombre=$Nombre
	}

	Public function getidEstado()
{
return $this->idEstado;
}
Public function setidEstado($value)
{
 $this->idEstado=$value;
}
Public function getNombre()
{
return $this->Nombre;
}
Public function setNombre($value)
{
 $this->Nombre=$value;
}
	
	public function Agregar() {
	}

	
	public function Consultar() {
	}

	public function Modificar() {
	}

	
	public function Eliminar() {
	}
}
?>