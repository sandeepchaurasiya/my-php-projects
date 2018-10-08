
<?php

	class Players_model extends CI_Model {

		function __construct() {
			parent::__construct();
		}
		function getTeam()
		{
			$query = $this->db->query('SELECT id, tname FROM teams');
			return $query->result();
		}
		
	}
			