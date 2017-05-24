<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class admin_mdl extends CI_Model {
      private $table = "admin";
        public function __construct(){
        parent::__construct();
         $this->load->database();
    }
    function login($login, $password)
	{
		$this -> db -> select('id, login, password');
		$this -> db -> from($this->table);
		$this -> db -> where('login = ' . $login ); 
		$this -> db -> where('password = ' . $password ); 
		//$this -> db -> limit(1);

		$query = $this -> db -> get();

		if($query -> num_rows() == 1)
		{
			return $query->result();
		}
		else
		{
			return false;
		}

	}

	public function check_id($login,$password){
		$this->db->where('login',$login);
		$this->db->where('password',$password);
		$q = $this->db->get($this->table);
		if($q->num_rows()>0){
		return true;
	}
}
}