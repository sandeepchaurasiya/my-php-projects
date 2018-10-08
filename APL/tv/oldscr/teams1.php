
<div class="teamboard1">


<div class="ppt">PLAYERS POINTS TABLE</div>



<table class="table1" border="0" width="400px">

<tr><td valign="middle" style="background-color:#eee;"><img style="float:left;" src="images/<?php getlogotm($conndb,$mxteamname3[0]); ?>" width="50px"><span style="float:left;padding-top:12px; font-size:20px; text-transform:uppercase;margin-left:10px;color:#333"><?php echo $tmn3; ?> </span></td></tr>

<?php


 temdetcall1($conndb,$mxteamname3[0]);

?>


</table>




<table class="table1" border="0" width="400px">
<tr><td valign="middle" style="background-color:#eee;"><img style="float:left;" src="images/<?php echo getlogotm($conndb,$mxteamname4[0]); ?>" width="50px"><span style="float:left;padding-top:12px; font-size:20px; text-transform:uppercase;margin-left:10px;color:#333"><?php echo $tmn4; ?> </span></td></tr>


<?php
temdetcall1($conndb,$mxteamname4[0]);
?>
</table>



</div>

