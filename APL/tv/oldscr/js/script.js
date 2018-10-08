

function abcd(){
$('document').ready(function(){
	
$.ajax({
url: 'ajaxphp.php',
type: 'POST',
data: { team : "ss"},
success: function(output){
$('.xxx').html(output);

if(parseInt($('.xxx').find('.winnerqual').html()) != 0){

$('.header1').trigger("click");
	
}

$('.ajteam1').html($('.xxx').find('.ajaxteam1').html());
$('.ajteam2').html($('.xxx').find('.ajaxteam2').html());
$('.ajteam3').html($('.xxx').find('.ajaxteam3').html());
$('.ajteam4').html($('.xxx').find('.ajaxteam4').html());

}
})

});



}


var avvv=setInterval(abcd,10000);












$(document).ready(function(){
	
	
	
	
	
	
function anim3(){	

function anim7(){	
               $(".fullcont5").hide( "drop", {direction: "up"}, 1500 );
               $(".fullcont1").delay(1600).show( "drop", {direction: "up"}, 1500 );
}
anim7()
function anim4(){	

               $(".fullcont1").hide( "drop", {direction: "up"}, 1500 );
               $(".fullcont2").delay(1600).show( "drop", {direction: "up"}, 1500 );
}

function anim8(){	
               $(".fullcont2").hide( "drop", {direction: "up"}, 1500 );
               $(".fullcont3").delay(1600).show( "drop", {direction: "up"}, 1500 );
}

function anim9(){	
               $(".fullcont3").hide( "drop", {direction: "up"}, 1500 );
               $(".fullcont4").delay(1600).show( "drop", {direction: "up"}, 1500 );
}
function anim10(){	
               $(".fullcont4").hide( "drop", {direction: "up"}, 1500 );
               $(".fullcont5").delay(1600).show( "drop", {direction: "up"}, 1500 );
}

var vranima4=setTimeout(anim4,13100);	
var vranima8=setTimeout(anim8,26200);	
var vranima9=setTimeout(anim9,39300);	
var vranima10=setTimeout(anim10,52400);	
}

anim3();
var vranima3=setInterval(anim3,65500);	



});


$('document').ready(function(){
	
function anim1(){	
$('.logoset1').animate({top:"3%"},1500);
$('.logoset1').animate({top:"10%"},1500);
}
anim1();
var vranima=setInterval(anim1,3000);

function anim2(){	
$('.logoset2').animate({top:"10%"},1500);
$('.logoset2').animate({top:"3%"},1500);
}
anim2();
var vranima2=setInterval(anim2,3000);




})




$('document').ready(function(){
	
	function chreatscore(){
	var countallcsr1=0,countallcsr2=0,countallcsr3=0,countallcsr4=0;
	$('.fullcont1 .tableteams1 .plscr').each(function(){
countallcsr1 =	countallcsr1+parseInt($(this).html());
	})
	$('.fullcont1 .tableteams2 .plscr').each(function(){
countallcsr2 =	countallcsr2+parseInt($(this).html());
	})	
	$('.fullcont2 .tableteams1 .plscr').each(function(){
countallcsr3 =	countallcsr3+parseInt($(this).html());
	})	
	$('.fullcont2 .tableteams2 .plscr').each(function(){
countallcsr4 =	countallcsr4+parseInt($(this).html());
	})			

$('.score1#team1').html(countallcsr1)
$('.score1#team2').html(countallcsr2)
$('.score1#team3').html(countallcsr3)
$('.score1#team4').html(countallcsr4)
}
var chreatscorevr=setInterval(chreatscore,1000);



})





$('document').ready(function(){
$('.header1').click(function(){
	$('.winnerlyr').show(0);
	$('.winnerlyr1').show(0);
	$('.crackers').show(0);
})
})

$('document').ready(function(){

	function chreatscore2(){
	
	
var teamvr1=parseInt($('.score1#team1:eq(0)').text());
var teamvr2=parseInt($('.score1#team2:eq(0)').text());
var teamvr3=parseInt($('.score1#team3:eq(0)').text());
var teamvr4=parseInt($('.score1#team4:eq(0)').text());

if(teamvr1<teamvr2){
$('.winnerpor1:eq(0)').find("img").attr("src",$("img#team2").attr("src"));	
$('.winnerpor1:eq(0)').find("strong").text($(".tmname2#team2").text());
}
else if(teamvr1>teamvr2){
$('.winnerpor1:eq(0)').find("img").attr("src",$("img#team1").attr("src"));	
$('.winnerpor1:eq(0)').find("strong").text($(".tmname1#team1").text());
}
else{
$('.winnerpor1:eq(0)').find("img").attr("src","images/se.png");	
$('.winnerpor1:eq(0)').find("strong").text("NO RESULT");
}
if(teamvr3<teamvr4){
$('.winnerpor1:eq(2)').find("img").attr("src",$("img#team4").attr("src"));	
$('.winnerpor1:eq(2)').find("strong").text($(".tmname2#team4").text());
}
else if(teamvr3>teamvr4){
$('.winnerpor1:eq(2)').find("img").attr("src",$("img#team3").attr("src"));	
$('.winnerpor1:eq(2)').find("strong").text($(".tmname1#team3").text());
}
else{
$('.winnerpor1:eq(2)').find("img").attr("src","images/se.png");	
$('.winnerpor1:eq(2)').find("strong").text("NO RESULT");
}




$('.vsde:eq(0)').html("<img src='"+$("img#team1").attr("src")+"' width='70px'>"+"<img src='images/vslogo.png' width='50px'>"+"<img src='"+$("img#team2").attr("src")+"' width='70px'>");


$('.vsde:eq(1)').html("<img src='"+$("img#team3").attr("src")+"' width='70px'>"+"<img src='images/vslogo.png' width='50px'>"+"<img src='"+$("img#team4").attr("src")+"' width='70px'></div>");

$('.hlscr:eq(0)').html("<span>"+$('.score1#team1:eq(0)').text()+"</span> - <span>"+$('.score1#team2:eq(0)').text()+"</span>");

$('.hlscr:eq(1)').html("<span>"+$('.score1#team3:eq(0)').text()+"</span> - <span>"+$('.score1#team4:eq(0)').text()+"</span>");

	}
	chreatscore2();
	var chreatscorevr2=setInterval(chreatscore2,1000);

})












$('document').ready(function(){

var teamoldscr=[
$('.boardpap1 .tableteamsl:eq(0)').find('.plscr').html(),
$('.boardpap1 .tableteamsl:eq(1)').find('.plscr').html(),
$('.boardpap1 .tableteamsl:eq(2)').find('.plscr').html(),
$('.boardpap1 .tableteamsl:eq(3)').find('.plscr').html(),
$('.boardpap1 .tableteamsl:eq(4)').find('.plscr').html(),
$('.boardpap1 .tableteamsl:eq(5)').find('.plscr').html(),
$('.boardpap1 .tableteamsl:eq(6)').find('.plscr').html(),
$('.boardpap1 .tableteamsl:eq(7)').find('.plscr').html(),
$('.boardpap1 .tableteamsl:eq(8)').find('.plscr').html(),
$('.boardpap1 .tableteamsl:eq(9)').find('.plscr').html(),
$('.boardpap1 .tableteamsl:eq(10)').find('.plscr').html(),
$('.boardpap1 .tableteamsl:eq(11)').find('.plscr').html(),
$('.boardpap1 .tableteamsl:eq(12)').find('.plscr').html(),
$('.boardpap1 .tableteamsl:eq(13)').find('.plscr').html(),
$('.boardpap1 .tableteamsl:eq(14)').find('.plscr').html(),
$('.boardpap1 .tableteamsl:eq(15)').find('.plscr').html(),
$('.boardpap1 .tableteamsl:eq(16)').find('.plscr').html(),
$('.boardpap1 .tableteamsl:eq(17)').find('.plscr').html(),
$('.boardpap1 .tableteamsl:eq(18)').find('.plscr').html(),
$('.boardpap1 .tableteamsl:eq(19)').find('.plscr').html(),
$('.boardpap1 .tableteamsl:eq(20)').find('.plscr').html(),
$('.boardpap1 .tableteamsl:eq(21)').find('.plscr').html(),
$('.boardpap1 .tableteamsl:eq(22)').find('.plscr').html(),
$('.boardpap1 .tableteamsl:eq(23)').find('.plscr').html(),
$('.boardpap1 .tableteamsl:eq(24)').find('.plscr').html(),
$('.boardpap1 .tableteamsl:eq(25)').find('.plscr').html(),
$('.boardpap1 .tableteamsl:eq(26)').find('.plscr').html(),
$('.boardpap1 .tableteamsl:eq(27)').find('.plscr').html(),
$('.boardpap1 .tableteamsl:eq(28)').find('.plscr').html(),
$('.boardpap1 .tableteamsl:eq(29)').find('.plscr').html(),
$('.boardpap1 .tableteamsl:eq(30)').find('.plscr').html(),
$('.boardpap1 .tableteamsl:eq(31)').find('.plscr').html(),
$('.boardpap1 .tableteamsl:eq(32)').find('.plscr').html(),
$('.boardpap1 .tableteamsl:eq(33)').find('.plscr').html(),
$('.boardpap1 .tableteamsl:eq(34)').find('.plscr').html(),
$('.boardpap1 .tableteamsl:eq(35)').find('.plscr').html(),
$('.boardpap1 .tableteamsl:eq(36)').find('.plscr').html(),
$('.boardpap1 .tableteamsl:eq(37)').find('.plscr').html(),
$('.boardpap1 .tableteamsl:eq(38)').find('.plscr').html(),
$('.boardpap1 .tableteamsl:eq(39)').find('.plscr').html(),
$('.boardpap1 .tableteamsl:eq(40)').find('.plscr').html(),
$('.boardpap1 .tableteamsl:eq(41)').find('.plscr').html(),
$('.boardpap1 .tableteamsl:eq(42)').find('.plscr').html(),
$('.boardpap1 .tableteamsl:eq(43)').find('.plscr').html(),
$('.boardpap1 .tableteamsl:eq(44)').find('.plscr').html(),
$('.boardpap1 .tableteamsl:eq(45)').find('.plscr').html(),
$('.boardpap1 .tableteamsl:eq(46)').find('.plscr').html(),
$('.boardpap1 .tableteamsl:eq(47)').find('.plscr').html(),
$('.boardpap1 .tableteamsl:eq(48)').find('.plscr').html()
];	
	



function checkscore(){
	

var teamnewscr=[
$('.boardpap1 .tableteamsl:eq(0)'),
$('.boardpap1 .tableteamsl:eq(1)'),
$('.boardpap1 .tableteamsl:eq(2)'),
$('.boardpap1 .tableteamsl:eq(3)'),
$('.boardpap1 .tableteamsl:eq(4)'),
$('.boardpap1 .tableteamsl:eq(5)'),
$('.boardpap1 .tableteamsl:eq(6)'),
$('.boardpap1 .tableteamsl:eq(7)'),
$('.boardpap1 .tableteamsl:eq(8)'),
$('.boardpap1 .tableteamsl:eq(9)'),
$('.boardpap1 .tableteamsl:eq(10)'),
$('.boardpap1 .tableteamsl:eq(11)'),
$('.boardpap1 .tableteamsl:eq(12)'),
$('.boardpap1 .tableteamsl:eq(13)'),
$('.boardpap1 .tableteamsl:eq(14)'),
$('.boardpap1 .tableteamsl:eq(15)'),
$('.boardpap1 .tableteamsl:eq(16)'),
$('.boardpap1 .tableteamsl:eq(17)'),
$('.boardpap1 .tableteamsl:eq(18)'),
$('.boardpap1 .tableteamsl:eq(19)'),
$('.boardpap1 .tableteamsl:eq(20)'),
$('.boardpap1 .tableteamsl:eq(21)'),
$('.boardpap1 .tableteamsl:eq(22)'),
$('.boardpap1 .tableteamsl:eq(23)'),
$('.boardpap1 .tableteamsl:eq(24)'),
$('.boardpap1 .tableteamsl:eq(25)'),
$('.boardpap1 .tableteamsl:eq(26)'),
$('.boardpap1 .tableteamsl:eq(27)'),
$('.boardpap1 .tableteamsl:eq(28)'),
$('.boardpap1 .tableteamsl:eq(29)'),
$('.boardpap1 .tableteamsl:eq(30)'),
$('.boardpap1 .tableteamsl:eq(31)'),
$('.boardpap1 .tableteamsl:eq(32)'),
$('.boardpap1 .tableteamsl:eq(33)'),
$('.boardpap1 .tableteamsl:eq(34)'),
$('.boardpap1 .tableteamsl:eq(35)'),
$('.boardpap1 .tableteamsl:eq(36)'),
$('.boardpap1 .tableteamsl:eq(37)'),
$('.boardpap1 .tableteamsl:eq(38)'),
$('.boardpap1 .tableteamsl:eq(39)'),
$('.boardpap1 .tableteamsl:eq(40)'),
$('.boardpap1 .tableteamsl:eq(41)'),
$('.boardpap1 .tableteamsl:eq(42)'),
$('.boardpap1 .tableteamsl:eq(43)'),
$('.boardpap1 .tableteamsl:eq(44)'),
$('.boardpap1 .tableteamsl:eq(45)'),
$('.boardpap1 .tableteamsl:eq(46)'),
$('.boardpap1 .tableteamsl:eq(47)'),
$('.boardpap1 .tableteamsl:eq(48)')
];	
for(ac1=0;ac1<50;ac1++){	
if(teamnewscr[ac1].find('.plscr').html() != teamoldscr[ac1]){
$('.boardpap1 .tableteamsl:eq('+ac1+')').animate({backgroundColor:"#bc0b0b"});
$('.boardpap1 .tableteamsl:eq('+ac1+')').delay(9000).animate({backgroundColor:"rgba(0,0,0,0.6)"});
teamoldscr[ac1]=teamnewscr[ac1].find('.plscr').html() ;
$('.plcong span').text(teamnewscr[ac1].find(".name1").text());
$('.plcong .plimgs5 img').attr("src","images/players/"+teamnewscr[ac1].find(".plrids6").text()+".png");

$('.plcong').stop().show(0);
$('.plcong').delay(4000).slideUp(0);
	}
	
	
}
	
	
	

	
}


var checkscorevr=setInterval(checkscore,10000);
})

