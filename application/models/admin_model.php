<?php
class Admin_model extends CI_Model {
   
   	function validate(){
		
		$this->db->where('login', $this->input->post('login'));
		$this->db->where('is_active', 1);
		$this->db->where('password', sha1($this->input->post('password')));
		$query = $this->db->get('users');
				
		if($query->num_rows == 1) return $query;
		else{
			$content = 'Błędne hasło';
			$this->Admin_model->addlog($this->input->post('login'),'Logowanie błąd',$content);
			return false;
		}
	}
	
	function is_admin(){
		
		$check = $this->db->get_where('users', array('login' => $this->input->post('login'),'is_active' => 1,'is_admin' => 1), 1 );
		if($check->num_rows == 1) return true;
		else return false;
	}
	
	public function login_date($login){
			
		$data = array('date_lastlogin' => date('Y-m-d G:i:s'));	
		$this->db->where('login',$login);
		$this->db->update('users', $data);
	}

	
	public function addlog($login,$type,$content){

		$log = array(
			'login' => $login,
			'type' => $type,
			'ip' => $this->session->userdata('ip_address'),
			'browser' => $this->agent->browser(),
			'version' => $this->agent->version(),
			'platform' => $this->agent->platform(),
			'content' => $content
		);		
		$this->db->insert('logs', $log);	
	}	
	
		
	
}