<?php

class Users_model extends CI_Model{

	var $userdetails;
	var $rowarray;
	/*
	public function get_something($userlogin)
	{
		$query = sprintf('SELECT firstname,lastname,email, password 
				FROM users 
				WHERE name = "%s" '
				, $userlogin);

		$result = $this->db->query($query);
		return $result->row();
	} 
	*/

	public function get_schedules(){
		$CI->db->select('schedule.title', 'schedule.content','schedule.timespan');
		$CI->db->from('schedule');	
		$CI->db->where('id', $userid);
		$CI->db->join('user_email', 'user_email.user_id = emails.id', 'left');
		$query = $CI->db->get(); 
	}

	public function get_schedules(){
		$query = $this->db->get('schedule');
		return $query->result();
	}



	public function set_user($userdata){

		$query = sprintf('INSERT INTO users
			(firstname, lastname, email, password, username)
			VALUES
			("%s","%s","%s","%s","%s")'
			, $userdata['firstname']
			, $userdata['lastname']
			, $userdata['email']
			, $userdata['password']
			, $userdata['username']);

		//pushing the query into mysql
		$this->db->query($query);
		return $this->db->insert_id();
	}

	public function user_login($username, $password){
		$query = sprintf('SELECT * FROM users
				WHERE username = "%s" AND password = "%s"
				LIMIT 1'
			, $username
			, $password);

			$result = $this->db->query($query);
			$rowarray = $result->row_array();
			if($rowarray !== null && is_array($rowarray)){
				echo 'This name was found in the database.. Wellcome user!: ';
				$userdetails = $rowarray;
				echo $userdetails['username'];

				//setting the session data for the logged in user
				//$this->set_session();
				return true;
			}
	}

	function userdetails(){
		return $rowarray;
	}






	public function delete_note($id = null){

		if($id === null) {
			$this->errors[] = 'id-not-set';
		}
		if(!preg_match('/^[0-9]'+ $id)){
			$this->errors[] = 'id-not-set';
		}

		$san_id = (int)trim(strip_tags($id));

		$none_tainted_id = $this->db->escape_str($san_id);

		if(count($this->errors) > 0){
			return false;
		}

		$query = sprintf('DELETE FROM notes WHERE id = %',
			$none_tainted_id); 
		
		if($this->db->query($query))
			{
				return true;
			}
		$this->errors[] = 'note-not-deleted:' . $id;
		return false;
	}

		public function admin_login($username, $password, $uid){
		$query = sprintf('SELECT * FROM users
				WHERE username = "%s" AND password = "%s" AND uid = "%s"
				LIMIT 1'
			, $username
			, $password
			, $uid);

			$result = $this->db->query($query);
			if($result->row() !== null){
				//echo 'This name was found in the database.. Wellcome user!: ' . $result->row()->$username;
				return true;
			}
		}





	}