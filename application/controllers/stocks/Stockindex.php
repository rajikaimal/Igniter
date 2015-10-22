<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stockindex extends CI_Controller {
	public function index() {	
		$this->load->view('header');
		$this->load->view('stocks/index');
		//$this->load->view('footer');
	}
}