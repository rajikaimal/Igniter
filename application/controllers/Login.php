<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct() {
        parent::__construct();
    }
    public function index() {

		$this->load->helper(array('form', 'url'));
	
		$this->load->library('form_validation');

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required',
                array('required' => 'You must provide a %s.')
        );

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('login/header');
			$this->load->view('login/login');
        }
        else
        {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $this->load->model('login_model');
            if($q = ($this->login_model->signIn($username,$password)) != NULL){
                $_SESSION['loggedIn'] = $q;
                var_dump($_SESSION['loggedIn']);
                //redirect('igniter','refresh');
            }
            else{
                redirect('login','refresh');
            }
        }
	}
}