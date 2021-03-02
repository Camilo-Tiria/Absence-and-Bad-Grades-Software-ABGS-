<?php
require_once(realpath(dirname(__FILE__)) . '/Instructor.php');
require_once(realpath(dirname(__FILE__)) . '/Programa.php');
require_once(realpath(dirname(__FILE__)) . '/Estado.php');

use Instructor;
use Programa;
use Estado;


class Aprendiz {
	
	private $N_doc;
	private $Estado_idEstado;
	private $PROGRAMA_Ficha_carac;
	private $INSTRUCTOR_Num_doc;
	private $Tip_doc;
	private $Nombres;
	private $Apellidos;
	private $Tel_apre;
	private $Correo_SENA;
	private $Correo_Pl;
	
	public function Aprendiz()
	 {
		
}
Public function getN_doc()
{
return $this->N_doc;
}
Public function setN_doc($value)
{
 $this->N_doc=$value;
}
Public function getEstado_idEstado()
{
return $this->Estado_idEstado;
}
Public function setEstado_idEstado($value)
{
 $this->Estado_idEstado=$value;
}
Public function getPROGRAMA_Ficha_carac()
{
return $this->PROGRAMA_Ficha_carac;
}
Public function setPROGRAMA_Ficha_carac($value)
{
 $this->PROGRAMA_Ficha_carac=$value;
}
Public function getINSTRUCTOR_Num_doc()
{
return $this->INSTRUCTOR_Num_doc;
}
Public function setINSTRUCTOR_Num_doc($value)
{
 $this->INSTRUCTOR_Num_doc=$value;
}
Public function getTip_doc()
{
return $this->Tip_doc;
}
Public function setTip_doc($value)
{
 $this->Tip_doc=$value;
}
Public function getNombres()
{
return $this->Nombres;
}
Public function setNombres($value)
{
 $this->Nombres=$value;
}
Public function getApellidos()
{
return $this->Apellidos;
}
Public function setApellidos($value)
{
 $this->Apellidos=$value;
}

Public function getTel_apre()
{
return $this->Tel_apre;
}
Public function setTel_apre($value)
{
 $this->Tel_apre=$value;
}
Public function getCorreo_SENA()
{
return $this->Correo_SENA;
}
Public function setCorreo_SENA($value)
{
 $this->Correo_SENA=$value;
}
Public function getCorreo_Pl()
{
return $this->Correo_Pl;
}
Public function setCorreo_Pl($value)
{
 $this->correo_Pl=$value;
}

	public $_unnamed_Instructor_;
	public $_unnamed_Programa_;
	public $_unnamed_Instructor_2;
	public $_unnamed_Estado_;

public function crearAprendiz($N_doc,$Estado_idEstado,$PROGRAMA_Ficha_carac,$INSTRUCTOR_Num_doc,$Tip_doc,$Nombres,$Apellidos,$Tel_apre,$Correo_SENA,$Correo_Pl)
	{
		$this->N_doc=$N_doc;
		$this->Estado_idEstado=$Estado_idEstado;
		$this->PROGRAMA_Ficha_carac=$PROGRAMA_Ficha_carac;
		$this->INSTRUCTOR_Num_doc=$INSTRUCTOR_Num_doc;
		$this->Tip_doc=$Tip_doc;
		$this->Nombres=$Nombres;
		$this->Apellidos=$Apellidos;
		$this->Tel_apre=$Tel_apre;
		$this->Correo_SENA=$Correo_SENA;
		$this->Correo_Pl=$Correo_Pl;
	}
	
	public function agregarAprendiz()
	{	
		$this->Conexion=Conectarse();
		$sql="insert into aprendiz(N_doc,Estado_idEstado,PROGRAMA_Ficha_carac,INSTRUCTOR_Num_doc,Tip_doc,Nombres,Apellidos, Tel_apre, Correo_SENA, Correo_Pl)
values ('$this->N_doc','$this->Estado_idEstado','$this->PROGRAMA_Ficha_carac','$this->INSTRUCTOR_Num_doc','$this->Tip_doc','$this->Nombres','$this->Apellidos','$this->Tel_apre','$this->Correo_SENA','$this->Correo_Pl')";

		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;
			
	}
	
	public function consultarAprendiz()
	{
		$this->Conexion=Conectarse();
		$sql="select a.N_doc, a.Nombres, a.Apellidos, a.Tel_apre, a.Correo_SENA p.Ficha_carac, p.Nom_Program , e.Nombre, i.NombresI
		    from aprendiz a, programa p, estado e, instructor i
			where (a.INSTRUCTOR_Num_doc= i.Num_doc)";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}
	
	public function consultarAprendiz($N_doc)
	{
		$this->Conexion=Conectarse();
		$sql="select * from aprendiz where N_doc='$N_doc'";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}

	}
?>