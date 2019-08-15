<?php
class Home extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}

	public function index(){
		$res = base_url()."assets/";
		$data["res"] = $res;
		$data["num"] = "first";
		$this->load->view('header',$data);
		$this->load->view('home',$data);
		$this->load->view('footer',$data);
	}

	public function Home_body(){
		$res = base_url()."assets/";
		$data["res"] = $res;
		$this->load->view('home',$data);
	}

	public function Home_header(){
		echo "<h1>U-PARK</h1><span>Bienvenue chez nous</span>";
	}
}