<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Zgloszenia extends CI_Controller {

	public function __construct(){
		parent::__construct();		

		$this->load->library('user_agent');
		$this->load->library('form_validation');
		$this->load->library('pagination');
		
		if(!is_logged()){
		
			redirect('admin');
			die();
		
		}
		
	}			
	
	
	function wszystkie(){
		

	
		$data['title'] = 'Panel administracyjny - Zgłoszenia';
		$data['current'] = 'zgloszenia';
		
		
		$config['base_url'] = base_url().'zgloszenia/';
		$config['per_page'] = 20;
		$config['num_links'] = 20;

		$config['total_rows'] = $this->db->get('zgloszenia')->num_rows();
		$config['segment'] = 2;
		$config['first_link'] = 'Początek';
		$config['last_link'] = 'Koniec';
		

		$this->db->order_by('date_create','desc');
		$data['query'] = $this->db->get('zgloszenia',$config['per_page'],$this->uri->segment(2));
			
		$this->pagination->initialize($config);

		$this->load->view('admin/header_admin_view',$data);
		$this->load->view('system/zgloszenia_view');
		$this->load->view('admin/footer_admin_view');
	
	}
	
	function zwyciezcy(){
		

	
		$data['title'] = 'Panel administracyjny - Zwycięzcy';
		$data['current'] = 'zwyciezcy';
		
		
		$config['base_url'] = base_url().'zwyciezcy/';
		$config['per_page'] = 20;
		$config['num_links'] = 20;
		$this->db->where('winner','1');
		$config['total_rows'] = $this->db->get('zgloszenia')->num_rows();
		$config['segment'] = 2;
		$config['first_link'] = 'Początek';
		$config['last_link'] = 'Koniec';
		
		
		$this->db->where('winner','1');
		$this->db->order_by('data_losowania','desc');
		$data['query'] = $this->db->get('zgloszenia',$config['per_page'],$this->uri->segment(2));
			
		$this->pagination->initialize($config);


		

	
		$this->load->view('admin/header_admin_view',$data);
		$this->load->view('system/zgloszenia_wygrane_view');
		$this->load->view('admin/footer_admin_view');
	
	}
	function losowanie(){
		
		if(!is_logged()){
		
			redirect('admin');
			die();
		
		}
	
		$data['title'] = 'Panel administracyjny - Losowanie';
		$data['current'] = 'losowanie';
		
		$this->db->where('winner',0);
		$amount =  $this->db->count_all_results('zgloszenia');
		
		$this->db->where('winner',0);
		$data['query'] = $this->db->get('zgloszenia',1,rand(1,$amount)-1);
			
		$this->load->view('admin/header_admin_view',$data);		
		$this->load->view('system/losowanie_view');
		$this->load->view('admin/footer_admin_view');
	
	}

	function zglos_wygrana(){
		
		if(!is_logged()){
		
			redirect('admin');
			die();
		
		}
	
		$data['title'] = 'Panel administracyjny - Wygrana';
		$data['current'] = 'losowanie';
		
		$this->load->model('Zgloszenia_model');
		
		$this->Zgloszenia_model->wygrana($this->input->post('los_id'));
		
		$this->db->where('id_zgloszenia',$this->input->post('los_id'));	
		
		$data['query'] = $this->db->get('zgloszenia');
			
		$this->load->view('admin/header_admin_view',$data);		
		$this->load->view('system/wygrana_view');
		$this->load->view('admin/footer_admin_view');
	
	}

	
}