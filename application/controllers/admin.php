<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
		parent::__construct();		
	/*	$this->load->helper('url');*/
	
		$this->load->library('user_agent');
 		$this->load->model('Admin_model');
		$this->load->library('form_validation');
		$this->load->library('recaptcha');
		$this->load->helper('captcha');
		$this->load->library('pagination');
// 		$this->load->library('pagination');
// 		$this->load->library('user_agent');
		
	}			
	
	function index(){
	
		if(is_logged()){
		
			redirect('zgloszenia');
			die();
		
		}
	
		$data['error']='';
	
		if ($this->input->post('submit')) {			
	
			$this->form_validation->set_message('required', 'Pole %s jest wymagane.');
			
			$this->form_validation->set_rules('login', 'Użytkownik', 'required');
			$this->form_validation->set_rules('password', 'Hasło', 'required');
// 			$this->form_validation->set_rules('captcha', 'Captcha', 'required|min_length[3]');			

			if (!$this->form_validation->run() === FALSE){
			
				
				$query = $this->Admin_model->validate();
			
					if($query){
			
						$query = $query->row();
			
						$this->Admin_model->login_date($this->input->post('login'));

						$data = array(
							'login' => $query->login,
							'id_user' => $query->id_user,
							'is_logged' => TRUE,
							'is_admin' => $this->Admin_model->is_admin(),
						);

				$this->session->set_userdata($data);				
				
				$this->Admin_model->addlog($this->input->post('login'),'Logowanie','Ok');
				
				redirect('zgloszenia');	

			}else $data['error'] = 'Niepoprawny login lub hasło';
					
			
			} 
			
		}
		
		
// 		$data['recaptcha_html'] = $this->recaptcha->recaptcha_get_html();
//                $data['page'] = 'login/login';
		
		$data['title'] = 'Admin login';
// 		$data['subcurrent'] = 'add';
				
		$this->load->view('admin/header_view',$data);
// 		$this->load->view('template/menu_view');
		$this->load->view('system/login_view');
// 		$this->load->view('clients/add_client_view');
		//$this->load->view('template/footer_view');
		$this->load->view('admin/footer_admin_view');
	}
	
	
	
	function logout(){
	
		$this->Admin_model->addlog(login(),'Wylogowanie','Ok');
		
		$this->session->sess_destroy();
		redirect('admin');
	}
	
	
	
	
	
	
	
	

	
}