<?php
class entree extends CI_Controller{
	public function __construct(){
		parent::__construct();
			$this->load->helper('url');
			$this->load->model('client');
		}
		
	public function index(){
		$res = base_url()."assets/";
		$data["res"] = $res;
		$data["title"] = "Veuillez remplir ses champs";
		$data["coms"] = "";
		$data["num"] = "second";
		$this->load->view('header',$data);
		$this->load->view('entree',$data);
		$this->load->view('footer',$data);
	}
	

}