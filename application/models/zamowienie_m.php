<?php 
Class Zamowienie_m extends CI_Model {
	public function ValidateArguments($imie,$nazwisko,$partia) {
		if(preg_match('@^[A-Z][a-zóąśłżźćńÓĄŚŁŻŹĆŃ]+$@',$imie)) {
			if(preg_match('@^[A-Z][a-zóąśłżźćńÓĄŚŁŻŹĆŃ]+$@',$nazwisko)) {
			if(preg_match('@^[A-Za-z]+$@',$partia)) {
			return [
				'imie' => $imie,
				'nazwisko' => $nazwisko,
				'partia' => $partia
			];
		} else {
			return $x = "Błąd w partii";
		}
		} else {
			return $x = "Błąd w nazwisku";
		}
		} else {
			return $x= "Błąd w imieniu";
		}
	}
	public function SaveInDB($imie,$nazwisko,$partia) {
		$this->load->database();
		if($this->db->query("INSERT INTO CelaPlus(imie,nazwisko,partia) VALUES('$imie','$nazwisko','$partia')")) {
			return true;
		} else {
			return false;
		}

	}
	public function LoadFromDB() {
		$this->load->database();
		$query = $this->db->query("SELECT imie,nazwisko,partia FROM CelaPlus");
		return $query;
	}
}



