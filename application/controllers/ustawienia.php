<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ustawienia extends CI_Controller {

	public function __construct(){
		parent::__construct();		
	/*	$this->load->helper('url');*/
	
		$this->load->library('user_agent');
 		$this->load->model('Ustawienia_model');
		$this->load->library('form_validation');
		$this->load->library('pagination');
// 		$this->load->library('pagination');
// 		$this->load->library('user_agent');

		if(!is_logged()){
		
			redirect('admin');
			die();
		
		}
		
	}			
	
	
	function profil(){
		
	
		$data['title'] = 'Panel administracyjny - Edytuj profil';
		$data['current'] = 'profil';
		$data['error']='';
		
		if ($this->input->post('submit')) {	
		
			$this->form_validation->set_message('required', 'Pole %s jest wymagane.');
			$this->form_validation->set_message('min_length', 'Pole %s musi mieć min %s znaków.');
			$this->form_validation->set_message('max_length', 'Pole %s musi mieć max %s znaków.');
			$this->form_validation->set_message('valid_email', 'Pole %s musi zawierać poprawny adres e-mail.');			
			
			$this->form_validation->set_rules('imie', 'Imię', 'required|min_length[2]');			
			$this->form_validation->set_rules('nazwisko', 'Nazwisko', 'required|min_length[2]');			
			$this->form_validation->set_rules('email', 'E-mail', 'required|valid_email|min_length[6]|max_length[150]');	
			
			if (!$this->form_validation->run() === FALSE){
							
				$data['error'] = $this->Ustawienia_model->edit_profile(id_user());
								
			} 
		
		}
		
		
		$this->db->where('id_user',id_user());	
		$data['query'] = $this->db->get('users');
			
	
		$this->load->view('admin/header_admin_view',$data);
		$this->load->view('system/edytuj_uzytkownika_view');
		$this->load->view('admin/footer_admin_view');
	
	}	
	
	
	
	function zmien_haslo(){
		
		$data['title'] = 'Panel administracyjny - Zmiana hasła';
		$data['current'] = 'zmien_haslo';
		$data['error']='';
		
		if ($this->input->post('submit')) {	
		
			$this->form_validation->set_message('required', 'Pole %s jest wymagane.');
			$this->form_validation->set_message('min_length', 'Pole %s musi mieć min %s znaków.');
			$this->form_validation->set_message('max_length', 'Pole %s musi mieć max %s znaków.');
			$this->form_validation->set_message('matches', 'Podane hasła różnią się.');
			
			
			$this->form_validation->set_rules('current_password', 'Aktualne hasło', 'required');
			$this->form_validation->set_rules('new_password', 'Nowe hasło', 'required|matches[password_confirm]|min_length[4]|max_length[20]');
			$this->form_validation->set_rules('password_confirm', 'Powtórz hasło', 'required');
			
			
			if (!$this->form_validation->run() === FALSE){
							
				$data['error'] = $this->Ustawienia_model->zmien_haslo();
								
			} 
		
		}
		
		
		$this->db->where('id_user',id_user());	
		$data['query'] = $this->db->get('users');
			
	
		$this->load->view('admin/header_admin_view',$data);
		$this->load->view('system/zmien_haslo_view');
		$this->load->view('admin/footer_admin_view');
	
	}
	
	function usun_konto(){
		

	
		$data['title'] = 'Panel administracyjny - Usuń konto';
		$data['current'] = 'usun_konto';
		$data['error']='';
		
		if ($this->input->post('submit')) {	
		
			$this->form_validation->set_message('required', 'Pole %s jest wymagane.');			
			
			$this->form_validation->set_rules('current_password', 'Aktualne hasło', 'required');

			
			if (!$this->form_validation->run() === FALSE){
							
				$data['error'] = $this->Ustawienia_model->usun_konto();
								
			} 
		
		}
		
		
		$this->db->where('id_user',id_user());	
		$data['query'] = $this->db->get('users');
			
	
		$this->load->view('admin/header_admin_view',$data);
		$this->load->view('system/usun_konto_view');
		$this->load->view('admin/footer_admin_view');
	
	}
	
	function konkurs(){
		
	
		$data['title'] = 'Panel administracyjny - Edytuj konkurs';
		$data['current'] = 'konkurs';
		$data['error']='';
		
		if ($this->input->post('submit')) {	
									
				$data['error'] = $this->Ustawienia_model->edit_konkurs();				
										
		}
		
		
		$this->db->where('aktywny',1);	
		$data['query'] = $this->db->get('konkursy');
			
	
		$this->load->view('admin/header_admin_view',$data);
		$this->load->view('system/edytuj_konkurs_view');
		$this->load->view('admin/footer_admin_view');
	
	}	

	
}