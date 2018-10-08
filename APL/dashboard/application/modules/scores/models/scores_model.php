
<?php

class Scores_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function getTeam() {
        $sql_select = "select id,tname from teams order by tname";
        $query = $this->db->query($sql_select);
        return $query->result();
    }

    function getPlayer($team_id = '', $match_date) {
//        $match_date = date('Y-m-d');

        $sql_select = "SELECT * FROM (
				SELECT pl.id, pl.name, tm.id AS tid, tm.tname, mt.id AS `mid`, mt.match_date, sc.score,sc.id as sid FROM 
				players AS pl
JOIN teams AS tm ON tm.id = pl.team_id
JOIN matches AS mt ON mt.team_a_id = tm.id 
LEFT OUTER JOIN scores AS sc ON sc.player_id = pl.id and sc.date = '" . $match_date . "' 
WHERE mt.match_date = '" . $match_date . "' AND tm.id = " . $team_id . "
UNION
SELECT pl.id, pl.name, tm.id AS tid, tm.tname, mt.id AS `mid`, mt.match_date, sc.score,sc.id as sid FROM 
players AS pl
JOIN teams AS tm ON tm.id = pl.team_id
JOIN matches AS mt ON mt.team_b_id = tm.id 
LEFT OUTER JOIN scores AS sc ON sc.player_id = pl.id and sc.date = '" . $match_date . "' 
WHERE mt.match_date = '" . $match_date . "'AND tm.id = " . $team_id . "
) AS tt
ORDER BY match_date DESC, tname, NAME";

        $query = $this->db->query($sql_select);

        return $query->result();
    }

    function getScores() {
        $query = $this->db->query("SELECT sc.*,pl.name,tm.tname, mt.id AS `mid` FROM scores sc
LEFT JOIN players pl ON pl.id = sc.player_id
LEFT JOIN teams tm ON tm.id = sc.team_id 
LEFT JOIN `matches` mt ON mt.id = sc.match_id");

        return $query;
    }

}
