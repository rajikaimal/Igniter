<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Igniter extends CI_Controller {
	public function index() {	
		$this->load->view('header');
		$this->load->view('igniter');
		//$this->load->view('footer');
	}
}