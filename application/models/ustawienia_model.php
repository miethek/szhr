<?php
class Ustawienia_model extends CI_Model {
   
      public function __construct(){
		parent::__construct();		
			$this->load->model('Admin_model');		
	}	
	
	function edit_profile($id) {

		
		$data = array(
			'imie' => $this->input->post('imie'),
			'nazwisko' => $this->input->post('nazwisko'),
			'email' => $this->input->post('email'),						
		);	
		$this->db->where('id_user',$id);
		$this->db->update('users', $data);

		$content = 'Imie i nazwisko: '.$this->input->post('imie').' '.$this->input->post('nazwisko').', E-mail:'.$this->input->post('email');
		$this->Admin_model->addlog(login(),'Edycja profilu',$content);
		
		return 'Dane zmienione';
	}
	

	function zmien_haslo(){
	
		$this->load->helper('url');	
		
		$check = $this->db->get_where('users', array('login' => $this->input->post('login'), 'password' => sha1($this->input->post('current_password')) ), 1 );
		
			if($check->num_rows() == 1){
			
				$data = array('password' => sha1($this->input->post('new_password')));	
				$this->db->where('login',$this->input->post('login'));
				$this->db->where('password',sha1($this->input->post('current_password')));
				$this->db->update('users', $data);
				
				$this->Admin_model->addlog(login(),'Zmiana swojego hasła', 'User: '.$this->input->post('login'));
				
				return 'Hasło zmienione';	
				
			} else {
				
				$this->Admin_model->addlog(login(),'Zmiana swojego hasła błąd','Błędne stare hasło? p: '.$this->input->post('current_password'));
				return 'Aktualne hasło jest nieprawidłowe';
				
			} 
		
	}
	
	function usun_konto(){
	
		$this->load->helper('url');	
		
		$check = $this->db->get_where('users', array('login' => $this->input->post('login'), 'password' => sha1($this->input->post('current_password')) ), 1 );
		
			if($check->num_rows() == 1){
			
				$data = array(
					'password' => '',
					'is_active' => '0'
				);	
				$this->db->where('login',$this->input->post('login'));
				$this->db->where('password',sha1($this->input->post('current_password')));
				$this->db->update('users', $data);
				$this->Admin_model->addlog(login(),'Usuń konto','Ok');
				redirect('admin/logout');
				
			} else {
				
				$this->Admin_model->addlog(login(),'Usuń konto błąd','Błędne hasło');
				return 'Aktualne hasło jest nieprawidłowe';
				
			} 
		
	}
	
	function edit_konkurs() {

		
		$data = array(
			'nazwa' => $this->input->post('nazwa'),
			'imie' => $this->input->post('imie'),
			'nazwisko' => $this->input->post('nazwisko'),
			'plec' => $this->input->post('plec'),
			'adres' => $this->input->post('adres'),
			'kod_pocztowy' => $this->input->post('kod_pocztowy'),
			'miasto' => $this->input->post('miasto'),
			'email' => $this->input->post('email'),						
			'telefon' => $this->input->post('telefon'),
			'kod' => $this->input->post('kod'),
			'paragon' => $this->input->post('paragon'),
			'slogan' => $this->input->post('slogan'),
			'regulamin' => $this->input->post('regulamin'),
			'regulamin_tresc' => $this->input->post('regulamin_tresc'),
			'checkbox1' => $this->input->post('checkbox1'),
			'checkbox1_tresc' => $this->input->post('checkbox1_tresc'),
			'checkbox2' => $this->input->post('checkbox2'),
			'checkbox2_tresc' => $this->input->post('checkbox2_tresc'),
			'checkbox3' => $this->input->post('checkbox3'),
			'checkbox3_tresc' => $this->input->post('checkbox3_tresc'),
			'captcha' => $this->input->post('captcha'),
		);	
		$this->db->where('id_konkurs',$this->input->post('id_konkurs'));
		$this->db->update('konkursy', $data);

		//$content = 'Imie i nazwisko: '.$this->input->post('imie').' '.$this->input->post('nazwisko').', E-mail:'.$this->input->post('email');
		$this->Admin_model->addlog(login(),'Edycja konkursu', 'ID: '.$this->input->post('id_konkurs'));
		
		return 'Dane zmienione';
	}
	
	
}