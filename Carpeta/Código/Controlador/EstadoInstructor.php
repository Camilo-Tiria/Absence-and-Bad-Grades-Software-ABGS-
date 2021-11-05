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

public function AgregarEstadoInstructor() {
	}

	$this->Conexion=Conectarse();
		$sql="insert into estadoinstructor(idEstadoInstructor,EstadoInstruc)
values ('$this->idEstadoInstructor','$this->EstadoInstruc')"

$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;


	public function ModificarEstadoInstructor() {
	}
	$this->Conexion=Conectarse();
		$sql="update from estadoinstructor where idEstadoInstructor='$idEstadoInstructor'";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	

	
	public function EliminarEstadoInstructor() {
	}
	$this->Conexion=Conectarse();
		$sql="Delete from estadoinstructor where idEstadoInstructor='$idEstadoInstructor'";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
}
?>