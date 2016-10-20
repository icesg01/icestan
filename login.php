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
if(!$_SESSION['username']){
if(crypt($memberpass,$encryptionmethod) == $row['password'] && $row['approved'] == 1){





$hash = crypt($memberpass,$encryptionmethod);

$_SESSION['username'] = $row['username'];
$_SESSION['postcount'] = $row['postcount'];
$_SESSION['img'] = $row['img'];

header('Location: http://www.sullens.net/~sice/PHP5/cs_372_project.php');
}
else{
echo "wrong!";}
}
else{
echo "you are already logged in";
session_destroy();
}
}



?>
