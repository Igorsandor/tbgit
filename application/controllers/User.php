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

	/*
	public function indexx()
	{
		$this->load->library('form_validation');


		$this->form_validation->set_rules('username', 'Username', 'required|valid_email|min_length[5]');

		$this->form_validation->set_rules('password', 'Password', 'required|min_length[8]');

		if($this->form_validation->run() === true){
			echo 'Nice job';
		} else {
			echo 'Bad job';
		}

		$this->load->view('login_view');
	}


	public function test(){
		$this->load->helper('date');

		echo mdate('%Y-%M-%d', time());	
	}

	public function url(){
		$this->load->helper('url');

		echo base_url();
	}

	public function userlist(){
		$this->load->model('users_model');
	

		$users = $this->users_model->get_users();

		$this->load->view('userlist_view', ['users' => $users,
		]);
	} */

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




	public function userinfo(){
		$this->load->view('register_view');
		//$name = $this->input->post("name");
		//$lastname = $this->input->post("lastname");		
		//$email = $this->input->post("email");
		//$password = $this->input->post("password");

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
		echo "You have now been registered, Thank you!";
	}



/*	public function userlogin(){
		
		$this->load->view('login_view');
		$this->load->helper('url');
		$this->load->library("form_validation");
		//$this->load->library('session');

			$this->form_validation->set_rules('username', 'Username');
			$this->form_validation->set_rules('password', 'Password');		


			$username = $this->input->get("username");
			$password = $this->input->get("password");
			
		
			$this->load->model('users_model');
			$resultrow = $this->users_model->user_login($username, $password);
			if($resultrow === true){
				//$sessiondata = $this->input->get();
				//$this->load->view('random_view', $sessiondata);
				//echo '<br> Wellcome username: ' . $username;
				$this->load->helper('url');

				//also select all news from news table
				header('Location: /tinderboxCI/user/indexView');
			} else {
				echo '<br> Please login.';
			}

		/*echo 'something ';
		if($this->form_validation->run() === true){
			echo 'inside if <br>';
			$firstname = $this->input->get("firstname");
			$password = $this->input->get("password");

			$this->load->model('users_model');
			$resultrow = $this->user_login($firstname, $password);
			echo $resultrow;
		} else {
			echo 'not good';
		}


		//$this->users_model->user_login();
	
}*/


	public function adminlogin(){

		$this->load->view('adminlogin_view');
		$this->load->helper('url');
		$this->load->library('form_validation');
		$this->load->library('session');
		//$this->load->library('session');


			$this->form_validation->set_rules('username', 'Username');
			$this->form_validation->set_rules('password', 'Password');
			$this->form_validation->set_rules('uid', 'Userid');		


			$username = $this->input->get("username");
			$password = $this->input->get("password");
			$uid 	  = $this->input->get("uid");

			//echo $username . '<br>';
			//echo $password . '<br>';
			//echo $uid;

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






	/*	public function loginuser() {

        // Retrieve session data 
        $session_set_value = $this->session->all_userdata();

        // Check for remember_me data in retrieved session data

        if (isset($session_set_value['logged_in']) && $session_set_value['logged_in'] === "1") {
            $this->load->view('index_view');
        } else {
        	$this->load->library('form_validation');
        	$this->load->helper('form');
            // Check for validation
			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');	
  			$this->form_validation->set_rules('logged_in', 'Logged_in');	
			//get for the user login

			//if validation is false then login page
            if ($this->form_validation->run() === false) {
            	echo 'validation was wrong';
                $this->load->view('login_view');

            } else {
            	
            	$this->load->view('login_view');
            	//if form was wrong then 
            	$username = $this->input->get('username');
            	$password = $this->input->get('password');
				$this->load->model('users_model');
           	    $resultrow = $this->users_model->user_login($username, $password);

                if ($resultrow === true) {
                	echo "correct user info";
                    $remember = $this->input->get('logged_in');
                    	if ($remember === 'on') {
							$remember = $this->input->get('logged_in');
                        	// Set remember me value in session  
                        	$this->session->set_userdata('logged_in', TRUE);
                    	}
         
                    /*$sess_data = array(
                        'username' => $username,
                        'password' => $password
                    );
                    
                    $this->session->set_userdata('logged_in', $session_set_value);
                    echo 'hmm hello';
                    $this->indexview();
                }
            //}
        }
    }


	/*public function schedule(){
		$this->load->model('users_model');
		$data = $this->load->users_model->get_schedules();
		$this->load->view('schedule_view');
		
	}*/

	//public function schedule(){
     //       $this->load->view('schedule_view');
	//}




	public function schedule(){
		$this->load->helper('url'); 
		$this->load->library('session');
		//$this->session_not_set();
		//when inside this method call the model with dB info

		$this->session_check();

		// if( $this->session->userdata('logged_in') === true) {

            echo 'session value logged_in was set to true';

	    	$id = $this->session->userdata('id');
	    	echo '   the id is: ' . $id;

            $this->load->model('users_model');

            //schedulerow contains the rows
            $schedulerow['data'] = $this->users_model->get_schedules($id);
            
            echo '<br> hello this is echo here';

            $this->load->view('schedule_view',$schedulerow);
       // } else{
       // 	echo 'session was not set';
       // }
	}



	public function news(){
		$this->load->helper('url'); 
		$this->load->library('session');
		//$this->session_not_set();
		//when inside this method call the model with dB info
		//if( $this->session->userdata('logged_in') === true) {
        	$this->session_check();
            echo 'session value logged_in was set to true';
            $this->load->model('users_model');
            $newsrow['data'] = $this->users_model->get_news();
            
            echo '<br> hello this is echo here';

            $this->load->view('news_view',$newsrow);
        //} else{
        //	echo 'session was not set';
        //}
	}





	public function index(){
		$this->load->helper('url'); 
		$this->load->library('session');
		//$this->session_not_set();
		//when inside this method call the model with dB info
		//if( $this->session->userdata('logged_in') === true) {
        	$this->session_check();
            echo 'session value logged_in was set to true';
            $this->load->view('index_view');
        //} else{
        //	echo 'session was not set';
        //}
	}	

	//public function schedule_user(){
	//
	//}


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

    //session is set when running user_login
	$userexsists = $this->users_model->user_login($username, $password);



    if($userexsists === true){
        
        $this->load->library('session');
    	echo ' indeside the IF statement <br>';
    	echo ' value of logged_in is: ' . $this->session->userdata('logged_in');
    	if(isset($session_set_value['logged_in']) && $session_set_value['logged_in'] == TRUE){
    		$data['firstname'] = $this->session->all_userdata('firstname'); 
    		echo 'Session is set';   
			$this->load->view('index_view', $data);
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



