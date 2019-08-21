<?php
class User extends CI_Model{
	public function __construct(){
		parent::__construct();
	}

	public function create($table,$value){
		$this->db->insert($table,$value);
		redirect("connexion");
	}
}