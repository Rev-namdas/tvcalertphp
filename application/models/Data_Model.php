<?php
	class Data_Model extends CI_Model {
		public $where_clause;
		
		public function __construct(){
			$this->load->database();
		}

		public function get_new_ad(){
			$alert_from_date = $this->input->post('alert_from_date');
			$alert_to_date = $this->input->post('alert_to_date');

			// Method 1 - Raw SQL
			// $custom_query = 'SELECT * FROM `new_ads` WHERE date BETWEEN ? AND ? ORDER BY product_type, company_name;';
			// $query = $this->db->query($custom_query, [$alert_from_date, $alert_to_date]);

			// return $query->result_array();


			// Method 2 - Query Builder Class
			$this->db->select('*');
			$this->db->from('new_ads');
			$this->db->where('date >=', $alert_from_date);
			$this->db->where('date <=', $alert_to_date);
			$this->db->order_by('product_type, company_name, date');

			return $this->db->get()->result_array();
		}
		
		public function get_new_program(){
			$alert_from_date = $this->input->post('alert_from_date');
			$alert_to_date = $this->input->post('alert_to_date');

			// Method 1 - Raw SQL
			// $custom_query = 'SELECT * FROM `new_programs` WHERE date BETWEEN ? AND ? ORDER BY program_type, launching_time;';
			// $query = $this->db->query($custom_query, [$alert_from_date, $alert_to_date]);

			// return $query->result_array();


			// Method 2 - Query Builder Class
			$this->db->select('*');
			$this->db->from('new_programs');
			$this->db->where('date >=', $alert_from_date);
			$this->db->where('date <=', $alert_to_date);
			$this->db->order_by('program_type, launching_time');

			return $this->db->get()->result_array();
		}
		
		public function get_branded_program(){
			$alert_from_date = $this->input->post('alert_from_date');
			$alert_to_date = $this->input->post('alert_to_date');

			// Method 1 - Raw SQL
			// $custom_query = 'SELECT * FROM `branded_programs` WHERE date BETWEEN ? AND ? ORDER BY program_type, date;';
			// $query = $this->db->query($custom_query, [$alert_from_date, $alert_to_date]);

			// return $query->result_array();


			// Method 2 - Query Builder Class
			$this->db->select('*');
			$this->db->from('branded_programs');
			$this->db->where('date >=', $alert_from_date);
			$this->db->where('date <=', $alert_to_date);
			$this->db->order_by('program_type, date');

			return $this->db->get()->result_array();
		}
	}