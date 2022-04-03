<?php
	class New_Program extends CI_Model {
		public function __construct(){
			$this->load->database();
		}

		public function get_new_program(){
			$query = $this->db->get('new_program');
			return $query->result_array();
		}
	}