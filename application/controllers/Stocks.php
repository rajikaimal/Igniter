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
}