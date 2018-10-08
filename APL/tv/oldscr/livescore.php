

<div class="fullcont1">


<!--
<div class="tversus">
<div class="tlogo1"><img src="images/image1433860312.png"  id="team1"/></div>
<div class="scoreview"><img src="images/vslogo.png" width="200" /></div>
<div class="tlogo1"><img src="images/Team-Rage-Logo.png" id="team2" /></div>
</div>
-->
<div class="header1">
<img src="images/scrh.png" />
<div class="twodots">:</div>
<div class="score1" id="team1">0</div>
<div class="score1 score2" id="team2">0</div>


<?php



function showdatas2($posf1,$mxtmnm1,$conndbff,$dfv1,$clsnm1,$dfid){
$sel[$posf1]="SELECT * FROM teams where id='$mxtmnm1'";
$runquer[$posf1]=$conndbff -> query($sel[$posf1]);
if ($runquer[$posf1]->num_rows > 0) {
while($row[$posf1] = $runquer[$posf1]->fetch_assoc()) {
	?>
<div class="<?php echo $clsnm1; ?>"  id="<?php echo $dfid; ?>"><?php echo $GLOBALS[$dfv1] = $row[$posf1]["tname"]; ?></div>
<?php 
}
}
}
showdatas2(4,$mxteamname1[0],$conndb,"tmn1","tmname1","team1");
showdatas2(4,$mxteamname2[0],$conndb,"tmn2","tmname2","team2");
?>




</div>

<div class="boardpap1">

<div class="logoset1">

<?php

function showdatas4($posf1,$posf2,$mxtmnm1,$conndbff){
	
	
$sel[$posf1]="SELECT * FROM teams where id='$mxtmnm1'";
$runquer[$posf1]=$conndbff -> query($sel[$posf1]);
if ($runquer[$posf1]->num_rows > 0) {
while($row[$posf1] = $runquer[$posf1]->fetch_assoc()) {


$sel[$posf2]="SELECT * FROM players where id='".$row[$posf1]['captain_id']."'";
$runquer[$posf2]=$conndbff -> query($sel[$posf2]);
if ($runquer[$posf2]->num_rows > 0) {
while($row[$posf2] = $runquer[$posf2]->fetch_assoc()) {

echo $row[$posf2]['name'];  

}
}


}
}	
	
}





function showdatas3($posf1,$mxtmnm1,$conndbff,$smstr,$colcll1,$typeimg,$dfid3){
$sel[$posf1]="SELECT * FROM teams where id='$mxtmnm1'";
$runquer[$posf1]=$conndbff -> query($sel[$posf1]);
if ($runquer[$posf1]->num_rows > 0) {
while($row[$posf1] = $runquer[$posf1]->fetch_assoc()) {

echo "<img src='images/".$smstr.$GLOBALS['captname[$mxtmnm1]]']=$row[$posf1][$colcll1].$typeimg."' id='".$dfid3."'>";  

}
}
}
showdatas3(0,$mxteamname1[0],$conndb,"","logo","","team1");
?>

</div>
<div class="logoset2">
<?php
showdatas3(0,$mxteamname2[0],$conndb,"","logo","","team2");
?>
</div>


<div class="flip-container flippers1" ontouchstart="this.classList.toggle('hover');">
	<div class="flipper">
		<div class="front">
<?php
showdatas3(0,$mxteamname1[0],$conndb,"","captain_id",".png","");
?>
		</div>
		<div class="back">



<?php
showdatas4(0,2,$mxteamname1[0],$conndb);
?>



		</div>
	</div>
</div>


<div class="flip-container flippers2" ontouchstart="this.classList.toggle('hover');">
	<div class="flipper">
		<div class="front">
	<?php
showdatas3(0,$mxteamname2[0],$conndb,"","captain_id",".png","");
?>
		</div>
		<div class="back">

<?php
showdatas4(0,2,$mxteamname2[0],$conndb);
?>

		</div>
	</div>
</div>


<div class="tableteams tableteams1">
<div class="tableteamsh">TEAM - <?php echo $tmn1; ?></div>
<div class="ajteam1">
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
$sel[$posf2]="SELECT * FROM scores where match_id='$matchidgenff'  AND player_id='".$row[$posf1]['player_id']."' order by score desc ";
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
</div>

<div class="tableteams tableteams2" style="text-align:;float:right;">
<div class="tableteamsh">TEAM - <?php echo $tmn2; ?></div>
<div class="ajteam2">

<?php
showdatas1(1,2,3,$mxteamname2[0],$conndb,$matchidgen1);
?>
</div>
</div>
</div>


</div>
<!--====================================================================================
=======================================================================================
======================================================================================-->
<script>

</script>
<div class="fullcont2">




<!--<div class="tversus">
<div class="tlogo1"><img src="images/image1433860312.png"  id="team3"/></div>
<div class="scoreview"><img src="images/vslogo.png" width="200" /></div>
<div class="tlogo1"><img src="images/Team-Rage-Logo.png" id="team4" /></div>
</div>
-->
<div class="header1">
<img src="images/scrh.png" />
<div class="twodots">:</div>
<div class="score1" id="team3">0</div>
<div class="score1 score2" id="team4">0</div>

<?php
showdatas2(4,$mxteamname3[0],$conndb,"tmn3","tmname1","team3");
showdatas2(4,$mxteamname4[0],$conndb,"tmn4","tmname2","team4");
?>




</div>

<div class="boardpap1">


<div class="logoset1">
<?php

showdatas3(0,$mxteamname3[0],$conndb,"","logo","","team3");

?>
</div>
<div class="logoset2">
<?php

showdatas3(0,$mxteamname4[0],$conndb,"","logo","","team4");

?>

</div>


<div class="flip-container flippers1" ontouchstart="this.classList.toggle('hover');">
	<div class="flipper">
		<div class="front">
	<?php
showdatas3(0,$mxteamname3[0],$conndb,"","captain_id",".png","");
?>
			</div>
		<div class="back">

<?php
showdatas4(0,2,$mxteamname3[0],$conndb);
?>

		</div>
	</div>
</div>


<div class="flip-container flippers2" ontouchstart="this.classList.toggle('hover');">
	<div class="flipper">
		<div class="front">
	<?php
showdatas3(0,$mxteamname3[0],$conndb,"","captain_id",".png","");
?>
			</div>
		<div class="back">

<?php
showdatas4(0,2,$mxteamname4[0],$conndb);
?>

		</div>
	</div>
</div>




<div class="tableteams tableteams1">
<div class="tableteamsh">TEAM - <?php echo $tmn3; ?></div>
<div class="ajteam3">

<?php
showdatas1(1,2,3,$mxteamname3[0],$conndb,$matchidgen2);
?>

</div>
</div>




<div class="tableteams tableteams2" style="text-align:;float:right;">
<div class="tableteamsh">TEAM - <?php echo $tmn4; ?></div>

<div class="ajteam4">
<?php
showdatas1(1,2,3,$mxteamname4[0],$conndb,$matchidgen2);

?>


</div>
</div>





</div>






</div>





<!--====================================================================================
=======================================================================================
======================================================================================-->










<div class="fullcont3">



<div class="header1">
<img src="images/scrh.png" />
<div class="twodots">:</div>
<div class="score1" id="team1">0</div>
<div class="score1 score2" id="team2">0</div>


<?php
showdatas2(4,$mxteamname1[0],$conndb,"tmn1","tmname1","");
showdatas2(4,$mxteamname2[0],$conndb,"tmn2","tmname2","");
?>


</div>

<div class="boardpap1">
<?php include "teams.php"; ?>

</div>


</div>




<div class="fullcont4">



<div class="header1">
<img src="images/scrh.png" />
<div class="twodots">:</div>
<div class="score1" id="team3">0</div>
<div class="score1 score2" id="team4">0</div>


<?php
showdatas2(4,$mxteamname3[0],$conndb,"tmn3","tmname1","");
showdatas2(4,$mxteamname4[0],$conndb,"tmn4","tmname2","");
?>


</div>

<div class="boardpap1">
<?php include "teams1.php"; ?>

</div>


</div>

<!--====================================================================================
=======================================================================================
======================================================================================-->





<div class="fullcont5">





<div class="boardpap1">
<?php include "points.php"; ?>

</div>


</div>
