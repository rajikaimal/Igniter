<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Expense extends CI_Controller {
	public function __construct(){
		parent::__construct();
	}
	public function index() {	
		if(!isset($_SESSION['loggedIn'])){
            redirect('login','refresh');    
        }
        self::fuelOrders();
	}
	public function fuelOrders() {
		$this->load->view('header');
		$this->load->view('expense/row');
		$this->load->view('expense/fuelOrders');
		$this->load->view('footer');	
	}
	public function addFuelOrderPayment() {
		$fuel = $_POST['fuel'];
		$date = $_POST['date'];

		$this->load->model('expense_model');

		$this->load->model('income_model');
		if($data = $this->expense_model->findOrder($fuel,$date)) {
			

			$petrolRate = $this->income_model->getPetrolRate();
			$dieselRate = $this->income_model->getDieselRate();

			$data['petrolRate'] = $petrolRate;
			$data['dieselRate'] = $dieselRate;

			$this->load->view('header');
			$this->load->view('expense/row');
			$this->load->view('expense/addfuelOrders',$data);
			$this->load->view('footer');		
		}
		else {
			$data = $this->expense_model->findPaidOrder($fuel,$date);

			$petrolRate = $this->income_model->getPetrolRate();
			$dieselRate = $this->income_model->getDieselRate();

			$data['petrolRate'] = $petrolRate;
			$data['dieselRate'] = $dieselRate;

			$this->load->view('header');
			$this->load->view('expense/row');
			$this->load->view('expense/paid',$data);
			$this->load->view('footer');	
		}

//		$this->expense_model->addFuelOrderPayment($fuel);
	}
	public function addFuelPayment() {
		$this->load->model('expense_model');
		$date = $_GET['date'];
		$oil = $_GET['oil'];
		$payment = $_GET['payment'];

		if($this->expense_model->addFuelPayment($date,$oil,$payment)) {
			self::index();
		}
		else{
			self::index();
		}
	}
	// public function addDailySales() {
	// 	$petrol = $_POST['petrol'];
	// 	$diesel = $_POST['diesel'];

	// 	$this->load->model('Expense_model');
	// 	$q = $this->Expense_model->addDailySales($petrol,$diesel);
	// 	self::index();
	// }
}