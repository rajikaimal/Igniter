<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register_model extends CI_Model {
				
	public function addEntry($firstname,$lastname,$email,$organization,$phone,$password) {
		$password = md5($password);
        if($query = $this->db->query("insert into accounts VALUES ('$firstname','$lastname','$email','$organization','$phone','$password')")) {
        	return true;
        }
        else{
        	return false;
        }
	}
}

?>