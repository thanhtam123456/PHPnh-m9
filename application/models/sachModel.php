<?php

class sachModel extends CI_Model{

// public function getAllBook() {
// 		return $this->db->get('book')->result_array();
		
// 	}

	// public function getAllUser() {
	// 	return $this->db->get('users')->result_array();
	// }

	function insert_user($data) {
		$this->db->insert("users",$data);
		
	}


}
