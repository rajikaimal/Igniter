<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employees extends CI_Controller {
	public function __construct(){
		parent::__construct();
	}
	public function index() {	
		if(!isset($_SESSION['loggedIn'])){
            redirect('login','refresh');    
        }
        $this->load->model('employees_model');
        if($q = $this->employees_model->loadEmployeeDetails()) {
        	$data['q'] = $q;

        	$this->load->view('header');
			$this->load->view('Employees/row');
			$this->load->view('Employees/view',$data);
			$this->load->view('footer');
        }
	}
	public function add() {
		$this->load->view('header');
		$this->load->view('Employees/row');
		$this->load->view('Employees/add');
		$this->load->view('footer');
	}
	public function addNew() {
		$name = $_POST['name'];
		$phone = $_POST['phone'];
		$role = $_POST['role'];

		$this->load->model('employees_model');
		if($q = $this->employees_model->addNew($name,$phone,$role)) {
			self::index();
		}
	}
	public function removeEmployee() {
		$id = $_GET['id'];

		$this->load->model('employees_model');
		if($q = $this->employees_model->removeEmployee($id)) {
			self::index();
		}	
	}
	public function editEmployee() {
		$id = $_GET['id'];

		$this->load->model('employees_model');
        if($q = $this->employees_model->loadSpecificEmployeeDetails($id)) {
        	$data['q'] = $q;

        	$this->load->view('header');
			$this->load->view('Employees/row');
			$this->load->view('Employees/edit',$data);
			$this->load->view('footer');
        }
	}
	public function editEmpDetails() {
		$id = $_POST['id'];
		$name = $_POST['name'];
		$phone = $_POST['phone'];
		$role = $_POST['role'];

		$this->load->model('employees_model');
        if($q = $this->employees_model->editEmpDetails($id,$name,$phone,$role)) {
        	$data['q'] = $q;
        	self::index();
        }
	}
	public function attendance() {
		$this->load->model('employees_model');
        if($q = $this->employees_model->loadEmployeeDetails()) {
        	$data['q'] = $q;
        	
        	$this->load->view('header');
			$this->load->view('Employees/row');
			$this->load->view('Employees/attendance',$data);
			$this->load->view('footer');
        }
	}
	public function setAttendancePresent() {
		$name = $_GET['name'];

		$this->load->model('employees_model');
		if($q = $this->employees_model->setAttendancePresent($name)) {
			self::index();
		}
	}
	public function setAttendanceAbsent() {
		$name = $_GET['name'];

		$this->load->model('employees_model');
		if($q = $this->employees_model->setAttendanceAbsent($name)) {
			self::index();
		}
	}
}