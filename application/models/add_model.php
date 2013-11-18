<?php
class Add_model extends CI_Model {

    public function __construct(){
		parent::__construct();		
			$this->load->model('Admin_model');		
	}	

	function add() {

		$this->load->helper('url');		
		
		$data = array(
			'id_konkurs' => $this->input->post('id_konkurs'),
			'imie' => $this->input->post('imie'),
			'nazwisko' => $this->input->post('nazwisko'),
			'plec' => $this->input->post('plec'),
			'adres' => $this->input->post('adres'),
			'kod1' => $this->input->post('kod1'),
			'kod2' => $this->input->post('kod2'),
			'miasto' => $this->input->post('miasto'),
			'email' => $this->input->post('email'),
			'telefon' => $this->input->post('telefon'),
			'kod' => $this->input->post('kod'),
			'paragon' => $this->input->post('paragon'),
			'slogan' => $this->input->post('slogan'),
			'regulamin' => $this->input->post('regulamin'),
			'zgoda1' => $this->input->post('checkbox1'),
			'zgoda2' => $this->input->post('checkbox2'),
			'zgoda3' => $this->input->post('checkbox3'),			
			'captcha' => $this->input->post('recaptcha_response_field'),
			'ip' => $this->session->userdata('ip_address'),
			'browser' => $this->agent->browser(),
			'version' => $this->agent->version(),
			'system' => $this->agent->platform()
		);	
		
		$this->db->insert('zgloszenia', $data);		
		
		$this->Admin_model->addlog('no-name','Dodane zgłoszenie', 'Konkurs: '.$this->input->post('id_konkurs'));
		
		redirect('dodane');
		
		
// 		echo 'dodane';
	}
	
}