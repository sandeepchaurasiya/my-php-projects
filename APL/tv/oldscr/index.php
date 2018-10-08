
<?php

include "db.php";

?>






<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
<script type = "text/javascript"  src = "https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>

<link rel="stylesheet" type="text/css" href="css/style.css"/>



</head>

<body>


<div class="plcong">
<div class="plimgs5"><img src="" width="150px"></div>
<img src="images/ba-colorful-fireworks-animated-gif-pic.gif" width="100%" /> 
<div class="plcongtit">Congratulation!<br />
<span style="font-size:36px;color:#fff;">SHAHRUKH</span>
</div>
</div>

<?php

include "livescore.php";

?>

</div>













<div class="winnerlyr1"></div>
<div class="winnerlyr">
<div class="winnerpor1">
	<?php
showdatas3(0,$mxteamname2[0],$conndb,"cpn","captain_id",".png","");
?><br />

<strong>KNIGHT RIDERS</strong><br />
<div class='vsde'></div>
<div class='hlscr'></div>


</div>



<div class="winnerpor1">
<img src="images/winners.png"  width="90%" />
</div>



<div class="winnerpor1">
	<?php
showdatas3(0,$mxteamname2[0],$conndb,"cpn","captain_id",".png","");
?><br />
<strong>KNIGHT RIDERS</strong>
<div class='vsde'></div>
<div class='hlscr'></div>
</div>
</div>
</div>


</div>

<div class="crackers">
<div class="gifanim firewgif1"><img src="images/giphy (2).gif"  width=""/></div>
<div class="gifanim firewgif2"><img src="images/giphy (4).gif"  width=""/></div>
<div class="gifanim firewgif5"><img src="images/giphy (4).gif"  width=""/></div>
<div class="gifanim firewgif3"><img src="images/giphy (2).gif"  width=""/></div>
<div class="gifanim firewgif4"><img src="images/200.webp"  width=""/></div>
<div class="gifanim firewgif6"><img src="images/200.webp"  width=""/></div>
<div class="gifanim firewgif7"><img src="images/giphy (2).gif"  width=""/></div>
<div class="gifanim firewgif8"><img src="images/fwgif23.webp"  width=""/></div>
<div class="gifanim firewgif9"><img src="images/200w (1).webp"  width=""/></div>
<div class="gifanim firewgif10"><img src="images/200w (1).webp"  width=""/></div>
</div>




<div class="xxx" style="display:none;"></div>

<!--<script>
$('document').ready(function(){
$('.boardpap1 .tableteams').each(function(){
function sortEm(a,b){
  return parseInt($(this).find('.tableteamsl .plscr', a).text()) < parseInt($(this).find('.tableteamsl .plscr', b).text()) ? 1 : -1;
}

$(this).find('.tableteamsl').sort(sortEm).prependTo($(this));
alert();
});
});

</script>
-->





<script type="text/javascript" src="js/script.js"></script>





</body>

</html>






