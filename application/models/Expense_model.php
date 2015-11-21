<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Expense_model extends CI_Model {
				
	public function findOrder($fuel,$date) {
		if($data = $this->db->query("select * from oil_stock_readings where oil='$fuel' AND date='$date' AND status='unpaid'")->row_array()) {
			return $data;
		}
		else {
			return null;
		}
	}
	public function findPaidOrder($fuel,$date) {
		if($data = $this->db->query("select * from oil_stock_readings where oil='$fuel' AND date='$date' AND status='paid'")->row_array()) {
			return $data;
		}
		else {
			return null;
		}	
	}
	public function addFuelPayment($date,$oil,$payment) {
		if($this->db->query("update oil_stock_readings set paid_amount='$payment',status='paid' where date='$date' AND oil='$oil'")) {
			return true;
		}
		else { 
			return false;
		}
	}
}

?>