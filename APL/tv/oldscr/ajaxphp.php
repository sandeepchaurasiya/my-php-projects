<?php

include "db.php";

?>

<div class="ajaxteam1">
<?php
function showdatas1($posf1,$posf2,$posf3,$mxtmnm1,$conndbff,$matchidgenff){
$sel[$posf1]="SELECT * FROM team_player where team_id='$mxtmnm1'";
$runquer[$posf1]=$conndbff -> query($sel[$posf1]);
if ($runquer[$posf1]->num_rows > 0) {
while($row[$posf1] = $runquer[$posf1]->fetch_assoc()) {
	
?>	



<div class="tableteamsl"><span class="plrids6"><?php echo $row[$posf1]['player_id'] ?></span>

<?php	
$sel[$posf2]="SELECT * FROM players where id='".$row[$posf1]['player_id']."'";
$runquer[$posf2]=$conndbff -> query($sel[$posf2]);
if ($runquer[$posf2]->num_rows > 0) {
while($row[$posf2] = $runquer[$posf2]->fetch_assoc()) {
	
?>	
	
<span class="name1"><?php echo $row[$posf2]["name"] ?></span> 


<?php	

}
}
$sel[$posf2]="SELECT * FROM scores where match_id='$matchidgenff'  AND player_id='".$row[$posf1]['player_id']."' ";
$runquer[$posf2]=$conndbff -> query($sel[$posf2]);
if ($runquer[$posf2]->num_rows > 0) {
while($row[$posf2] = $runquer[$posf2]->fetch_assoc()) {
	
	?>
	
<div class="plscr"><?php echo $row[$posf2]["score"]; ?></div>


<?php	

}
}
?>
</div>	
<?php
}
}
}
showdatas1(1,2,3,$mxteamname1[0],$conndb,$matchidgen1);
?>
</div>
<div class="ajaxteam2">
  <?php
showdatas1(1,2,3,$mxteamname2[0],$conndb,$matchidgen1);
?>
</div>
<div class="ajaxteam3">
  <?php
showdatas1(1,2,3,$mxteamname3[0],$conndb,$matchidgen2);
?>
</div>
<div class="ajaxteam4">
  <?php
showdatas1(1,2,3,$mxteamname4[0],$conndb,$matchidgen2);
?>
</div>



<div class="winnerqual"><?php
$sel9="SELECT * FROM matches where match_date='$todaysdate' LIMIT 1";
$runquer9=$conndb -> query($sel9);
if ($runquer9->num_rows > 0) {
while($row9 = $runquer9->fetch_assoc()) {
	echo $row9['winner_team_id'];
}
}
?></div>