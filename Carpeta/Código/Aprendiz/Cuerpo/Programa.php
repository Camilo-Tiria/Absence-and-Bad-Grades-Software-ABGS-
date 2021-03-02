<?php
require_once(realpath(dirname(__FILE__)) . '/Aprendiz.php');
require_once(realpath(dirname(__FILE__)) . '/Instructor.php');
require_once(realpath(dirname(__FILE__)) . '/Inasistencia.php');
require_once(realpath(dirname(__FILE__)) . '/R_Aprendizaje.php');
require_once(realpath(dirname(__FILE__)) . '/Notas.php');

use Aprendiz;
use Instructor;
use Inasistencia;
use R_Aprendizaje;
use Notas;

class Programa {
	
	private $Ficha_carac;
	private $Nom_Program;
	private $Area;
	private $Fecha_Ingr;
	private $Tipo_Formacion;
	private $Modalidad;
	
	public function Programa()
	 {

}
Public function getFicha_carac()
{
return $this->Ficha_carac;
}
Public function setFicha_carac($value)
{
 $this->Ficha_carac=$value;
}		
}
Public function getNom_Program()
{
return $this->nom_Program;
}
Public function setNom_Program($value)
{
 $this->Nom_Program=$value;
}
Public function getArea()
{
return $this->Area;
}
Public function setArea($value)
{
 $this->Area=$value;
}
Public function getFecha_Ingr()
{
return $this->Fecha_Ingr;
}
Public function setFecha_Ingr($value)
{
 $this->Fecha_Ingr=$value;
}

Public function getTipo_Formacion()
{
return $this->Tipo_Formacion;
}
Public function setTipo_Formacion($value)
{
 $this->Tipo_Formacion=$value;
}
Public function getModalidad()
{
return $this->Modalidad;
}
Public function setModalidad($value)
{
 $this->Modalidad=$value;
}

    public $_unnamed_Aprendiz_;
	public $_unnamed_Instructor_;
	public $_unnamed_Inasistencia_;
	public $_unnamed_R_Aprendizaje_;
	public $_unnamed_Notas_;
	

	public function CrearPrograma($Ficha_carac,$Nom_Program, $Area, $Fecha_Ingr, $Tipo_Formacion, $Modalidad) {
		
		$this->Ficha_carac=$Ficha_carac;
		$this->Nom_Program=$Nom_Program;
		$this->Area=$Area;
		$this->Fecha_Ingr=$Fecha_Ingr;
		$this->Tipo_Formación=$Tipo_Formación;
		$this->Modalidad=$Modalidad;	

	public function agregarPrograma()
	{	
		$this->Conexion=Conectarse();
		$sql="insert into programa(Ficha_carac,Nom_Program,Area,Fecha_Ingr,Tipo_Formacion,Modalidad) values ('$this->Ficha_carac','$this->Nom_Program','$this->Area','$this->Fecha_Ingr','$this->Tipo_Formacion','$this->Modalidad')";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;
			
	}
	
	public function consultarPrograma()
	{
		$this->Conexion=Conectarse();
		$sql="select p.Ficha_carac, p.Nom_Program, p.Area, p.Fecha_Ingr 
		    from  programa p";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}
	
	public function consultarAprendiz($N_doc)
	{
		$this->Conexion=Conectarse();
		$sql="select * from programa where Ficha_carac='$Ficha_carac'";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}

	}
?>