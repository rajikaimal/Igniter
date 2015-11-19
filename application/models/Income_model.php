<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Income_model extends CI_Model {
				
	public function addDailySales($petrol,$diesel) {
		$date = Date('Y-m-d');
		$added_by = $_SESSION['loggedIn'];
        $this->db->query("insert into daily_fuel_sales (type,sales,date,added_by)values ('petrol','$petrol','$date','$added_by')");

        $this->db->query("insert into daily_fuel_sales (type,sales,date,added_by)values ('diesel','$diesel','$date','$added_by')");

	}
	public function viewDailySalePetrol() {
		if($data = $this->db->query("select * from daily_fuel_sales where MONTH(`date`)=MONTH(NOW()) AND type='petrol'")) {
			return $data;
		}
		else{
			return false;
		}
	}
	public function viewDailySaleDiesel() {
		if($data = $this->db->query("select * from daily_fuel_sales where MONTH(`date`)=MONTH(NOW()) AND type='diesel'")) {
			return $data;
		}
		else{
			return false;
		}
	}
	public function updateRates($petrol,$diesel) {
		if($this->db->query("update rates set petrol='$petrol',diesel='$diesel'")) {
			return true;
		}
		else{
			return false;
		}
	}
	public function loadRates() {
		if($data = $this->db->query("select * from rates")->row()) {
			return $data;
		}
		else{
			return false;
		}
	}
	public function getPetrolRate() {
		if($data = $this->db->query("select petrol from rates")->row()) {
			return $data;
		}
		else{
			return false;
		}
	}
	public function getDieselRate() {
		if($data = $this->db->query("select diesel from rates")->row()) {
			return $data;
		}
		else{
			return false;
		}
	}
}

?>