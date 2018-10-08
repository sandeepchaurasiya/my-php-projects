
<?php

	class Teams_model extends CI_Model {

		function __construct() {
			parent::__construct();
		}
		function getPlayers()
        {
			$query = $this->db->query('SELECT id, name FROM players');
			return $query->result();

        }
	}
			