<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stocks extends CI_Controller {
	public function __construct(){
		parent::__construct();
	}
	public function index() {	
		if(!isset($_SESSION['loggedIn'])){
            redirect('login','refresh');    
        }
		$this->load->view('header');
		$this->load->view('stocks/row');
    $this->load->view('stocks/index');
		$this->load->view('footer');
		//$this->load->view('footer');
	}
	public function readings() {
        $petrol = $_POST['petrol'];
    	$diesel = $_POST['diesel'];

    	$readings['realReadingPetrol'] = 150;
    	$readings['realReadingDiesel'] = 250;
    	$readings['petrolStock'] = 100;
    	$readings['dieselStock'] = 200;

    	$this->load->view('header');    
    	$this->load->view('stocks/readings',$readings);    
    	$this->load->view('footer'); 
    }
    public function saveReadings(){
    	$this->load->model('stocks_model');
  		
  		$readings['petrol'] = $_POST['readingPetrol'];
  		$readings['diesel'] = $_POST['readingDiesel'];

  		$stocks['petrol'] = $_POST['stocKPetrol'];
  		$stocks['diesel'] = $_POST['stockDiesel'];

  		$orders['petrol'] = $_POST['petrolOrder'];
  		$orders['diesel'] = $_POST['dieselOrder'];

      $testing['petrol'] = $_POST['testingPetrol'];
      $testing['diesel'] = $_POST['testingDiesel'];
 
   		$this->stocks_model->saveReadings($readings,$stocks,$orders,$testing);

  		redirect('stocks/history','refresh');
    }
    public function history() {
    	$this->load->model('stocks_model');
    	$dataPetrol = $this->stocks_model->loadHistoryPetrol();
    	$dataDiesel = $this->stocks_model->loadHistoryDiesel();
    	$q['dataPetrol'] = $dataPetrol;
    	$q['dataDiesel'] = $dataDiesel;
    	$this->load->view('header');
   		$this->load->view('stocks/history',$q);
    	$this->load->view('footer');
    }
    public function viewLubricants() {
      $this->load->model('stocks_model');
      $q = $this->stocks_model->loadLubricants();
      $data['q'] = $q;
      $this->load->view('header');
      $this->load->view('stocks/row');
      $this->load->view('stocks/viewlubricants',$data);
      $this->load->view('footer');
    }
    public function newLubricantStocks() {

    }
    public function lubricants() {
      $this->load->view('header');
      $this->load->view('stocks/row');
      $this->load->view('stocks/lubricants');
      $this->load->view('footer'); 
    }
    public function addLubricant() {
      $name = $_POST['name'];
      $amount = $_POST['amount'];
      $supplier = $_POST['supplier'];

      $this->load->model('stocks_model');
      if($this->stocks_model->addLubricant($name,$amount,$supplier)) {
        self::viewLubricants();
      }
    }
    public function removeLubricant() {
      $name = $_GET['name'];
      $this->load->model('stocks_model');
      if($this->stocks_model->removeLubricant($name)) {
        self::viewLubricants();  
      } 
    }
}