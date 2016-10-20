<!DOCTYPE html>
<!-- This example is based on the examle in "Dynamic Web Programming and HTML5" by Paul S. Wang -->

<html>
<head>
	<meta charset="utf-8"/>
	<title>Page Floate Layout Template</title>
<!-- <link rel="stylesheet" href="css/floatlayout.css" 
		type="text/css" title="float layout style"> -->

		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1", user-scalable=0/>
		<script src="timeSlot.js"></script>
		<script>

document.createElement('section');

document.createElement('nav');
</script>
	<style type="text/css">
	
	body,html{
	margin:0;

/* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#356aa0+0,356aa0+100;Blue+Flat */
background: rgb(53,106,160); /* Old browsers */
background: -moz-linear-gradient(top, rgba(53,106,160,1) 0%, rgba(53,106,160,1) 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(top, rgba(53,106,160,1) 0%,rgba(53,106,160,1) 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to bottom, rgba(53,106,160,1) 0%,rgba(53,106,160,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#356aa0', endColorstr='#356aa0',GradientType=0 ); /* IE6-9 */
	position:relative;
	height:100%;
	}
	#container{
	height:100%;
	float:left;
width:100%;

	
	
	}
	
	#container:after{
	content:" ";
	display:block;
	clear:both;
	
	}


#logoArea{

margin:20px 0px 20px 0px;
display:block;
float:left;
clear:both;
width:100%;
text-align:center;

height:25%;
min-height:300px;
}

#logoArea img{
	
	margin:0 auto;
	-webkit-box-shadow: 12px 12px 12px rgba(0, 0, 0, .3);
	-moz-box-shadow: 12px 12px 12px rgba(0, 0, 0, .3);
	box-shadow: 12px 12px 12px rgba(0, 0, 0, .3);
}
	
	.child{
	background:#fff;
	
	float:left;
	margin-bottom:10%;
/*	  -moz-box-shadow:    3px 3px 5px 6px #ccc;
  -webkit-box-shadow: 3px 3px 5px 6px #ccc;
  box-shadow:         3px 3px 5px 6px #ccc;
  
  */
  
  border-radius:16px;
  border:3px solid #003FA5;
  
	
	width:20%;
	
	overflow:hidden;
	
	min-height:180px;
	}
	
	
	
	.child  li > img{
		
		float:right;
		width:20%;
		
	}
	
	
	.child > ul{
		
	list-style-type: none;	
		
	font-size:2.5em;
	
	color:#0038D8;
	padding:0;
	
	}
	
	.child2{
	min-height:50%;
	float:left;
	border:3px solid #0038a8;
	margin-left:5%;
	background:#fff;
	width:calc(70% - 2px);
	  -moz-box-shadow:    3px 3px 5px 6px #ccc;
  -webkit-box-shadow: 3px 3px 5px 6px #ccc;
  box-shadow:         3px 3px 5px 6px #ccc;
	
	
	
	
	}
	
	
	.child2 > nav{
	
	
	width:100%;
	
	font-size:20px;
	
	font-weight:bold;
	
	
	
	
	
	}
	
	.child2:after{
	content:" ";
	display:block;
	clear:both;
	
	
	}
	
	
	
	.navItem{
	

background: #eeeeee; /* Old browsers */
background: -moz-linear-gradient(top,  #eeeeee 0%, #cccccc 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(top,  #eeeeee 0%,#cccccc 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to bottom,  #eeeeee 0%,#cccccc 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#eeeeee', endColorstr='#cccccc',GradientType=0 ); /* IE6-9 */

	
	height:50px;
	
	float:left;



	width:calc(12.5% - 2px);
	position:relative;
	border:1px solid #000;
		
	}
	
	.navItem:hover{
	
	
	
	}


	
	input{
	
	text-align:center;
	
	position:relative;
	
	top:20%;
	
	
	
	
	
	}
	
	@media only screen and (max-width: 800px) {
	
	#container{
	font-size:0.5em;
	
	}
	
	#logoArea{
		
		margin-top:0;
	}
	
	#logoArea img{
		
		width:100%;
		height:300px;
		
	}
	
	.navItem{
	
	height:50px;
	
	}
	
	.child2 > nav{
	word-wrap:break-word;
	font-size:2.2em;
	line-height:20px;
	
	}
	
	.child > ul{
		text-align:center;
		line-height:40px;
		
	}
	
	
	
	
	
	#container:before{
	
	height:10%;
	
	}
	
	.child{
	height:40%;
	width:100%;
	float:none;
	margin-left:auto;
	margin-right:auto;
margin-bottom:20px;
border-radius:0px;
	
	
	
	}
	
	.child2{
	width:100%;
	height:100%;
	margin:0;
	font-size:0.5em;
	
	}
	
	.navItem{
		
		
		height:100px;
	}
	
	
	
	}
	
	</style>
</head>

<body>
	
	<div id="logoArea"><img src="ipfw.jpg" /></div>
	
	<div id="container">
	

	<div class="child">
	
	<ul>
	<li>Team 1</li>
	<li>Team 2<img /></li>
	<li>Team 3<img /></li>
	<li>Team 4<img /></li>
	</ul>
	
	
	</div>
	<div class="child2">
	<nav>
		
		
		
		<section class="navItem">Time</section>
		<section class="navItem">Monday</section>
		<section class="navItem">Tuesday</section>
		<section class="navItem">Wednesday</section>
		<section class="navItem">Thursday</section>
		<section class="navItem">Friday</section>
		<section class="navItem">Saturday</section>
		<section style="width(12.5%)" class="navItem">Sunday</section>
		
		
		
		<?php
		
		$x = 0;
			$times = array("8:30-10:30", "1:00-2:00", "3:00-4:00"); 
		while($x < 13){
			
			
			if(x % 8 == 0){
	
	
		echo 	"<section class=\"navItem\">{$times[mt_rand(0,2)]}</section> ";
				
			
		
				
				
			}
			


			echo "<form action=\"\">";
			echo "<section class=\"navItem\"   id=\"Monday{$x}\"   name=\"week {$x} Monday \" style=\"text-align:center;\"><input  onclick=\"secureTime('Monday','{$x}')\" type=\"checkbox\" /></section>";
			echo "<section class=\"navItem\" name=\"week {$x} Tuesday \" style=\"text-align:center;\"><input type=\"checkbox\" /></section>";
			echo "<section class=\"navItem\" name=\"week {$x} Wednesday \" style=\"text-align:center;\"><input type=\"checkbox\" /></section>";
			echo "<section class=\"navItem\" name=\"week {$x} Thursday \" style=\"text-align:center;\"><input type=\"checkbox\" /></section>";
			echo "<section class=\"navItem\" name=\"week {$x} Friday \" style=\"text-align:center;\"><input type=\"checkbox\" /></section>";
			echo "<section class=\"navItem\" name=\"week {$x} Saturday \" style=\"text-align:center;\"><input type=\"checkbox\" /></section>";
			echo "<section  class=\"navItem\" name=\"week {$x} Sunday \" style=\"text-align:center;\"><input type=\"checkbox\" /></section>";	
			echo "</form>";
			
			
			$x++;
			
			
	
			
			
			
		}
		
		
		
		
		?>
	
	
	</nav>
	
	
	
	</div>
	
	
	
	</div>
	
	
	
</body>
</html>
