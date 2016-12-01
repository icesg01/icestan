<!DOCTYPE html> 
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<title>CS 372 HW 5</title>
	
		<link rel="stylesheet" href="LoginScript.css">
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1", user-scalable=0/>
	</head>

	<body>
		<img src="http://home.advanced-online.com/images/IPF1a.jpg" style="text-align: center" />
		<div id="centerpage" >
			<table id="mainTable" border="0" align="center" cellpadding="0" cellspacing="1" >
				<tr>
					<form name="form1" method="post" action="login.php">
					<td>
						<table id="subTable"  border="0" cellpadding="3" cellspacing="1" >
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