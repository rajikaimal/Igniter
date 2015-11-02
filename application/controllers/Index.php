<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {
	public function __construct(){
		parent::__construct();
	}
	public function index() {	
		if(isset($_SESSION['loggedIn'])){
            redirect('home','refresh');    
        }
        else {
        	$this->load->view('Index/welcome');
        }
	}
}