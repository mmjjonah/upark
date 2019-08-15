<?php
class Connexion extends CI_Controller{
	public function __contruct(){
		parent::__contruct();
		$this->load->helper('url');
	}

	public function index(){
		$res = base_url()."assets/";
		$data["res"] = $res;
		$this->load->view('connexion',$data);
	}

	public function User_form_log(){
		$this->load->view("connexion/user_form_log");
	}

	public function Prop_form_log(){
		$this->load->view("connexion/prop_form_log");
	}

}