<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employees_model extends CI_Model {
				
	public function addNew($name,$phone,$role) {
		$added_by = $_SESSION['loggedIn'];
        if($this->db->query("insert into employees (name,phone,role,added_by)values ('$name','$phone','$role','$added_by')")) {
        	return true;
        }
        else {
        	return false;
        }
	}
	public function loadEmployeeDetails() {
		if($data = $this->db->query('select * from employees')) {
			return $data;
		}
		else{
			return false;
		}
	}
	public function removeEmployee($id) {
		if($this->db->query("delete from employees where id='$id'")) {
			return true;
		}
		else{
			return false;
		}
	}
	public function loadSpecificEmployeeDetails($id) {
		if($data = $this->db->query("select * from employees where id='$id'")->row()) {
			return $data;
		}
		else{
			return false;
		}
	}
	public function editEmpDetails($id,$name,$phone,$role) {
		$added_by = $_SESSION['loggedIn'];
		if($this->db->query("update employees set name='$name',phone='$phone',role='$role' where id='$id'")) {
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