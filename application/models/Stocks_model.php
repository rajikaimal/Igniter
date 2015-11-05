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
		$this->db->select('*');
        $this->db->from('oil_stock_readings');
        $this->db->where('oil','petrol');
        $query = $this->db->get();
		if($query) {
			return $query;
		}
		else {
			return false;
		}
	}
	public function loadHistoryDiesel() {
		$this->db->select('*');
        $this->db->from('oil_stock_readings');
        $this->db->where('oil','diesel');
        $query = $this->db->get();
		if($query) {
			return $query;
		}
		else {
			return false;
		}
	}	
}

?>