<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stocks extends CI_Controller {
	public function __construct(){
		parent::__construct();
	}
	public function index() {	
		$this->load->view('header');
		$this->load->view('stocks/index');
		$this->load->view('footer');
		//$this->load->view('footer');
	}
}