
<?php


$tmn1=$_REQUEST['tmn1'];
$tmn2=$_REQUEST['tmn2'];

include "db.php";

?>



<div class="teamboard1">

<div class="ppt">PLAYERS POINTS TABLE</div>


<?php

$idarrs3=array("","","","","","","","");
$idarrs4=array("","","","","","","","");
$idarrs5=array("","","","","","","","","","","","","","","","");

$sel10="SELECT * FROM teams";
$runquer10=$conndb -> query($sel10);
$myids3=1;
if ($runquer10->num_rows > 0) {
while($row10 = $runquer10->fetch_assoc()) {
$idarrs3[$myids3] =  $row10["id"];	
$idarrs4[$myids3] =  $row10["logo"];	
$idarrs5[$myids3] =  $row10["tname"];	
$myids3++;
}
}



function getlogotm($conndbff,$idsss){
	
$sel10="SELECT * FROM teams where id =$idsss ";
$runquer10=$conndbff -> query($sel10);
$myids3=1;
if ($runquer10->num_rows > 0) {
while($row10 = $runquer10->fetch_assoc()) {
echo $idarrs4[$myids3] =  $row10["logo"];	
$myids3++;
}
}




}




?>


<table class="table1" border="0" width="400px">

<tr><td valign="middle" style="background-color:#eee;"><img style="float:left;" src="images/<?php getlogotm($conndb,$mxteamname1[0]); ?>" width="50px"><span style="float:left;padding-top:12px; font-size:20px; text-transform:uppercase;margin-left:10px;color:#333"><?php echo $tmn1; ?> </span></td></tr>

<?php

function temdetcall1($conndbff,$teamids3){
	

$sel11="SELECT * FROM players where team_id=$teamids3 order by lifetime_sale + 0 desc";
$runquer11=$conndbff -> query($sel11);
if ($runquer11->num_rows > 0) {
while($row11 = $runquer11->fetch_assoc()) {
	

?>

<tr><td><?php echo $row11["name"]; ?></td><td><?php echo $row11["lifetime_sale"]; ?></td></tr>

<?php



}
}


	}

 temdetcall1($conndb,$mxteamname1[0]);

?>


</table>




<table class="table1" border="0" width="400px">
<tr><td valign="middle" style="background-color:#eee;"><img style="float:left;" src="images/<?php echo getlogotm($conndb,$mxteamname2[0]); ?>" width="50px"><span style="float:left;padding-top:12px; font-size:20px; text-transform:uppercase;margin-left:10px;color:#333"><?php echo $tmn2; ?> </span></td></tr>


<?php
temdetcall1($conndb,$mxteamname2[0]);
?>


</table>

</div>







<style>

.ppt{
	color:#fff;
    background: #c70707;
	line-height:50px;
	height:50px;
	padding-left:10px;
	font-size:21px;
	box-sizing:border-box;
		}

.teamboard1{
	background:url(images/bg1s.jpg);
    background: rgba(0,0,0,0.0);
	width:800px;
	height:550px;
	padding:10px;
	box-sizing:border-box;
	
		}
		
	.table1	{
		width:360px;
		margin:15px;
		font-size:18px;
		color:#fff;
		font-weight:bold;
		float:left;
		}
		
		.table1	td{
			height:25px;
		}
		
		.table1	td:nth-child(even) {
    background: #c70707;
	border-radius:20px;
	text-align:center;
	padding:5px;
	width:30px;
	
}
		.table1	td:nth-child(odd) {
    background: rgba(1,26,58,1);
	border-radius:5px;
	padding-left:10px;
	
	
}		
</style>





