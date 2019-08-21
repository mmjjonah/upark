<?php
class Entree extends CI_Controller{
	public function __construct(){
		parent::__construct();
			$this->load->helper('url');
		}
		
	public function index(){
		$res = base_url()."assets/";
		$data["root"] = base_url();
		$data["res"] = $res;
		$data["head"] = "<h1>Veuillez remplir ses champs</h1><span></span>";
		$data["num"] = "second";
		$this->load->view('header',$data);
		$this->load->view('entree',$data);
		$this->load->view('footer',$data);
	}

}