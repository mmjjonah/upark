<?php
class Home extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}

	public function index(){
		$res = base_url()."assets/";
		$data["res"] = $res;
		$data["title"] = "U-PARK";
		$data["coms"] = "Bienvenue chez nous";
		$data["num"] = "first";
		$this->load->view('header',$data);
		$this->load->view('home',$data);
		$this->load->view('footer',$data);
	}
}