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
        self::dailySale();
		// $this->load->view('header');
		// $this->load->view('income/row');
		// $this->load->view('income/fuel');
		// $this->load->view('footer');
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
	public function lubricantSale() {
		$this->load->view('header');
		$this->load->view('income/row');
		$this->load->view('income/lubricantSale');
		$this->load->view('footer');	
	}
	public function updateRates() {
		$petrol = $_POST['petrol'];
		$diesel = $_POST['diesel'];

		$this->load->model('income_model');
		if($q = $this->income_model->updateRates($petrol,$diesel)) {
			self::rates();
		}
	}

}