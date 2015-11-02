<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
	public function __construct(){
		parent::__construct();
	}
	public function index() {	
		$this->load->view('register/index');
	}
	public function add() {
		$firstname = $this->input->post('firstname');
		$lastname = $this->input->post('lastname');
		$email = $this->input->post('email');
		$organization = $this->input->post('organization');
		$phone = $this->input->post('phone');
		$password = $this->input->post('password');

		$this->load->model('register_model');
		if($this->register_model->addEntry($firstname,$lastname,$email,$organization,$phone,$password)) {
			redirect('login','refresh');	
		}
		else{
			//$this->load->view('')
		}
	}
}