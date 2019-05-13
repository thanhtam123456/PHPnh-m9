<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class sachController extends CI_Controller {


// trang chu
	public function index() {
		$this->load->view("web/index");
	}

	public function signup() {
 		$this->load->view("web/signup");
	}

	public function login() {
 		$this->load->view("web/login");
	}

// signup 

	public function form_validation() {
		$this->load->library('form_validation');
		$this->form_validation->set_rules("email", "Email" ,"required");
		$this->form_validation->set_rules("username", "Username" ,"required");
		$this->form_validation->set_rules("address", "Address" ,"required");
		$this->form_validation->set_rules("phone", "Phone" ,"required");
		$this->form_validation->set_rules("password", "Password" ,"required");

		if ($this->load->model("sachModel")) {
			$data = array(
			"email"=>$this->input->post("email"),
			"full_name"=>$this->input->post("full_name"),
			"address"=>$this->input->post("address"),
			"phone"=>$this->input->post("phone"),
			"email"=>$this->input->post("password")
		);
			$this->sachModel->insert_user($data);
			redirect(base_url()."sachController/inserted");
		}else{
			$this->signup();
		}
	}

	public function inserted() {
		$this->signup();
	}

// admin
	public function admin() {
		$this->load->view("admin/index");
	}

	public function user() {
		$this->load->view("admin/user");
	}

	

	public function product() {
		$this->load->model("sachModel");
		$data = $this->sachModel->getAllBook();
		$this->load->view("admin/product",['product'=>$data]);
	}


	public function adduser() {
		$this->load->view("admin/adduser");
	}
	public function addProduct(){
		$this->load->view('admin/addproduct',['header'=>'admin/templates/header','footer'=>'admin/templates/footer']);
	}

	
}
