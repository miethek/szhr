<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Email extends CI_Controller {

	public function __construct(){
		parent::__construct();		
	/*	$this->load->helper('url');*/
	
		/*$this->load->library('user_agent');
		
		$this->load->library('recaptcha');
		$this->load->helper('captcha');*/		
		$this->load->library('pagination');
		
		if(!is_logged()){
		
			redirect('admin');
			die();
		
		}
		
	}			
	
	
	function index(){
		

	
		$data['title'] = 'Panel administracyjny - Wysłane wiadomości';
		$data['current'] = 'email';
		
		
		$config['base_url'] = base_url().'logi/';
		$config['per_page'] = 10;
		$config['num_links'] = 20;

		$config['total_rows'] = $this->db->get('emails')->num_rows();
		$config['segment'] = 2;
	
		$this->db->order_by('id_email','desc');
		$data['query'] = $this->db->get('emails',$config['per_page'],$this->uri->segment(2));
			
		$this->pagination->initialize($config);
	
		$this->load->view('admin/header_admin_view',$data);
// 		$this->load->view('admin/zgloszenia_view');
		$this->load->view('system/emails_view');
		$this->load->view('admin/footer_admin_view');
	
	}
		


	
}