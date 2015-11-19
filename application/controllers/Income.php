<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Income extends CI_Controller {
	public function __construct(){
		parent::__construct();
	}
	public function index() {	
		if(!isset($_SESSION['loggedIn'])){
            redirect('login','refresh');    
        }
		$this->load->view('header');
		$this->load->view('income/row');
		$this->load->view('income/fuel');
		$this->load->view('footer');
	}
	public function dailySale() {
		$this->load->view('header');
		$this->load->view('income/row');
		$this->load->view('income/dailySale');
		$this->load->view('footer');	
	}
	public function addDailySales() {
		$petrol = $_POST['petrol'];
		$diesel = $_POST['diesel'];

		$this->load->model('income_model');
		$q = $this->income_model->addDailySales($petrol,$diesel);
		self::index();
	}
	public function viewDailySale() {
		$this->load->model('income_model');
		$dataPetrol = $this->income_model->viewDailySalePetrol();
		$dataDiesel = $this->income_model->viewDailySaleDiesel();

		$data['dataPetrol'] = $dataPetrol;
		$data['dataDiesel'] = $dataDiesel;

		$petrolRate = $this->income_model->getPetrolRate();
		$dieselRate = $this->income_model->getDieselRate();


		$petrolRate = ($petrolRate->{"petrol"});
		$dieselRate = ($dieselRate->{"diesel"});

		$data['petrolRate'] = $petrolRate;
		$data['dieselRate'] = $dieselRate;

		$this->load->view('header');
		$this->load->view('income/row');
		$this->load->view('income/viewDailySale',$data);
		$this->load->view('footer');
	}
	public function rates() {
		$this->load->model('income_model');
		if($q = $this->income_model->loadRates()) {
			$data['q'] = $q;

			$this->load->view('header');
			$this->load->view('income/row');
			$this->load->view('income/rates',$data);
			$this->load->view('footer');
		}
	}
	public function payments() {
		$this->load->model('income_model');
		if($q = $this->income_model->loadClientList()) {
			$data['q'] = $q;

			$this->load->view('header');
			$this->load->view('income/row');
			$this->load->view('income/payments',$data);
			$this->load->view('footer');
		}
	}
	public function updateRates() {
		$petrol = $_POST['petrol'];
		$diesel = $_POST['diesel'];

		$this->load->model('income_model');
		if($q = $this->income_model->updateRates($petrol,$diesel)) {
			self::rates();
		}
	}
	public function addPayment() {
		$name = $_POST['name'];
		$amount = $_POST['amount'];
		$date = $_POST['date'];

		$this->load->model('income_model');
		if($q = $this->income_model->addPayment($name,$amount,$date)) {
			self::unpaidLoans();
		}		
	}
	public function unpaidLoans() {
		$this->load->model('income_model');
		if($q = $this->income_model->unpaidLoans()) {
			$data['q'] = $q;

			$this->load->view('header');
			$this->load->view('income/row');
			$this->load->view('income/unpaid',$data);
			$this->load->view('footer');
		}	
	}
	public function updateStatus() {
		$id = $_GET['id'];
		$this->load->model('income_model');
		if($this->income_model->updateStatus($id)) {
			redirect('income/summary','refresh');    
		}
	}
	public function updateStatusPay() {
		$name = $_GET['name'];

		$this->load->model('income_model');
		if($this->income_model->updateStatusPay($name)) {
			redirect('income/summary','refresh');    
		}

	}
	public function removeLoan() {
		$id = $_GET['id'];
		$this->load->model('income_model');
		if($this->income_model->removeLoan($id)) {
			redirect('income/unpaidLoans','refresh');    
		}	
	}
	public function summary() {
		$this->load->model('income_model');
		if($q = $this->income_model->summary()) {
			$data['q'] = $q;

			$this->load->view('header');
			$this->load->view('income/row');
			$this->load->view('income/summary',$data);
			$this->load->view('footer');
		}	
	}
}