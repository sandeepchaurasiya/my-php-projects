

<?php

$conndb=mysqli_connect("localhost","root","agt@root","apl");

if($conndb){
/*	echo "Connected";
*/}
if(mysqli_connect_errno()){
	echo "Not Connected"."<br>";
	echo mysqli_connect_error();
	
}

?>



<?php

/*$todaysdate= date("Y-m-d") ;
*/
$todaysdate="2018-07-30";


$sel1="SELECT * FROM matches where match_date='$todaysdate'  LIMIT 1";
$query2=$conndb -> query($sel1);



if ($query2->num_rows > 0) {

// output data of each row
while($row = $query2->fetch_assoc()) {
$matchidgen1= $row["id"];/*$mxteam2 = $row["team2"];$mxteam3 = $row["team3"];$mxteam4 = $row["team4"]*/

}
}



$sel8="SELECT * FROM matches where match_date='$todaysdate'  ORDER BY id DESC LIMIT 1 ";
$query8=$conndb -> query($sel8);



if ($query8->num_rows > 0) {

// output data of each row
while($row8 = $query8->fetch_assoc()) {
$matchidgen2= $row8["id"];/*$mxteam2 = $row["team2"];$mxteam3 = $row["team3"];$mxteam4 = $row["team4"]*/

}
}







$sel1="SELECT * FROM matches where match_date='$todaysdate' LIMIT 1";
$query2=$conndb -> query($sel1);

$idinc=0;
$mxteamname1=array("","");
if ($query2->num_rows > 0) {

// output data of each row
while($row = $query2->fetch_assoc()) {
$mxteamname1[$idinc] = $row["team_a_id"];/*$mxteam2 = $row["team2"];$mxteam3 = $row["team3"];$mxteam4 = $row["team4"]*/
$idinc++;
}
}







$sel1="SELECT * FROM matches where match_date='$todaysdate' LIMIT 1";
$query2=$conndb -> query($sel1);

$idinc1=0;
$mxteamname2=array("","");
if ($query2->num_rows > 0) {
	
    // output data of each row
    while($row = $query2->fetch_assoc()) {
 $mxteamname2[$idinc1] = $row["team_b_id"];/*$mxteam2 = $row["team2"];$mxteam3 = $row["team3"];$mxteam4 = $row["team4"]*/
  	$idinc1++;
  }
}

$sel1="SELECT * FROM matches where match_date='$todaysdate'  ORDER BY id DESC LIMIT 1 ";
$query2=$conndb -> query($sel1);

$idinc=0;
$mxteamname3=array("","");
if ($query2->num_rows > 0) {

// output data of each row
while($row = $query2->fetch_assoc()) {
$mxteamname3[$idinc] = $row["team_a_id"];/*$mxteam2 = $row["team2"];$mxteam3 = $row["team3"];$mxteam4 = $row["team4"]*/
$idinc++;
}
}








$sel1="SELECT * FROM matches where match_date='$todaysdate'  ORDER BY id DESC LIMIT 1 ";
$query2=$conndb -> query($sel1);

$idinc1=0;
$mxteamname4=array("","");
if ($query2->num_rows > 0) {
	
    // output data of each row
    while($row = $query2->fetch_assoc()) {
 $mxteamname4[$idinc1] = $row["team_b_id"];/*$mxteam2 = $row["team2"];$mxteam3 = $row["team3"];$mxteam4 = $row["team4"]*/
  	$idinc1++;
  }
}







?>
<?php

/*
$sel1="SELECT * FROM teamvs where id=2";
$query2=$conndb -> query($sel1);
if ($query2->num_rows > 0) {
    // output data of each row
    while($row = $query2->fetch_assoc()) {
 $mxteam1cn = $row["team1"];$mxteam2cn = $row["team2"];$mxteam3cn = $row["team3"];$mxteam4cn = $row["team4"];
    }
}*/

?>



