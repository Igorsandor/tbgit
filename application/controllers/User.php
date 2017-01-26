<?php

class User extends CI_Controller{
	

	var $data;

    public function __construct() {
        parent::__construct();

        // Load form helper library
        $this->load->helper('form');

        // Load form validation library
        $this->load->library('form_validation');

        // Load session library
        $this->load->library('session');
    }

	public function fpage(){
		$this->load->view('index_view');
	}

	public function rpage(){
		$this->load->view('register_view');
	}


	public function apage(){
		$this->load->view('adminlogin_view');
	}


	public function lpage(){
		$this->load->view('login_view');
	}

	public function spage(){
		$this->load->view('schedule_view');
	}

	public function supage(){
		$this->load->view('supervisor_view');
	}





	public function testpage(){
		$this->load->model('users_model');
        $data['data'] = $this->users_model->getuser();    
		$this->load->view('usertable_view',$data);
	}
















public function mypage(){
            $this->load->model('users_model');
            $data['data'] = $this->users_model->getuser();           
            $this->load->view('my_view',$data);

	}



/*	public function mypage(){
		$this->load->view('my_view');
	}
*/
	public function hello () {
		$fullname = $this->input->post('fullname');
		echo 'Hello '.$fullname;
	}

	public function sum () {
		$number1 = $this->input->post('number1');
		$number2 = $this->input->post('number2');
		echo $number1 + $number2;
	}




	public function add_userrr()
	{

			$firstname = $this->input->post('firstname');
			$lastname = $this->input->post('lastname');

			$data = array('firstname' =>$firstname, 'lastname'=>$lastname);

			$this->load->model('Users_model');
			if($this->Users_model->add($data))
				{
					header("Location: " . "http://opbwu16eintg7.my.eal.dk/tinderboxCI/User/mypage");
					/*$this->get_user();*/
				}
				else
				{
					echo "Data Not Inserted";
				}
	}


	public function delete()
	{
		$this->load->model('Users_model');

		$id = $this->input->get('id');

		if($this->Users_model->deleteuser($id))
		{
			$data['data'] = $this->Users_model->getuser();
			$this->load->view('my_view',$data);
			header("Location: " . "http://opbwu16eintg7.my.eal.dk/tinderboxCI/User/mypage");
		}
	}
	


	public function edit()
	{
		$id = $this->input->get('id');
		$this->load->model('Users_model');
		$data['data'] = $this->Users_model->getuserbyid($id);           
        $this->load->view('usertable_view',$data); /*kitas viewas*/
	}



	public function updateuser()
	{
		$firstname = $this->input->post('firstname');
		$lastname = $this->input->post('lastname');
		$id = $this->input->post('eid');
		$data = array('firstname'=>$firstname, 'lastname'=>$lastname);

		$this->load->model('Users_model');
		if($this->Users_model->updateuserbyid($data,$id))
		{

            $data['data'] = $this->Users_model->getuser();           
            $this->load->view('my_view',$data); /*kitas viewas*/
            header("Location: " . "http://opbwu16eintg7.my.eal.dk/tinderboxCI/User/mypage");
		}
	}



































	public function userinfo(){
		$this->load->view('register_view');

		$this->load->library("form_validation");

		$this->form_validation->set_rules('firstname', 'Username', 'required|min_length[3]');
		$this->form_validation->set_rules('lastname', 'Lastname', 'required|min_length[3]');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|min_length[5]');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[3]');
		$this->form_validation->set_rules('username', 'Username', 'required|min_length[3]');

		if($this->form_validation->run() === true){
			echo 'good good <br>';
				$user = $this->input->post();
		
				$this->useradd($user);
		} else {
			echo 'not good';
		}
	}

	public function useradd($para){
		$this->load->model('users_model');
		$this->users_model->set_user($para);
		
	}



	public function adminlogin(){

		$this->load->view('adminlogin_view');
		$this->load->helper('url');
		$this->load->library('form_validation');
		$this->load->library('session');
		

			$this->form_validation->set_rules('username', 'Username');
			$this->form_validation->set_rules('password', 'Password');
			$this->form_validation->set_rules('uid', 'Userid');		


			$username = $this->input->get("username");
			$password = $this->input->get("password");
			$uid 	  = $this->input->get("uid");



			$this->load->model('users_model');
			$resultrow = $this->users_model->admin_login($username, $password, $uid);

			if($resultrow === true){
				//$sessiondata = $this->input->get();
				//$this->load->view('random_view', $sessiondata);
				echo '<br> Wellcome admin: ' . $username;
				$this->load->helper('url');
				$this->load->view('register_view');
			} else {
				echo '<br> Admin please login';
			}
		

	}


	public function schedule(){
		$this->load->helper('url'); 
		$this->load->library('session');

		$this->session_check();

	    	$id = $this->session->userdata('id');
	    	

            $this->load->model('users_model');
     
            $schedulerow['data'] = 
            		$this->users_model->get_schedules($id);

            $this->load->view('schedule_view',$schedulerow);
	}



	public function news(){
		$this->load->helper('url'); 
		$this->load->library('session');

        	$this->session_check();
 
            $this->load->model('users_model');
            $newsrow['data'] = $this->users_model->get_news();
            
            $this->load->view('news_view',$newsrow);

	}





	public function index(){
		$this->load->helper('url'); 
		$this->load->library('session');

        	$this->session_check();
            
            $this->load->view('index_view');
	}	



public function log_out(){
	$this->load->library('session');
	$this->session->set_userdata('logged_in', FALSE);
    header('Location: /tinderboxCI/user/loginuser');
}
		

public function form_check(){
	echo 'Checking login form';

}		

public function loginuser(){

	$this->load->helper('url');
	$this->load->library('form_validation');
	$this->load->library('session');

    $username = $this->input->get('username');
    $password = $this->input->get('password');
    $this->load->model('users_model');
    $session_set_value = $this->session->all_userdata();

	$userexsists = $this->users_model->user_login($username, $password);

    if($userexsists === true){
        
        $this->load->library('session');
    	if(isset($session_set_value['logged_in']) && $session_set_value['logged_in'] == TRUE){
			$this->load->view('index_view');
    	}
    } else {                            
        
        $this->load->view('login_view');
    }
}



	public function session_check(){

    	if ($this->session->userdata('logged_in') === false){ 
       	header('Location: /tinderboxCI/user/loginuser');
   		}
	}











}



