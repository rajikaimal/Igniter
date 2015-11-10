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
	public function loadClientList() {
		if($data = $this->db->query("select * from clients")) {
			return $data;
		}
		else{
			return false;
		}
	}
	public function addPayment($name,$amount,$date) {
		$added_by = $_SESSION['loggedIn'];
		if($this->db->query("insert into client_loans (name,amount,date,added_by,status) values ('$name','$amount','$date','$added_by','unpaid')")) {
			return true;
		}
		else{
			return false;
		}
	}
	public function unpaidLoans() {
		if($data = $this->db->query("select * from client_loans where status='unpaid'")) {
			return $data;
		}
		else{
			return false;
		}
	}
	public function updateStatus($id) {
		if($this->db->query("update client_loans set status='paid' where id='$id'")) {
			return true;
		}
		else{
			return false;
		}
	}
	public function updateStatusPay($name) {
		if($this->db->query("update client_loans set status='paid' where name='$name' AND MONTH(`Date`)=MONTH(NOW())")) {
			return true;
		}
		else{
			return false;
		}	
	}
	public function removeLoan($id) {
		if($this->db->query("delete from client_loans where id='$id'")) {
			return true;
		}
		else{
			return false;
		}	
	}
	public function summary() {
		if($data = $this->db->query("select id,name,date,(SUM(amount)) as amount,status from client_loans where MONTH(`Date`)=MONTH(NOW()) 
			and YEAR(`Date`)=YEAR(NOW()) group by name")) {
			return $data;
		}
		else{
			return false;
		}	
	}
}

?>