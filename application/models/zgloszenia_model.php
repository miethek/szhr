<?php
class Zgloszenia_model extends CI_Model {
   

	
	function wygrana ($id) {

// 		$this->load->helper('url');
		$data = array(
			'winner' => 1,			
			'data_losowania' => date('Y-m-d G:i:s'),
			'kto_losowal' => login()
		);	
		$this->db->where('id_zgloszenia',$id);
		$this->db->update('zgloszenia', $data);
		
		$this->load->model('Admin_model');
		$this->Admin_model->addlog(login(),'Losowanie','Zgłoszenie nr: '.$id);

// 		redirect('settings/user/'.$id);
	}
	
	
		
	
}