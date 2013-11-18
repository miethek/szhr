<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Uzytkownicy extends CI_Controller {

	public function __construct(){
		parent::__construct();		
	/*	$this->load->helper('url');*/
	
		$this->load->library('user_agent');
 		$this->load->model('Uzytkownicy_model');
		$this->load->library('form_validation');
//		$this->load->library('recaptcha');
	//	$this->load->helper('captcha');
		$this->load->library('pagination');
// 		$this->load->library('pagination');
// 		$this->load->library('user_agent');
		if(!is_logged()){
		
			redirect('admin');
			die();
		
		}
		
	}			
	
	
	function wszyscy(){
		
		if(!is_logged()){
		
			redirect('admin');
			die();
		
		}
	
		$data['title'] = 'Panel administracyjny - Użytkownicy';
		$data['current'] = 'uzytkownicy';
		
		
		$config['base_url'] = base_url().'uzytkownicy/';
		$config['per_page'] = 20;
		$config['num_links'] = 20;
		$config['total_rows'] = $this->db->get('users')->num_rows();
		$config['segment'] = 2;

		
	
		$data['query'] = $this->db->get('users',$config['per_page'],$this->uri->segment(2));
			
		$this->pagination->initialize($config);


		

	
		$this->load->view('admin/header_admin_view',$data);
// 		$this->load->view('admin/zgloszenia_view');
		$this->load->view('system/uzytkownicy_view');
		$this->load->view('admin/footer_admin_view');
	
	}
	
	function dodaj(){
		
		if(!is_logged()){
		
			redirect('admin');
			die();
		
		}
	
		$data['title'] = 'Panel administracyjny - Dodaj użytkownika';
		$data['current'] = 'dodaj';
		$data['error']='';
		
		if ($this->input->post('save')) {	
		
			$this->form_validation->set_message('required', 'Pole %s jest wymagane.');
			$this->form_validation->set_message('min_length', 'Pole %s musi mieć min %s znaków.');
			$this->form_validation->set_message('max_length', 'Pole %s musi mieć max %s znaków.');
			$this->form_validation->set_message('valid_email', 'Pole %s musi zawierać poprawny adres e-mail.');			
			$this->form_validation->set_message('is_unique', 'Pole %s musi zawierać unikalną wartość.');		
			
			$this->form_validation->set_rules('login', 'Login', 'required|min_length[3]|max_length[20]|is_unique[users.login]');
			$this->form_validation->set_rules('imie', 'Imię', 'required|min_length[2]');			
			$this->form_validation->set_rules('nazwisko', 'Nazwisko', 'required|min_length[2]');			
			$this->form_validation->set_rules('email', 'E-mail', 'required|valid_email|min_length[6]|max_length[150]|is_unique[users.email]');	
			
			if (!$this->form_validation->run() === FALSE){
							
				$data['error'] = $this->Uzytkownicy_model->dodaj();
								
			} 
		
		}
	
		$this->load->view('admin/header_admin_view',$data);
		$this->load->view('system/dodaj_uzytkownika_view');
		$this->load->view('admin/footer_admin_view');
	
	}		
	
	function edytuj($id){
		
		if(!is_logged()){
		
			redirect('admin');
			die();
		
		}
	
		$data['title'] = 'Panel administracyjny - Edytuj użytkownika';
		$data['current'] = 'uzytkownicy';
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
							
				$data['error'] = $this->Uzytkownicy_model->edytuj($id);
								
			} 
		
		}
		
		
		$this->db->where('id_user',$id);	
		$data['query'] = $this->db->get('users');
			
	
		$this->load->view('admin/header_admin_view',$data);
		$this->load->view('system/edytuj_uzytkownika_view');
		$this->load->view('admin/footer_admin_view');
	
	}	
	
	function zmien_haslo($id){
		
		if(!is_logged()){
		
			redirect('admin');
			die();
		
		}
	
		$data['title'] = 'Panel administracyjny - Zmiana hasła';
		$data['current'] = 'uzytkownicy';
		$data['error']='';
		
		if ($this->input->post('submit')) {	
		
			$this->form_validation->set_message('required', 'Pole %s jest wymagane.');
			$this->form_validation->set_message('min_length', 'Pole %s musi mieć min %s znaków.');
			$this->form_validation->set_message('max_length', 'Pole %s musi mieć max %s znaków.');
			$this->form_validation->set_message('matches', 'Podane hasła różnią się.');
			
			
			
			$this->form_validation->set_rules('new_password', 'Nowe hasło', 'required|matches[password_confirm]|min_length[4]|max_length[20]');
			$this->form_validation->set_rules('password_confirm', 'Powtórz hasło', 'required');
			
			
			if (!$this->form_validation->run() === FALSE){
							
				$data['error'] = $this->Uzytkownicy_model->zmien_haslo($id);
								
			} 
		
		}
		
		
		$this->db->where('id_user',$id);	
		$data['query'] = $this->db->get('users');
			
	
		$this->load->view('admin/header_admin_view',$data);
		$this->load->view('system/zmien_haslo_uzytkownika_view');
		$this->load->view('admin/footer_admin_view');
	
	}

	
}