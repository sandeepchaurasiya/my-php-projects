<?php

class Welcome_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	function getTeams()
	{
		$query=$this->db->query('SELECT id, tname, lifetime_score FROM teams');
		return $query->result();
	}
	
}


?>