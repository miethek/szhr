<?php
class Uzytkownicy_model extends CI_Model {
   
   public function __construct(){
		parent::__construct();		
			$this->load->model('Admin_model');		
	}	
   	
	
	function dodaj() {
	
		$this->load->model('Mail_model');
		
		$new_pass = random_string('alnum',15);
		
		$data = array(
			'login' => $this->input->post('login'),
			'imie' => $this->input->post('imie'),
			'nazwisko' => $this->input->post('nazwisko'),
			'email' => $this->input->post('email'),
			'password' => sha1($new_pass),			
			'is_active' => 1,			
			'kto_zalozyl' => login(),
		);	
		
		$this->db->insert('users', $data);
		
		
		$login = $this->input->post('login');
		$temat = 'KR.CSSoft.pl - Nowy użytkownik';
		$tekst = 'Twoje konto zostało utworzone.<br/>
			Login: '.$login.'<br/>
			Hasło: '.$new_pass.'<br/><br/>
			
			Wejdź na stronę http://kr.cssoft.pl/admin żeby się zalogować'
			;
		$mail = $this->input->post('email');
		
		$this->Mail_model->send_message($mail,$temat,$tekst);
		//send_message($to,$subject,$message)
		
		
		$content = 'Login: '.$login.', Imie i nazwisko: '.$this->input->post('imie').' '.$this->input->post('nazwisko').' E-mail:'.$this->input->post('email');
		$this->Admin_model->addlog(login(),'Dodanie użytkownia',$content);
		
		
		redirect('uzytkownicy');
		//return 'Dane zmienione';
	}	
	
	function edytuj($id) {

		
		$data = array(
			'imie' => $this->input->post('imie'),
			'nazwisko' => $this->input->post('nazwisko'),
			'email' => $this->input->post('email'),						
		);	
		$this->db->where('id_user',$id);
		$this->db->update('users', $data);

		$login = $this->input->post('login');
		$content = 'Login: '.$login.', Imie i nazwisko: '.$this->input->post('imie').' '.$this->input->post('nazwisko').' E-mail:'.$this->input->post('email');
		$this->Admin_model->addlog(login(),'Edycja użytkownia',$content);
		
		return 'Dane zmienione';
	}
	
	
	function zmien_haslo($id){
	
		$this->load->helper('url');
		$check = $this->db->get_where('users', array('id_user' => $id), 1 );
	
		if($check->num_rows() == 1){
			
			$data = array(
				'password' => sha1($this->input->post('new_password'))
			);	
			$this->db->where('id_user',$id);
			$this->db->update('users', $data);
			
			
 			$this->Admin_model->addlog(login(),'Zmiana hasła','User: '.$this->input->post('login').', p: '.$this->input->post('new_password'));
			
			return 'Hasło zmienione';	
			
		} else return 'Nie ma użytkownika z loginem: '.$this->input->post('login').'.';
	}
	
		
	
}