<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pomoc extends CI_Controller {

	public function __construct(){
		parent::__construct();		
		
		if(!is_logged()){
		
			redirect('admin');
			die();
		
		}
		
	}			
	
	
	function index(){
	
	
		$data['title'] = 'Panel administracyjny - Pomoc';
		$data['current'] = 'pomoc';
		
		$this->load->view('admin/header_admin_view',$data);
		$this->load->view('system/pomoc_view');
		$this->load->view('admin/footer_admin_view');
	
	}

	
}