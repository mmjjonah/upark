<?php
class Entree extends CI_Controller{
	public function __construct(){
		parent::__construct();
			$this->load->helper('url');
		}
		
	public function index(){
		$res = base_url()."assets/";
		$data["res"] = $res;
		$data["num"] = "second";
		$this->load->view('entree',$data);
	}

	public function Entree_header(){
		echo "<h1>Veuillez remplir ses champs</h1><span></span>";
	}
}