<?php
/**
 * usuario.php
 * Módulo secundario que implementa la clase Usuario.
 */


/**
 * Declaración de la clase Usuario
*/
class Usuario {

	/**
	 * @var string Dirección de correo electrónico del usuario.
	 * @access private
	 */
	private string $email;

/**
	 * Método que inicializa el atributo $email.
	 *
	 * @access public
	 * @param string $email Email del usuario.
	 * @return array[]:string Array de errores.
	 */
	public function setEmail(string $email) : array {
		/** @var array[]:string  Array vacío, supone que no hay errores. */
		$error = array();
		/** @var string Comprobamos la dirección de correo con expresiones regulares. */
          if (!preg_match('/^\w/', $email)) {
          $error[] = 'El email no tiene un nombre válido';
          }

          if (!preg_match('/@/', $email)) {
          $error[] = 'El email no contiene el símbolo de @';
          }

          if (!preg_match('/[a-zA-Z]+\./', $email)) {
          $error[] = 'El email no tiene un nombre de dominio válido';
          }

          if (!preg_match('/[a-zA-Z]{3,4}$/', $email)) {
          $error[] = 'El email debe terminar con una extensión .com o .edu . org...';
          }
         		/** Devuelve el array de errores. */
		return $error;
	}

    /**
	 * Método que devuelve el valor del atributo $email.
	 *
	 * @access public
	 * @return string Email del usuario.
	 */
	public function getEmail() : string {
		/** Devuelve el valor de la propiedad. */
		return $this->email;

	}

}