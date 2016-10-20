<!DOCTYPE html>


<html>
<head>
		<meta charset="utf-8"/>
		<title>Page Floate Layout Template</title>
		<link rel="stylesheet" href="cs_372_project.css" 
		type="text/css" title="float layout style">

		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1", user-scalable=0/>
		<script src="timeSlot.js"></script>
		
		<script>
			document.createElement('section');
			document.createElement('nav');
		</script>
	
</head>

<body>
	
	<div id = "picture">
	<image src = "IPFWlogo.jpg" 
	style="height:250px;"></image>
	</div>
	
	<div id = "title">
		<h1>IPFW Senior Capstone Room Reservation Service</h1>
	</div>

	<div id="container">
	

	<div class="child">
	
	<ul>
	<li><font color ="red">Team 1</font></li>
	<li><font color ="brown">Team 2</font></li>
	<li><font color ="gold">Team 3</font></li>
	<li><font color ="green">Team 4</font></li>
	<li><font color ="orange">Team 5</font></li>
	<li><font color ="purple">Team 6</font></li>
	<li><font color ="magenta">Team 7</font></li>
	<li><font color ="lime">Team 8</font></li>
	</ul>
	
	</div>
	
	<div class="child2">
	<nav>
		
		
		
		<section class="navItem">Time</section>
		<section class="navItem">Monday</section>
		<section class="navItem">Tuesday</section>
		<section class="navItem">Wednesday</section>
		<section class="navItem">Thursday</section>
		<section style="width(12.5%)" class="navItem">Friday</section>
	
		
		
		
		<?php
		
		$x = 0;
		$timeSlot = 0;
			$times = array("8:00am - 9:00am","9:00am - 10:00am","10:00am - 11:00am","11:00am - 12:00pm","1:00pm - 2:00pm","2:00pm - 3:00pm",
						   "3:00pm - 4:00pm","5:00pm - 6:00pm","7:00pm - 8:00pm","8:00pm - 9:00pm","9:00pm - 10:00pm"
			); 
		while($x < 11 ){
			
			
			if(x % 6 == 0){
	
	
		echo 	"<section class=\"navItem\">{$times[$timeSlot]}</section> ";
				
			$timeSlot++;
		
				
				
			}
			
			
			
			
			
			
			echo "<form action=\"\">";
			echo "<section class=\"navItem\"   id=\"Monday{$x}\"   name=\"week {$x} Monday \" style=\"text-align:center;\"><input  onclick=\"secureTime('Monday','{$x}')\" type=\"checkbox\" /></section>";
			echo "<section class=\"navItem\" name=\"week {$x} Tuesday \" style=\"text-align:center;\"><input type=\"checkbox\" /></section>";
			echo "<section class=\"navItem\" name=\"week {$x} Wednesday \" style=\"text-align:center;\"><input type=\"checkbox\" /></section>";
			echo "<section class=\"navItem\" name=\"week {$x} Thursday \" style=\"text-align:center;\"><input type=\"checkbox\" /></section>";
			echo "<section class=\"navItem\" name=\"week {$x} Friday \" style=\"text-align:center;\"><input type=\"checkbox\" /></section>";
		
			echo "</form>";
			
			
			$x++;
			
			
	
			
			
			
		}
		
		
		
		
		?>
	
	
	</nav>
	
	</div>
	
	</div>

	
</body>
</html>