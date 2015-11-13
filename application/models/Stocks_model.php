<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stocks_model extends CI_Model {
				
	public function saveReadings($readings,$stocks,$orders) {
		$date = date("Y-m-d");
		$readings1 = $readings['petrol'];
		$stocks1  = $stocks['petrol'];
		$orders1 = $orders['petrol'];
		$enteredBy = $_SESSION['loggedIn'];
		$this->db->query("insert into oil_stock_readings VALUES ('$date','petrol','$readings1','$stocks1','$orders1','$enteredBy')");
		
		$date = date("Y-m-d");
		$readings2 = $readings['diesel'];
		$stocks2  = $stocks['diesel'];
		$orders2 = $orders['diesel'];
		$enteredBy = $_SESSION['loggedIn'];
		$this->db->query("insert into oil_stock_readings VALUES ('$date','diesel','$readings2','$stocks2','$orders2','$enteredBy')");	
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