<?php
/**
 * @access public
 * @author ALEXANDER
 */
class Usuario {
	/**
	 * @AttributeType Int
	 */
	private $contrase�a;
	/**
	 * @AttributeType Varchar(20)
	 */
	private $email;

	/**
	 * @access public
	 * @param aContrase�a
	 * @param aEmail
	 */
	public function Usuario($contrase�a, $email) {
	$this->contrase�a=$contrase�a;
	$this->email=$email;	
}
Public function getcontrase�a()
{
return $this->contrase�a;
}
Public function setcontrase�a($value)
{
 $this->contrase�a=$value;
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