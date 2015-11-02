<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {
				
	public function signIn($email,$password) {
		$this->db->select('email');
        $this->db->from('users');
        $this->db->where('email', $email);
        $this->db->where('password', $password);
        $query = $this->db->get();
		
		if($query-> num_rows() == 1){
			return $query;
		}
		else {
			return false;
		}
	}
}

?>