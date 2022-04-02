<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$data['message'] = $this->session->userdata('message');
		
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
		$data['adlink'] = 'https://youtu.be/sMwKrxZKUSc';
		$data['data'] = [ 
			"New Ads" => [
				"industry" => [
					"Banking Service" => [
						"bKash Limited" => [
							[
								'Money Savings On IDLC Account 10s 03-03-2022',
								'Channel 24',
								'Asian TV, DBC News, Somoy TV'
							]
						],
						"Nagad Limited" => [ 
							[
								'Nagad Islamic Account 15 sec TVC_44_A Mosque 15s 04-03-2022',
								'Somoy TV',
								'Jamuna TV, DBC News, Channel 24, Asian TV'
							]
						]
					],
					"Telecommunication" => [
						"Grameenphone Limited" => [ 
							[
								'GP Ekhoni Shomoy Network TVC 20s 06-03-2022',
								'Channel 24',
								'Asian TV, DBC News, Somoy TV'
							],
							[
								'GP Ekhoni Shomoy Network TVC Fisherman 40s 06-03-2022',
								'Channel 9',
								'Asian TV, DBC News, Somoy TV'
							]
						],
						"Banglalink Digital Communications Limited" => [ 
							[
								'OOKLA Speedtest_4th Win 10s 02-03-2022	',
								'Somoy TV',
								'Jamuna TV, DBC News, Channel 24, Asian TV'
							]
						]
					],
				]
			],
			"New Programs" => [
				"type" => [
					"Single Drama" => [
						[
							'Ora Sahoshi_Nagorik TV',
							'Launching Time: 05-03-2022 05:00 PM'
						],
						[
							'Tomar Jonno_NTV',
							'Launching Time: 05-03-2022 05:00 PM'
						],
					],
					"Talk Show" => [
							[
							'Sompadokio(Live)_Somoy TV',
							'Launching Time: 05-03-2022 05:00 PM'
							]
					],
					"Movie" => [
						[
							"Maa Amar Maa_Nagorik TV",
							'Launching Time: 05-03-2022 05:00 PM'
						],
						[
							"Prem Keno Kaday_Mohona TV",
							'Launching Time: 05-03-2022 05:00 PM'
						],
						[
							"Ei Niye Shongshar_Asian TV",
							'Launching Time: 05-03-2022 05:00 PM'
						]
					],
					"News" => [
						[
							"News Room Update_Channel 24_05-03-2022",
							'Launching Time: 05-03-2022 05:00 PM'
						],
						[
							"Raater Somoy At 09 PM _Somoy TV_04-03-2022",
							'Launching Time: 05-03-2022 05:00 PM'
						]
					]
				]
			],
			"Branded Programs" => [
				"type" => [
					"Single Drama" => [
						[
							'Ora Sahoshi_Nagorik TV',
							'Sponsored By: Robi Axiata Limited'
						],
						[
							'Tomar Jonno_NTV',
							'Sponsored By: Unilever Bangladesh Limited'
						],
					],
					"Talk Show" => [
							[
							'Sompadokio(Live)_Somoy TV',
							'Sponsored By: PRAN RFL Group'
							]
					],
					"Movie" => [
						[
							"Maa Amar Maa_Nagorik TV",
							'Sponsored By: Grameenphone Limited'
						],
						[
							"Prem Keno Kaday_Mohona TV",
							'Sponsored By: Airtel Bangladesh Limited'
						]
					],
					"News" => [
						[
							"News Room Update_Channel 24_05-03-2022",
							'Sponsored By: RRM Steel'
						],
						[
							"Raater Somoy At 09 PM _Somoy TV_04-03-2022",
							'Sponsored By: Abul Khair Group'
						]
					]
				]
			]
		];
		$data['fa_prog'] = array(
			"program_type" => [
				"sadd"
			]
		);

		if (sizeof($col_val) == 0) {
			$this->session->set_userdata("message", "At least one field must be chosen !");
			
			redirect(base_url());
		} else {
			$this->load->view('generate_alert', $data);
			$this->session->unset_userdata("message");
		}

	}
}
