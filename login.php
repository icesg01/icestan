<?php

session_start();

if(isset($_SESSION['username']))
{
	header('Location: cs_372_project.php');
}


$user = "sice";
$password = "7904063";


$member = $_POST['username'];


$memberpass = $_POST['password'];

$db = new PDO ("mysql:host=localhost;dbname=sice", "$user", "$password");
$job = $db->prepare("SELECT * FROM members WHERE username = ?");

$job->execute(array($member));


while($row = $job->fetch(PDO::FETCH_BOTH)){
	
	$salt = "$1$";
	$end = "$";
	$encryptionmethod = $salt . $row['salt'] . $end;
	if(!isset($_SESSION['username'])){
		
		if(crypt($memberpass,$encryptionmethod) == $row['password']){

			$hash = crypt($memberpass,$encryptionmethod);

			$_SESSION['username'] = $row['username'];
			$_SESSION['teamColor'] = $row['teamColor'];

			redirect('cs_372_project.php');
		}
		else{
			redirect('logme.php');
		}
	}
	else{
		echo "you are already logged in";
		session_destroy();
	}
}

redirect('logme.php');


function redirect($page){
	header('Location: ' . $page);
	exit;
}


?>
