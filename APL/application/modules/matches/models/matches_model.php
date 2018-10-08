
<?php

	class Matches_model extends CI_Model {

		function __construct() {
			parent::__construct();
		}
		function getSeason()
        {
			$query = $this->db->query('SELECT s_id, season FROM season');
			return $query->result();
        }
        function getTeam()
        {
			$query = $this->db->query('SELECT id, tname FROM teams');
			return $query->result();
        }
	}
			