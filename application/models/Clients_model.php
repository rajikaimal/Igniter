<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clients_model extends CI_Model {
				
	public function addNew($name,$phone,$organization) {
        if($this->db->query("insert into clients values ('$name','$phone','$organization')")) {
        	return true;
        }
        else {
        	return false;
        }
	}
	public function loadClientData() {
		if($data = $this->db->query('select * from clients')) {
			return $data;
		}
		else{
			return false;
		}
	}
	public function remove($name,$phone) {
		if($this->db->query("delete from clients where name='$name' AND phone='$phone'")) {
			return true;
		}
		else{
			return false;
		}	
	}
}

?>