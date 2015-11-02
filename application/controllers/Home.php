<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct(){
		// if(!isset($_SESSION['loggedIn'])){
  //           //redirect('login','refresh');
  //       }
		parent::__construct();
	}
	public function index() {	
		if(!isset($_SESSION['loggedIn'])){
            redirect('login','refresh');    
        }
		$this->load->view('header');
		$this->load->view('igniter');
		$this->load->view('footer');
		//$this->load->view('footer');
	}
}