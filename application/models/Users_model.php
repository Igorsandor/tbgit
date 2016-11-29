<?php

class Users_model extends CI_Model{

	var $userdetails;
	var $rowarray;


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
				echo $userdetails['uid'];
				echo $userdetails['lastname'];

				//setting the session info
				$this->setting_session($userdetails);

				//user has been found in dB return true
				return true;
			}
	}

    public function setting_session($userdetails){
    	    	$this->session->set_userdata( array(
                'id'=> $userdetails['uid'],
                'firstname'=> $userdetails['firstname'],
                'lastname' => $userdetails['lastname'],
                'username' => $userdetails['username'],
                'password' => $userdetails['password'],
                'logged_in' => TRUE
            )
        );
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



		//spcific users id
		public function get_schedules($id){
		$query = sprintf('SELECT * FROM schedule
				WHERE userid = "%s"'
			, $id);

			$result = $this->db->query($query);
			$rowarray = $result->result();

			//if($rowarray !== null && is_array($rowarray)){
			//	echo 'is it not null';
				return $rowarray;
			//}

		}

		public function get_news(){
		$query = sprintf('SELECT * FROM news
				');

			$result = $this->db->query($query);
			$rowarray = $result->result();

			return $rowarray;

			//if($rowarray !== null && is_array($rowarray)){
			//	echo 'is it not null';
			//	return $rowarray;
			//}

		}




	}