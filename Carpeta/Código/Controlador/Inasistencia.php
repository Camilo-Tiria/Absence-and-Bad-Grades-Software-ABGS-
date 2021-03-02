<?php
require_once(realpath(dirname(__FILE__)) . '/Programa.php');

use Programa;

class Inasistencia {
	
	private $Cod_Inas;
	private $APRENDIZ;
	private $R_APRENDIZAJE_Code_Res;
	private $Fecha_Inas;
	private $Periodo_Inas;
	private $Observaciones;
	private $Cantidad_Horas;

	public $unnamed_Programa_;
	
	public function Inasistencia($Cod_Inas,$APRENDIZ, $R_APRENDIZAJE_Code_Res, $Fecha_Inas, $Periodo_Inas, $Observaciones, $Cantidad_Horas) {
		$this->Cod_Inas=$Cod_Inas;
		$this->APRENDIZ=$APRENDIZ;
		$this->R_APRENDIZAJE_Code_Res=$R_APRENDIZAJE_Code_Res;
		$this->Fecha_Inas=$Fecha_Inas;
		$this->Periodo_Inas=$Periodo_Inas;
		$this->Observaciones=$Observaciones;
		$this->Cantidad_Horas=$Cantidad_Horas;
	}

Public function getCod_Inas()
{
return $this->Cod_Inas;
}
Public function setCod_Inas($value)
{
 $this->Cod_Inas=$value;
}
Public function getAPRENDIZ()
{
return $this->APRENDIZ;
}
Public function setAPRENDIZ($value)
{
 $this->APRENDIZ=$value;
}
Public function getR_APRENDIZAJE_Code_Res()
{
return $this->R_APRENDIZAJE_Code_Res;
}
Public function setR_APRENDIZAJE_Code_Res($value)
{
 $this->R_APRENDIZAJE_Code_Res=$value;
}
Public function getFecha_Inas()
{
return $this->Fecha_Inas;
}
Public function setFecha_Inas($value)
{
 $this->Fecha_Inas=$value;
}
Public function getPeriodo_Inas()
{
return $this->Periodo_Inas;
}
Public function setPeriodo_Inas($value)
{
 $this->Periodo_Inas=$value;
}
Public function getObservaciones()
{
return $this->Observaciones;
}
Public function setObservaciones($value)
{
 $this->observaciones=$value;
}
Public function getCantidad_Horas)
{
return $this->Cantidad_Horas;
}
Public function setCantidad_Horas($value)
{
 $this->Cantidad_Horas=$value;
}

	
public function agregarInasistencia()
	{	
		$this->Conexion=Conectarse();
		$sql="insert into inasistencia(Cod_Inas,APRENDIZ,R_APRENDIZAJE_Code_Res, Fecha_Inas, Periodo_Inas, Observaciones, Cantidad_Horas)values ('$this->Cod_Inas','$this->APRENDIZ','$this->R_APRENDIZAJE_Code_Res','$this->Fecha_Inas','$this->Periodo_Inas','$this->Observaciones','$this->Cantidad_Horas')";

		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;
			
	}
	
	public function consultarInasistencia()
	{
		$this->Conexion=Conectarse();
		$sql="select i.Cod_Inas, i.APRENDIZ, i.R_APRENDIZAJE_Code_Res, i.Fecha_Inas, i.Periodo_Inas i.Observaciones, i.Cantidad_Horas , r.Code_Res, 
		    from inasistencia i, r_Aprendizaje r,
			where (i.Cod_Inas= r.Code_Res)";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}
	
	public function consultarInasistencia($Cod_Inas)
	{
		$this->Conexion=Conectarse();
		$sql="select * from inasistencia where Cod_Inas='$Cod_Inas'";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}

	}
?>


