<?php


session_start();

$user = "sice";
$password = "7904063";
$filter = array(
'username' => htmlentities($_POST['username'], ENT_QUOTES, 'UTF-8'),
);



$member = $_POST['username'];


$memberpass = $_POST['password'];

$hash = crypt($memberpass,$b);

$db = new PDO ("mysql:host=localhost;dbname=sice", "$user", "$password");
$job = $db->prepare("SELECT * FROM members WHERE username = ?");






$job->execute(array($member));




/* $results = $job->fetchAll();

foreach($results as $row){


echo "<p> Username is {$row['username']} and password is {$row['password']}
 ";
}
$job = null;
*/

while($row = $job->fetch(PDO::FETCH_BOTH)){
$salt = "$1$";
$end = "$";
$encryptionmethod = $salt . $row['salt'] . $end;
if(!isset($_SESSION['username'])){
if(crypt($memberpass,$encryptionmethod) == $row['password']){

$hash = crypt($memberpass,$encryptionmethod);

$_SESSION['username'] = $row['username'];
$_SESSION['teamColor'] = $row['teamColor'];

redirect('http://www.sullens.net/~sice/cins257/ProjectTest/cs_372_project.php');
}
else{
redirect('http://www.sullens.net/~sice/cins257/ProjectTest/logme.php');}
}
else{
echo "you are already logged in";
session_destroy();
}
}

redirect('http://www.sullens.net/~sice/cins257/ProjectTest/logme.php');


function redirect($page){
	header('Location: ' . $page);
	exit;
}


?>
