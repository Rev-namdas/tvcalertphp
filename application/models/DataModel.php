<?php
	class DataModel extends CI_Model {
		public $where_clause;
		
		public function __construct(){
			$this->load->database();
		}

		public function get_new_ad(){
			// $custom_query = 'SELECT product_type, GROUP_CONCAT(company_name SEPARATOR ", ") AS company_names FROM `new_ad` GROUP BY product_type;';
			$custom_query = 'SELECT product_type, GROUP_CONCAT(company_name, ":", ad_name, " ", ad_duration, " ", date, "| ", fa_media, "| ", ad_link, "| ", media_list SEPARATOR "; ") AS details FROM `new_ad` GROUP BY product_type;';
			$query = $this->db->query($custom_query);

			return $query->result_array();
		}

		public function get_new_adname(){
			$custom_query = 'SELECT REPLACE(company_name, " ", "_") as company_name, GROUP_CONCAT(ad_name, " ", ad_duration, " ", date, "| ", fa_media, "| ", ad_link, "| ", media_list SEPARATOR "; ") as details FROM `new_ad` WHERE company_name=$where_clause GROUP BY company_name;';
			$query = $this->db->query($custom_query);

			return $query->result_array();
		}

		public function get_new_program(){
			$custom_query = 'SELECT program_type, GROUP_CONCAT(program_name, "_", fa_media, ", ", launching_time SEPARATOR "; ") AS details FROM `new_program` GROUP BY program_type;';
			$query = $this->db->query($custom_query);

			return $query->result_array();
		}

		public function get_branded_program(){
			$custom_query = 'SELECT program_type, GROUP_CONCAT(program_name, "_", fa_media, "_", date, ", ", sponsoredby SEPARATOR "; ") AS details FROM `branded_program` GROUP BY program_type;';
			$query = $this->db->query($custom_query);

			return $query->result_array();
		}
	}