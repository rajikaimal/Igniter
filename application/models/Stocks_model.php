<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stocks_model extends CI_Model {
				
	public function saveReadings($readings,$stocks,$orders,$testing) {
		$date = date("Y-m-d");
		$readings1 = $readings['petrol'];
		$stocks1  = $stocks['petrol'];
		$orders1 = $orders['petrol'];
		$testing1 = $testing['petrol'];
		$enteredBy = $_SESSION['loggedIn'];
		$this->db->query("insert into oil_stock_readings VALUES ('$date','petrol','$readings1','$stocks1','$testing1','$orders1',0,'unpaid','$enteredBy')");
		
		$date = date("Y-m-d");
		$readings2 = $readings['diesel'];
		$stocks2  = $stocks['diesel'];
		$orders2 = $orders['diesel'];
		$testing1 = $testing['diesel'];
		$enteredBy = $_SESSION['loggedIn'];
		$this->db->query("insert into oil_stock_readings VALUES ('$date','diesel','$readings2','$stocks2','$testing1','$orders2',0,'unpaid','$enteredBy')");	
	}
	public function loadHistoryPetrol() {
		$query = $this->db->query("select * from oil_stock_readings where oil='petrol' AND MONTH(`date`)=MONTH(NOW())");
		if($query) {
			return $query;
		}
		else {
			return false;
		}
	}
	public function loadLubricants() {
		$this->db->select('*');
        $this->db->from('lubricants');
        $query = $this->db->get();
		if($query) {
			return $query;
		}
		else {
			return false;
		}
	}
	public function newLubricantStocks($name) {
		if($query = $this->db->query("select * from lubricants where name='$name'")->row()) {
			return $query;
		}
		else {
			return false;
		}
	}
	public function updateLubricantStock($name,$amount,$supplier) {
		if($data = $this->db->query("update lubricants set amount='$amount' where name='$name' AND supplier='$supplier'")) {
			return true;
		}
		else {
			return false;
		}
	}
	public function loadHistoryDiesel() {
		$query = $this->db->query("select * from oil_stock_readings where oil='diesel' AND MONTH(`date`)=MONTH(NOW())");
		if($query) {
			return $query;
		}
		else {
			return false;
		}
	}	
	public function addLubricant($name,$amount,$supplier) {
		if($this->db->query("insert into lubricants VALUES ('$name','$amount','$supplier')")) {
			return true;
		}
		else {
			return false;
		}
	}
	public function removeLubricant($name) {
		if($this->db->query("delete from lubricants where name='$name'")) {
			return true;
		}
		else {
			return false;
		}	
	}
}

?>