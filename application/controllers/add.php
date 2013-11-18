<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Add extends CI_Controller {

	public function __construct(){
		parent::__construct();		
	/*	$this->load->helper('url');*/
	
		$this->load->library('user_agent');
		$this->load->model('Add_model');
		$this->load->library('form_validation');
		$this->load->library('recaptcha');
		$this->load->helper('captcha');
// 		$this->load->library('pagination');
// 		$this->load->library('user_agent');
		
	}			
	
	function index(){
	
		$data['error']='';
	
		$this->db->where('aktywny',1);	
		$data['query'] = $this->db->get('konkursy');
	
		
	
		if ($this->input->post('submit')) {		

			$row = $data['query']->row();		
	
			$this->form_validation->set_message('required', 'Pole %s jest wymagane.');
			$this->form_validation->set_message('min_length', 'Pole %s musi mieć min %s znaków.');
			$this->form_validation->set_message('max_length', 'Pole %s musi mieć max %s znaków.');
			$this->form_validation->set_message('valid_email', 'Pole %s musi zawierać poprawny adres e-mail.');
			$this->form_validation->set_message('numeric', 'Pole %s musi zawierać wyłącznie cyfry.');
			
			if($row->imie == 'on') $this->form_validation->set_rules('imie', 'Imię', 'required|min_length[2]');			
			if($row->nazwisko == 'on') $this->form_validation->set_rules('nazwisko', 'Nazwisko', 'required|min_length[2]');			
			if($row->plec == 'on') $this->form_validation->set_rules('plec', 'Płeć', 'required');	
			if($row->adres == 'on') $this->form_validation->set_rules('adres', 'Adres', 'required');	
			if($row->kod_pocztowy == 'on'){ 
				$this->form_validation->set_rules('kod1', 'Kod pocztowy', 'required|numeric|min_length[2]|max_length[2]');	
				$this->form_validation->set_rules('kod2', 'Kod pocztowy', 'required|numeric|min_length[3]|max_length[3]');	
			}
			if($row->miasto == 'on') $this->form_validation->set_rules('miasto', 'Miasto', 'required');	
			if($row->email == 'on') $this->form_validation->set_rules('email', 'E-mail', 'required|valid_email|min_length[6]|max_length[150]');	
			if($row->telefon == 'on') $this->form_validation->set_rules('telefon', 'Telefon', 'required|min_length[9]');
			if($row->kod == 'on') $this->form_validation->set_rules('kod', 'Kod z opakowania', 'required|min_length[6]');
			if($row->paragon == 'on') $this->form_validation->set_rules('paragon', 'Data wystawienia paragonu', 'required');	
			if($row->slogan == 'on') $this->form_validation->set_rules('slogan', 'Slogan', 'required|min_length[5]');
			if($row->regulamin == 'on') $this->form_validation->set_rules('regulamin', 'Regulamin', 'required');
			if($row->checkbox1 == 'on') $this->form_validation->set_rules('checkbox1', 'Zgoda na przetwarzanie danych osobowych przez Danone', 'required');
			if($row->checkbox2 == 'on') $this->form_validation->set_rules('checkbox2', 'Zgoda na przetwarzanie danych osobowych przez Marketing House', 'required');
			if($row->checkbox3 == 'on') $this->form_validation->set_rules('checkbox3', 'Zgoda na otrzymywanie informacji handlowych', 'required');

			if (!$this->form_validation->run() === FALSE){
			
				if($row->captcha == 'on') {
					$this->recaptcha->recaptcha_check_answer();
				
					if($this->recaptcha->getIsValid()){
						$this->Add_model->add();
					
					} else {
					     $data['error'] = 'Przepisz poprawnie kod z obrazka';

					}
				} 
				else $this->Add_model->add();
				
			
			} 			
			
		}
		
		/*$this->db->where('aktywny',1);	
		$data['query'] = $this->db->get('konkursy');*/
		
		$data['recaptcha_html'] = $this->recaptcha->recaptcha_get_html();
               $data['page'] = 'login/login';
		
		$data['title'] = 'Wypełnij formularz';
// 		$data['subcurrent'] = 'add';
				
		$this->load->view('template/header_view',$data);
// 		$this->load->view('template/menu_view');
		$this->load->view('template/add_view');
// 		$this->load->view('clients/add_client_view');
		$this->load->view('template/footer_view');
	}
	
	function dodane(){
	
	
		$data['title'] = 'Zgłoszenie dodane';
	
		$this->load->view('template/header_view',$data);
		$this->load->view('template/added_view');
		$this->load->view('template/footer_view');
	
	}

	
}