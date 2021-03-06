<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct() {
        parent::__construct();
    }
    public function index() {
        if(isset($_SESSION['loggedIn'])){
            redirect('home','refresh');    
        }

		$this->load->helper(array('form', 'url'));
	
		$this->load->library('form_validation');

        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required',
                array('required' => 'You must provide a %s.')
        );

        if ($this->form_validation->run() == FALSE)
        {
			$this->load->view('login/login');
        }
        else
        {
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $this->load->model('login_model');
            if($q = ($this->login_model->signIn($email,$password)) != false){
                $_SESSION['loggedIn'] = $email;
                redirect('home','refresh');
            }
            else{
                $err['title'] = "Please check your credentials";
                $this->load->view('login/login',$err);
            }
        }
	}
}