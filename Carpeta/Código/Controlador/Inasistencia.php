<?php
require_once(realpath(dirname(__FILE__)) . '/Programa.php');

use Programa;

class Inasistencia {
	
	private $Cod_Inas;
	private $N_doc;
	private $Fecha_Inas;
	private $Observaciones;

	public $unnamed_Programa_;
	
	public function Inasistencia($Cod_Inas,$APRENDIZ, $R_APRENDIZAJE_Code_Res, $Fecha_Inas, $Periodo_Inas, $Observaciones, $Cantidad_Horas) {
		$this->Cod_Inas=$Cod_Inas;
		$this->N_doc=$N_doc;
		$this->Fecha_Inas=$Fecha_Inas;
		$this->Observaciones=$Observaciones;

	}

Public function getCod_Inas()
{
return $this->Cod_Inas;
}
Public function setCod_Inas($value)
{
 $this->Cod_Inas=$value;
}
Public function getN_doc()
{
return $this->N_doc;
}
Public function setN_doc($value)
{
 $this->N_doc=$value;
}
Public function getFecha_Inas()
{
return $this->Fecha_Inas;
}
Public function setFecha_Inas($value)
{
 $this->Fecha_Inas=$value;
}
Public function getObservaciones()
{
return $this->Observaciones;
}
Public function setObservaciones($value)
{
 $this->observaciones=$value;
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


