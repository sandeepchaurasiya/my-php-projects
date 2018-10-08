
<div class="teamboard2">





<table class="table2" border="0" width="400px">
<tr style="background-color:#eee !important;color:#444;"><td colspan="2">POINTS TABLE</td><td style="text-align:center;padding-left:0px;">SALES</td></tr>


<?php
include "db.php";

$sel11="SELECT * FROM teams order by lifetime_score + 0 desc";
$runquer11=$conndb -> query($sel11);
if ($runquer11->num_rows > 0) {
while($row11 = $runquer11->fetch_assoc()) {
echo '<tr><td width="45"><img src="images/'.$row11["logo"].'" width="100%"></td><td class="namshw">'.$row11["tname"].'</td><td class="pontshw">'.$row11["lifetime_score"].'</td></tr>';	
}
}


?>


</table>

</div>



<style>

.teamboard2{
	background:url(images/bg1s.jpg);
    background: rgba(0,0,0,0.3);
	width:800px;
	height:330px;
	padding:10px;
	box-sizing:border-box;
	
		}
		
	.table2{
		width:735px;
		margin:15px;
		font-size:18px;
		color:#fff;
		font-weight:bold;
		float:left;
	box-sizing:border-box;
		padding-left:10px;
		}
		
		.table2	td{
		height:45px;
		padding-left:10px;
	}
		
		.table2	tr{
	    background: rgba(1,26,58,1);
		}
.table2 .namshw{
    background: rgba(1,26,58,1);
		color:#fff;
	}

		.table2	.pontshw {
	    background: #c70707;
text-align:center;
	padding:5px;
	width:30px;
				width:100px;

}
	
</style>









