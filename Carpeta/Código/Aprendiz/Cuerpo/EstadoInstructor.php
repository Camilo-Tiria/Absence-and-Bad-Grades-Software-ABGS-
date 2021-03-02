<?php

class EstadoInsructor {
	
	private $idEstadoInstructor;
	
	private $EstadoInstruc;

	public function EstadoInsructor($idEstadoInstructor, $EstadoInstruc) {
		$this->idEstadoInstructor=$idEstadoInstructor;
		$this->EstadoInstruc=$EstadoInstruc;
	}

Public function getidEstadoInstructor()
{
return $this->idEstadoInstructor;
}
Public function setidEstadoInstructor($value)
{
 $this->idEstadoInstructor=$value;
}
Public function getEstadoInstruc()
{
return $this->EstadoInstruc;
}
Public function setEstadoInstruc($value)
{
 $this->EstadoInstruc=$value;
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