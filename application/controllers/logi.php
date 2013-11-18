<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Logi extends CI_Controller {

	public function __construct(){
		parent::__construct();		
	/*	$this->load->helper('url');*/
	
		/*$this->load->library('user_agent');
		
		$this->load->library('recaptcha');
		$this->load->helper('captcha');*/
		$this->load->library('form_validation');
		$this->load->library('pagination');
		
		if(!is_logged()){
		
			redirect('admin');
			die();
		
		}
		
	}			
	
	
	function wszystkie(){
		

	
		$data['title'] = 'Panel administracyjny - Logi systemowe';
		$data['current'] = 'logi';
		
		
		$config['base_url'] = base_url().'logi/';
		$config['per_page'] = 20;
		$config['num_links'] = 20;

		$config['total_rows'] = $this->db->get('logs')->num_rows();
		$config['segment'] = 2;
	
		$this->db->order_by('id_log','desc');
		$data['query'] = $this->db->get('logs',$config['per_page'],$this->uri->segment(2));
			
		$this->pagination->initialize($config);
	
		$this->load->view('admin/header_admin_view',$data);
// 		$this->load->view('admin/zgloszenia_view');
		$this->load->view('system/logi_view');
		$this->load->view('admin/footer_admin_view');
	
	}
		
	function okres(){
		

	
		$data['title'] = 'Panel administracyjny - Logi systemowe';
		$data['current'] = 'logi_okres';
	
		$date_start = '0000-00-00';
		$date_end = '0000-00-00';
	
		if ($this->input->post('submit')) {

			
			$this->form_validation->set_message('required', 'Pole %s jest wymagane.');			
			
			$this->form_validation->set_rules('date_start', 'Data start', 'required');
			$this->form_validation->set_rules('date_end', 'Data stop', 'required');
			
			
			if (!$this->form_validation->run() === FALSE){
							
				$date_start = $this->input->post('date_start');
				$date_end = $this->input->post('date_end');
								
			} 
			
			
		}
	
	
		//if ($this->input->post('submit')) {
			$this->db->where('date >=',$date_start);
			$this->db->where('date <=',$date_end.' 23:59:59');
		//}
	
		$this->db->order_by('id_log','desc');
		$data['query'] = $this->db->get('logs');
			
		//$this->pagination->initialize($config);
	
		$this->load->view('admin/header_date_view',$data);
// 		$this->load->view('admin/zgloszenia_view');
		$this->load->view('system/logi_view');
		$this->load->view('admin/footer_admin_view');
	
	}

	
}