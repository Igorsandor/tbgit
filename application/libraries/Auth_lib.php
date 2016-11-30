<?php

class Auth_lib
{

	private $ci;

	public function __construct(){
		$this->ci =& get_instance();
				
		}	

	public function handle_login(){
		
		$this->ci->load->model('users_model');
		$basicAuth = getallheaders()['Authorization'];
		

		//explode for splitting a string
		$encodedLogin = explode(' ', $basicAuth)[1];
		$decodedLogin = base64_decode($encodedLogin);
		$credentials  = explode(':', $decodedLogin);

		$userdata = $this->ci->users_model->
				get_user_by_email_password($credentials[0], $credentials[1]);

		if($userdata === null){
			$this->ci->output
				->set_header('HTTP/1.1 401 Unauthorized')
				->set_header('Content-Type', 'application/json')
				->set_output(json_encode([
					'error' => 'Username or password is wrong'
				]))
				->_display();
				die();

		} else {
			return true;
		}
	}
}