<?php
require_once(realpath(dirname(__FILE__)) . '/Programa.php');
require_once(realpath(dirname(__FILE__)) . '/R_Aprendizaje.php');

use Programa;
use R_Aprendizaje;


class Notas {
	
	private $Cod_Nota;
	private $APRENDIZ_Nota;
	private $R_APRENDIZAJE_Code_Res;
	private $Nota;	
	public $_unnamed_Programa_;
	public $_unnamed_R_Aprendizaje_;

	
	public function Notas($Cod_Nota, $APRENDIZ_Nota,$R_APRENDIZAJE_Code_Res,$Nota) {
		$this->Cod_Nota=$Cod_Nota;
		$this->APRENDIZ_Nota=$APRENDIZ_Nota;
		$this->R_APRENDIZAJE_Code_Res=$R_APRENDIZAJE_Code_Res;
		$this->Nota=$Nota;
	}

	Public function getCod_Nota()
{
return $this->Cod_Nota;
}
Public function setCod_Nota($value)
{
 $this->Cod_Nota=$value;
}

Public function getAPRENDIZ_Nota()
{
return $this->APRENDIZ_Nota;
}
Public function setAPRENDIZ_Nota($value)
{
 $this->APRENDIZ_Nota=$value;
}
Public function getR_APRENDIZAJE_Code_Res()
{
return $this->R_APRENDIZAJE_Code_Res;
}
Public function setR_APRENDIZAJE_Code_Res($value)
{
 $this->R_APRENDIZAJE_Code_Res=$value;
}
Public function getNota()
{
return $this->Nota;
}
Public function setNota($value)
{
 $this->Nota=$value;
}

	/**
	 * @access public
	 */
	public function AgregarNota() {
		// Not yet implemented
	}
		$this->Conexion=Conectarse();
		$sql="insert into notas(Cod_Nota,APRENDIZ_Nota,R_APRENDIZAJE_Code_Res,Nota)
values ('$this->Cod_Nota','$this->APRENDIZ_Nota','$this->R_APRENDIZAJE_Code_Res','$this->Nota')";

		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;
			
	}
	
	public function consultarNota()
	{
		$this->Conexion=Conectarse();
		$sql=;
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}
	
	public function consultarNota($N_doc)
	{
		$this->Conexion=Conectarse();
		$sql="select * from notas where Cod_Nota='$Cod_Nota'";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}

	}
?>