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
	public function setAttendancePresent($name) {
		$date = Date('Y-m-d');
		if($data = $this->db->query("insert into attendance (name,attendance,date) VALUES ('$name','present','$date')")) {
			return true;
		}
		else{
			return false;
		}
	}
	public function setAttendanceAbsent($name) {
		$date = Date('Y-m-d');
		if($data = $this->db->query("insert into attendance (name,attendance,date) VALUES ('$name','absent','$date')")) {
			return true;
		}
		else{
			return false;
		}
	}
	public function loadAttendance() {
		$date = Date('Y-m-d');
		if($data = $this->db->query("select * from attendance where date='$date'")) {
			return $data;
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