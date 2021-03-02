<?php
require_once(realpath(dirname(__FILE__)) . '/Programa.php');
require_once(realpath(dirname(__FILE__)) . '/Notas.php');

use Programa;
use Notas;

class R_Aprendizaje {

    private $Code_Res;
	private $INSTRUCTOR_Num_doc;
	private $PROGRAMA_Ficha_carac;
	private $Nom_Res;
	

	public function R_Aprendizaje($Code_Res,$INSTRUCTOR_Num_doc,$PROGRAMA_Ficha_carac $Nom_Res) {
		$this->Code_Res=$Code_Res;
		$this->INSTRUCTOR_Num_doc=$INSTRUCTOR_Num_doc;
		$this->PROGRAMA_Ficha_carac=$PROGRAMA_Ficha_carac;
		$this->Nom_Res=$Nom_Res;
	}

	Public function getCode_Res()
{
return $this->Code_Res;
}
Public function setCode_Res($value)
{
 $this->Code_Res=$value;
}
Public function getINSTRUCTOR_Num_doc()
{
return $this->INSTRUCTOR_Num_doc;
}
Public function setINSTRUCTOR_Num_doc($value)
{
 $this->INSTRUCTOR_Num_doc=$value;
}
Public function getPROGRAMA_Ficha_carac()
{
return $this->PROGRAMA_Ficha_carac;
}
Public function setPROGRAMA_Ficha_carac($value)
{
 $this->PROGRAMA_Ficha_carac=$value;
}
Public function getNom_Res()
{
return $this->Nom_Res;
}
Public function setNom_Res($value)
{
 $this->Nom_Res=$value;
}
	/**
	 * @access public
	 */
	public function Agregar() {
		// Not yet implemented
	}

	/**
	 * @access public
	 */
	public function Consultar() {
		// Not yet implemented
	}

	/**
	 * @access public
	 */
	public function Modificar() {
		// Not yet implemented
	}

	/**
	 * @access public
	 */
	public function Eliminar() {
		// Not yet implemented
	}
}
?>