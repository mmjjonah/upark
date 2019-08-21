<?php
class Connexion extends CI_Controller{
	public function __contruct(){
		parent::__contruct();
		$this->load->helper('url');
		$this->load->model('User','user');
	}

	public function index(){
		$res = base_url()."assets/";
		$data["root"] = base_url();
		$data["head"] = "<h1>Inscription</h1>";
		$data["res"] = $res;
		$data["num"] = "fourth";
		$this->load->view("header",$data);
		$this->load->view('connexion',$data);
		$this->load->view("footer",$data);
	}

	public function User_form_log(){
		$this->load->view("connexion/user_form_log");
	}

	public function Prop_form_log(){
		$this->load->view("connexion/prop_form_log");
	}

	public function create_user(){
		$name_user = $this->input->post("name_user");
		$firstname_user = $this->input->post("firstname_user");
		$email_user = $this->input->post("email_user");
		$num_car = $this->input->post("num_car");
		$description = $this->input->post("description");
		$password_user = $this->input->post("password_user");

		$value = array(
			"name_user" => $name_user,
			"firstname_user" => $firstname_user,
			"email_user" => $email_user,
			"num_car" => $num_car,
			"description" => $description,
			"password_user" => $password_user
		);

		$this->User->create("user",$value);
	}

}