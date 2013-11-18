<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Raport extends CI_Controller {

	public function __construct(){
		parent::__construct();		
	/*	$this->load->helper('url');*/
	
		$this->load->library('user_agent');
// 		$this->load->model('Add_model');
		$this->load->library('form_validation');
		//$this->load->library('pagination');
// 		$this->load->library('pagination');
// 		$this->load->library('user_agent');

		if(!is_logged()){
		
			redirect('admin');
			die();
		
		}
		
	}			
	
	
	function index(){

	
		$data['title'] = 'Panel administracyjny - Raport';
		$data['current'] = 'raport';
			
		$data['wszystkie'] = $this->db->query('SELECT COUNT(id_zgloszenia) AS amount FROM zgloszenia');
		$data['wylosowane'] = $this->db->query('SELECT COUNT(id_zgloszenia) AS amount FROM zgloszenia WHERE winner = "1" GROUP BY winner');
		$data['men'] = $this->db->query('SELECT COUNT(id_zgloszenia) AS amount FROM zgloszenia WHERE plec = "M" GROUP BY plec');
		$data['women'] = $this->db->query('SELECT COUNT(id_zgloszenia) AS amount FROM zgloszenia WHERE plec = "K" GROUP BY plec');
		
		//$data['query'] = $this->db->get('zgloszenia');
		
		
	
		$this->load->view('admin/header_admin_view',$data);
// 		$this->load->view('admin/zgloszenia_view');
		$this->load->view('system/raport_view');
		$this->load->view('admin/footer_admin_view');
	
	}
	
	function dzis(){
		

		$data['title'] = 'Panel administracyjny - Raport - Dziś';
		$data['current'] = 'raport_dzis';
			
		$dzis = date('Y-m-d');
			
		$data['wszystkie'] = $this->db->query('SELECT COUNT(id_zgloszenia) AS amount FROM zgloszenia WHERE date_create >= "'.$dzis.'"');
		$data['wylosowane'] = $this->db->query('SELECT COUNT(id_zgloszenia) AS amount FROM zgloszenia WHERE winner = "1" AND  date_create >= "'.$dzis.'" GROUP BY winner');
		$data['men'] = $this->db->query('SELECT COUNT(id_zgloszenia) AS amount FROM zgloszenia WHERE plec = "M" AND  date_create >= "'.$dzis.'" GROUP BY plec');
		$data['women'] = $this->db->query('SELECT COUNT(id_zgloszenia) AS amount FROM zgloszenia WHERE plec = "K"  AND date_create >= "'.$dzis.'" GROUP BY plec');
		
		//$data['query'] = $this->db->get('zgloszenia');
		
		
	
		$this->load->view('admin/header_admin_view',$data);
// 		$this->load->view('admin/zgloszenia_view');
		$this->load->view('system/raport_view');
		$this->load->view('admin/footer_admin_view');
	
	}
		
	function tydzien(){
		

	
		$data['title'] = 'Panel administracyjny - Raport - Ostatni tydzień';
		$data['current'] = 'raport_week';
		
		$date = date('Y-m-d',strtotime("-7 day"));

			
		$data['wszystkie'] = $this->db->query('SELECT COUNT(id_zgloszenia) AS amount FROM zgloszenia WHERE date_create >= "'.$date.'"');
		$data['wylosowane'] = $this->db->query('SELECT COUNT(id_zgloszenia) AS amount FROM zgloszenia WHERE winner = "1" AND date_create >= "'.$date.'"');
		$data['men'] = $this->db->query('SELECT COUNT(id_zgloszenia) AS amount FROM zgloszenia WHERE plec = "M" AND date_create >= "'.$date.'"');
		$data['women'] = $this->db->query('SELECT COUNT(id_zgloszenia) AS amount FROM zgloszenia WHERE plec = "K" AND date_create >= "'.$date.'"');
	
		$this->load->view('admin/header_admin_view',$data);
		$this->load->view('system/raport_view');
		
		/*echo date('Y-m-d').'<br/>';
		echo strtotime(date('Y-m-d')).'<br/>';
		echo date('Y-m-d',strtotime("-20 day")).'<br/>';*/
		
		$this->load->view('admin/footer_admin_view');
	
	}		
	
	function miesiac(){
		

	
		$data['title'] = 'Panel administracyjny - Raport - Ostatni miesiąc';
		$data['current'] = 'raport_miesiac';
			
		$date = date('Y-m-d',strtotime("-1 month"));
		
		$data['wszystkie'] = $this->db->query('SELECT COUNT(id_zgloszenia) AS amount FROM zgloszenia WHERE date_create >= "'.$date.'"');
		$data['wylosowane'] = $this->db->query('SELECT COUNT(id_zgloszenia) AS amount FROM zgloszenia WHERE winner = "1" AND  date_create >= "'.$date.'"');
		$data['men'] = $this->db->query('SELECT COUNT(id_zgloszenia) AS amount FROM zgloszenia WHERE plec = "M" AND  date_create >= "'.$date.'"');
		$data['women'] = $this->db->query('SELECT COUNT(id_zgloszenia) AS amount FROM zgloszenia WHERE plec = "K" AND  date_create >= "'.$date.'"');

		
	
		$this->load->view('admin/header_admin_view',$data);
		$this->load->view('system/raport_view');
		$this->load->view('admin/footer_admin_view');
	
	}	
	
	function okres(){
		

		
		$date_start = '0000-00-00';
		$date_end = '0000-00-00';
		
		
		if ($this->input->post('submit')) {

			
			$this->form_validation->set_message('required', 'Pole %s jest wymagane.');			
			
			$this->form_validation->set_rules('date_start', 'Data start', 'required');
			$this->form_validation->set_rules('date_end', 'Data stop', 'required');
			
			
			if (!$this->form_validation->run() === FALSE){
							
				$date_start = $this->input->post('date_start');
				$date_end = $this->input->post('date_end').' 23:59:59';
								
			} 
			
			
		}
				
		//echo $date_start;
		//echo $date_end;
	
		$data['title'] = 'Panel administracyjny - Raport - Okres';
		$data['current'] = 'raport_okres';
			
		$this->db->select('COUNT(id_zgloszenia) AS amount');
		if ($this->input->post('submit')) {
			$this->db->where('date_create >=',$date_start);
			$this->db->where('date_create <=',$date_end);
		}
		$data['wszystkie'] = $this->db->get('zgloszenia');
		
			
		
		$this->db->select('COUNT(id_zgloszenia) AS amount');
		if ($this->input->post('submit')) {
			$this->db->where('date_create >=',$date_start);
			$this->db->where('date_create <=',$date_end);
		}
		$this->db->where('winner','1');
		$data['wylosowane'] = $this->db->get('zgloszenia');
		
		$this->db->select('COUNT(id_zgloszenia) AS amount');
		if ($this->input->post('submit')) {
			$this->db->where('date_create >=',$date_start);
			$this->db->where('date_create <=',$date_end);
		}
		$this->db->where('plec','M');
		$data['men'] = $this->db->get('zgloszenia');
		
		$this->db->select('COUNT(id_zgloszenia) AS amount');
		if ($this->input->post('submit')) {
			$this->db->where('date_create >=',$date_start);
			$this->db->where('date_create <=',$date_end);
		}
		$this->db->where('plec','K');
		$data['women'] = $this->db->get('zgloszenia');
		

	
		$this->load->view('admin/header_date_view_s3',$data);
		$this->load->view('system/raport_view');
		$this->load->view('admin/footer_admin_view');
	
	}

	
}