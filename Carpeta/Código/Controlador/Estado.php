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
	
	public function AgregarEstado() {
	}
	$this->Conexion=Conectarse();
		$sql="insert into estado(idEstado,Nombre)
values ('$this->idEstado','$this->Nombre')"

$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;


	public function ModificarEstado() {
	}
	$this->Conexion=Conectarse();
		$sql="update from aprendiz where N_doc='$N_doc'";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	

	
	public function EliminarEstado() {
	}
	$this->Conexion=Conectarse();
		$sql="Delete from aprendiz where N_doc='$N_doc'";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
}
?>