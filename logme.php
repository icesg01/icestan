<!DOCTYPE html> 
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<title>CS 372 HW 5</title>
	
		<link rel="stylesheet" href="LoginScript.css">
		
	</head>

	<body>
		<img src="ipfw.jpg" style="text-align: center" />
		<div id="centerpage" >
			<table width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
				<tr>
					<form name="form1" method="post" action="login.php">
					<td>
						<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
						<tr>
							<td colspan="3" style="text-align: center"><strong>Member Login </strong></td>
						</tr>
						<tr>
							<td id="username" width="78">Username</td>
						</tr>
						<tr>
							<td width="294"><input name="username" type="text" id="username"></td>
						</tr>
						<tr>
							<td id="password" >Password</td>
						</tr>
						<tr>
							<td><input name="password" type="password" id="password"></td>
						</tr>
						<tr style="text-align: center">
							<td><input type="submit" name="Submit" value="Login"></td>
						</tr>
						</table>
					</td>
					</form>
				</tr>
			</table>
		</div>
	</body>