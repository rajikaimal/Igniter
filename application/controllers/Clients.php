<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clients extends CI_Controller {
	public function __construct(){
		parent::__construct();
	}
	public function index() {	
		if(!isset($_SESSION['loggedIn'])){
            redirect('login','refresh');    
        }
		$this->load->view('header');
		$this->load->view('clients/row');
		$this->load->view('clients/add');
		$this->load->view('footer');
	}
	public function add() {
		if(!isset($_SESSION['loggedIn'])){
            redirect('login','refresh');    
        }
		$this->load->view('header');
		$this->load->view('clients/row');
		$this->load->view('clients/add');
		$this->load->view('footer');	
	}
	public function addNew() {
		$name = $_POST['name'];
		$phone = $_POST['phone'];
		$organization = $_POST['organization'];

		$this->load->model('clients_model');
		if($q = $this->clients_model->addNew($name,$phone,$organization)) {
			self::view();
		}
	}
	public function view() {
		$this->load->model('clients_model');
		if($q = $this->clients_model->loadClientData()) {
			$data['q'] = $q;

			$this->load->view('header');
			$this->load->view('clients/row');
			$this->load->view('clients/clients',$data);
			$this->load->view('footer');
		}
	}
	public function remove() {
		$name = $_GET['name'];
		$phone = $_GET['phone'];
		$this->load->model('clients_model');
		if($this->clients_model->remove($name,$phone)) {
			self::view();
		}

	}
}