<?php
class Sorti extends CI_Controller{
	public function __construct(){
		parent::__construct();
			$this->load->helper('url');
		}
		
	public function index(){
		$res = base_url()."assets/";
		$data["root"] = base_url();
		$data["res"] = $res;
		$data["head"] = "<h1>avant de sortir</h1><span>Veuillez vous identifier</span>";
		$data["num"] = "third";
		$this->load->view("header",$data);
		$this->load->view('sorti',$data);
		$this->load->view("footer",$data);
	}
}