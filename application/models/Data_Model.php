<?php
	class Data_Model extends CI_Model {
		public $where_clause;
		
		public function __construct(){
			$this->load->database();
		}

		public function get_new_ad(){
			$alert_from_date = $this->input->post('alert_from_date');
			$alert_to_date = $this->input->post('alert_to_date');

			$custom_query = 'SELECT * FROM `new_ad` WHERE date BETWEEN ? AND ? ORDER BY product_type, company_name;';
			$query = $this->db->query($custom_query, [$alert_from_date, $alert_to_date]);

			return $query->result_array();
		}
		
		public function get_new_program(){
			$alert_from_date = $this->input->post('alert_from_date');
			$alert_to_date = $this->input->post('alert_to_date');

			$custom_query = 'SELECT * FROM `new_program` WHERE date BETWEEN ? AND ? ORDER BY program_type, launching_time;';
			$query = $this->db->query($custom_query, [$alert_from_date, $alert_to_date]);

			return $query->result_array();
		}
		
		public function get_branded_program(){
			$alert_from_date = $this->input->post('alert_from_date');
			$alert_to_date = $this->input->post('alert_to_date');

			$custom_query = 'SELECT * FROM `branded_program` WHERE date BETWEEN ? AND ? ORDER BY program_type, date;';
			$query = $this->db->query($custom_query, [$alert_from_date, $alert_to_date]);

			return $query->result_array();
		}
	}