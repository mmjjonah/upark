<?php
class Sorti extends CI_Controller{
	public function __construct(){
		parent::__construct();
			$this->load->helper('url');
			$this->load->model('client');
		}
		
	public function index(){
		$res = base_url()."assets/";
		$data["res"] = $res;
		$data["num"] = "third";
		$this->load->view('sorti',$data);
	}

	public function Sorti_header(){
		echo "<h1>avant de sortir</h1><span>Veuillez vous identifier</span>";
	}
}