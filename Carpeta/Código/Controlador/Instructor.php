<?php
require_once(realpath(dirname(__FILE__)) . '/Programa.php');
require_once(realpath(dirname(__FILE__)) . '/Aprendiz.php');
require_once(realpath(dirname(__FILE__)) . '/TipoInstructor.php');

use Programa;
use Aprendiz;
use TipoInstructor;


class Instructor {
	
	private $Num_doc;
	private $TipoInstructor_idTipoInstructor;
	private $EstadoInstructor_idEstadoInstructor;
	private $Tip_doc;
	private $NombresI;
	private $ApellidosI;
	private $Telefono;
	private $Direccion;
	private $Correo_corp;
	private $Correo_Pl;

public function Instructor()
	 {
	
}
Public function getNum_doc()
{
return $this->Num_doc;
}
Public function setNum_doc($value)
{
 $this->Num_doc=$value;
}
Public function getTipoInstructor_idTipoInstructor()
{
return $this->TipoInstructor_idTipoInstructor;
}
Public function setTipoInstructor_idTipoInstructor($value)
{
 $this->TipoInstructor_idTipoInstructor=$value;
}
Public function getEstadoInstructor_idEstadoInstructor()
{
return $this->EstadoInstructor_idEstadoInstructor;
}
Public function setEstadoInstructor_idEstadoInstructor($value)
{
 $this->EstadoInstructor_idEstadoInstructor=$value;
}
Public function getTip_doc()
{
return $this->Tip_doc;
}
Public function setaTip_doc($value)
{
 $this->Tip_doc=$value;
}
Public function getNombresI()
{
return $this->NombresI;
}
Public function setNombresI($value)
{
 $this->NombresI=$value;
}
Public function getApellidosI()
{
return $this->ApellidosI;
}
Public function setApellidosI($value)
{
 $this->ApellidosI=$value;
}	

Public function getTelefono()
{
return $this->Telefono;
}
Public function setTelefono($value)
{
 $this->Telefono=$value;
}
Public function getDireccion()
{
return $this->Direccion;
}
Public function setDireccion($value)
{
 $this->Direccion=$value;
}
Public function getCorreo_corp()
{
return $this->Correo_corp;
}
Public function setCorreo_corp($value)
{
 $this->Correo_corp=$value;
}
Public function getCorreo_Pl()
{
return $this->Correo_Pl;
}
Public function setCorreo_Pl($value)
{
 $this->Correo_Pl=$value;
}

    public $_unnamed_Programa_;
	public $_unnamed_Aprendiz_;
	public $_unnamed_Aprendiz_2;
	public $_unnamed_TipoInstructor_;

public function crearInstructor($Num_doc, $TipoInstructor_idTipoInstructor,$EstadoInstructor_idEstadoInstructor, $Tip_doc, $NombresI, $ApellidosI, $Telefono, $Direccion, $Correo_corp, $Correo_Pl) {
		$this->Num_doc=$Num_doc;
		$this->TipoInstructor_idTipoInstructor=$TipoInstructor_idTipoInstructor;
		$this->EstadoInstructor_idEstadoInstructor=$EstadoInstructor_idEstadoInstructor;
		$this->Tip_doc=$Tip_doc;
		$this->NombresI=$NombresI;
		$this->ApellidosI=$ApellidosI;
		$this->Telefono=$Telefono;
		$this->Direccion=$Direccion;
		$this->Correo_corp=$Correo_corp;
		$this->Correo_Pl=$Correo_Pl;
		}

public function agregarInstructor()
	{	
		$this->Conexion=Conectarse();
		$sql="insert into instructor(Num_doc,TipoInstructor_idTipoInstructor,EstadoInstructor_idEstadoInstructor, Tip_doc, NombresI, ApellidosI, Telefono, Direccion, Correo_corp, Correo_Pl)values ('$this->Num_doc','$this->TipoInstructor_idTipoInstructor','$this->EstadoInstructor_idEstadoInstructor','$this->Tip_doc','$this->NombresI','$this->ApellidosI','$this->Telefono','$this->Direccion','$this->Correo_corp','$this->Correo_Pl')";

		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;
			
	}
	
	public function consultarInstructor()
	{
		$this->Conexion=Conectarse();
		$sql="select i.Num_doc, i.NombresI, i.ApellidosI, i.Telefono, i.Correo_corp p.Ficha_carac, p.Nom_Program , t.Nombre, 
		    from instructor i, programa p, tipoinstructor t
			where (i.TipoInstructor_idTipoInstructor= t.idTipoInstructor)";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}
	
	public function consultarInstructor($Num_doc)
	{
		$this->Conexion=Conectarse();
		$sql="select * from instructor where Num_doc='$Num_doc'";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}

	}
?>

