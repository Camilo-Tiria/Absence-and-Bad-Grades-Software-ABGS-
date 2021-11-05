<?php
/**
 * @access public
 * @author ALEXANDER
 */
class Usuario {

	private $usuPassword;
	private $Correo_SENA;

	public function Usuario($usuPassword, $Correo_SENA) {
	$this->usuPassword=$usuPassword;
	$this->Correo_SENA=$Correo_SENA;	
}
Public function getusuPassword()
{
return $this->usuPassword;
}
Public function setusuPassword($value)
{
 $this->usuPassword=$value;
}
Public function getCorreo_SENA()
{
return $this->Correo_SENA;
}
Public function setCorreo_SENA($value)
{
 $this->Correo_SENA=$value;
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