<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$data['message'] = NULL;
		
		$this->load->view('welcome_message', $data);
	}

	public function generate() {
		$col_val = array();
		
		$new_ad = $this->input->post('new_ad');
		$new_prog = $this->input->post('new_prog');
		$branded_prog = $this->input->post('branded_prog');
		
		if($new_ad == 'on') {
			array_push($col_val, 'New Ads');
		}
		
		if($new_prog == 'on') {
			array_push($col_val, 'New Programs');
		}
		
		if($branded_prog == 'on') {
			array_push($col_val, 'Branded Programs');
		}
		
		$data['cols'] = $col_val;

		if (sizeof($col_val) == 0) {
			$data['message'] = "At least one field must be chosen !";
			
			$this->load->view('welcome_message', $data);
		} else {
			$this->load->view('generate_alert', $data);
		}

	}
}
