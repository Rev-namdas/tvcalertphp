<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alert_Controller extends CI_Controller {

	public function index()
	{
		$data['message'] = $this->session->userdata('message');
				
		$this->load->view('control_panel', $data);
	}

	public function generate() {
		//Passing Data From Controller to View
		$cols = [
			'new_ad'		=> $this->input->post('new_ad'),
			'new_prog'		=> $this->input->post('new_prog'),
			'branded_prog'	=> $this->input->post('branded_prog')
		];

		$alert_from_date 	= $this->input->post('alert_from_date');
		$alert_to_date 		= $this->input->post('alert_to_date');
		
		$data['cols'] 				= $cols;
		$data['alert_from_date'] 	= date('d-M-Y', strtotime($alert_from_date));
		$data['alert_to_date'] 		= date('d-M-Y', strtotime($alert_to_date));
		$data['new_ads'] 			= $this->Data_Model->get_new_ad();
		$data['new_progs'] 			= $this->Data_Model->get_new_program();
		$data['branded_progs'] 		= $this->Data_Model->get_branded_program();


		// Validation Purpose
		$is_not_chosen = true;

		foreach($cols as $col){
			if($col != null){
				$is_not_chosen = false;
			}
		}

		if ($is_not_chosen)
		{
			$this->session->unset_userdata("message");
			$this->session->set_userdata("message", "At least one field must be chosen !");

			redirect(base_url());
		} 
		elseif ($alert_from_date == "" || $alert_to_date == "")
		{
			$this->session->unset_userdata("message");
			$this->session->set_userdata("message", "Select both date !");

			redirect(base_url());
		}
		else {
			$this->session->unset_userdata("message");
			$this->load->view('generate_alert', $data);
		}

	}
}