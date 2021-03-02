<?php
/**
 * @access public
 * @author ALEXANDER
 */
class Usuario {
	/**
	 * @AttributeType Int
	 */
	private $contraseña;
	/**
	 * @AttributeType Varchar(20)
	 */
	private $email;

	/**
	 * @access public
	 * @param aContraseña
	 * @param aEmail
	 */
	public function Usuario($contraseña, $email) {
	$this->contraseña=$contraseña;
	$this->email=$email;	
}
Public function getcontraseña()
{
return $this->contraseña;
}
Public function setcontraseña($value)
{
 $this->contraseña=$value;
}
Public function getemail()
{
return $this->email;
}
Public function setemail($value)
{
 $this->email=$value;
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