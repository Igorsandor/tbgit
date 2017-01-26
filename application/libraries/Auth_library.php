<?php 

class Auth_library{


	private $ci;

	public function __construct(){
		$this->ci =& get_instance();
	}

	public function method($allowed_method = 'GET'){
		$method = $_SERVER['REQUEST_METHOD'];

		if($allowed_method === $method){
			return true;
		}


		$this->ci->output
			->set_header('HTTP/1.1 405 Method Not Allowed')
			->set_header('Content-Type: application/json')
			->set_output(json_encode([
				'error' => 405,
				'error' => 'Method Not Allowed',
				]))
			->_display();

		die();

	}
}