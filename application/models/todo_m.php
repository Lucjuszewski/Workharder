<?php

class Todo_m extends CI_Model {
	public function Sanitize($string) {
		$string2 = xss_clean($string);
		$string3 = sanitize_filename($string2);
		if($string3==$string) {
			return true;
		} else {
			return false;
		}
	}
	public function SaveInDB($string) {
		$this->load->database();
		if($this->db->query("INSERT INTO todo(field) VALUES('$string')")) {
			return true;
		} else {
			return false;
		}

	}
	public function LoadFromDB() {
		$this->load->database();
		$query = $this->db->query("SELECT * FROM todo");
		return $query;
	}
	public function DeleteFromDB($string) {
		$this->load->database();
		if($this->db->query("DELETE  FROM todo
WHERE id='$string'")) {
			return true;
		} else {
			return false;
		}
		
		
	}
}