<!DOCTYPE html> 
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<title>CS 372 HW 5</title>
	
		<link rel="stylesheet" href="LoginScript.css">
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1", user-scalable=0/>
	</head>

	<body>
		<div id="encloseImage">
		<img src="https://s-media-cache-ak0.pinimg.com/originals/1c/e7/71/1ce77139b73ccc7574e6d86763f0d0d5.jpg" style="text-align: center" />
		</div>
		
		<div id="title">
		<label >IPFW Computer Science Capstone Team Login</label>
		</div>
		
		<div id="mainContent">
			<form name="Login" id="login" method="post" action="login.php">
					
				<label id="user" >Username</label>
				<input name="username" type="text" id="username">
				
				<label id="pass" >Password</label>
				<input name="password" type="password" id="password">
	
				<input name="submit"   type="submit" id="submit" value="Login">
			</form>
		</div>
	</body>