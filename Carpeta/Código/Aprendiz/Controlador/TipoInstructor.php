<?php
require_once(realpath(dirname(__FILE__)) . '/Instructor.php');

use Instructor;


class TipoInstructor {
	
	private $idTipoInstructor;
	private $TipoInstructor;
	
	public $_unnamed_Instructor_;

	
	public function TipoInstructor($idTipoInstructor, $TipoInstructor) {
		$this->idTipoInstructor=$idTipoInstructor;
		$this->TipoInstructor=$TipoInstructor;
	}

	Public function getidTipoInstructor()
{
return $this->idTipoInstructor;
}
Public function setidTipoInstructor($value)
{
 $this->idTipoInstructor=$value;
}

Public function getTipoInstructor()
{
return $this->TipoInstructor;
}
Public function setTipoInstructor($value)
{
 $this->TipoInstructor=$value;
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