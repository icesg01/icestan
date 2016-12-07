<?php


session_start();

$user = "sice";
$password = "7904063";




$teamName = $_GET['username'];
$teamColor = $_GET['teamColor'];
$id = $_GET['id'];
$timeSlot = $_GET['timeSlot'];

$memberpass = $_POST['password'];



$db = new PDO ("mysql:host=localhost;dbname=sice", "$user", "$password");
$job = $db->prepare("SELECT username,teamColor FROM members WHERE username = ?");
$checkTaken = $db->prepare("SELECT COUNT(*) FROM time_slot WHERE id = ? AND taken=1");

$checkTaken->execute(array($id));

if($checkTaken->fetchColumn() > 0){
	echo "taken";
}
else{




$job->execute(array($teamName));

$checkExistance = $db->prepare("SELECT COUNT(*) FROM time_slot WHERE id = ?");

if($checkExistance->fetchColumn() == 0){
	
$insertTime = $db->prepare("INSERT INTO time_slot(id,name,color,timesselected,taken) VALUES(?,?,?,?,?)");
	
	
$insertTime->execute(array($id,$teamName,$teamColor,$timeSlot,1));
	
}else{

$job2 = $db->prepare("UPDATE time_slot SET taken= ? WHERE id = ?");

$job2->execute(array(1,$id));

}
$displayString = "";


while($row = $job->fetch(PDO::FETCH_BOTH)){

$displayString .= "<h2 style=\"color:{$teamColor}; margin:0; padding:0; margin-top:5%; float:left;\">{$teamName}</h2>";
$addBOx = "<img onclick=\"remove('$id')\"  style=\" margin-top:10%;\" src=\"xButton.jpg\" />  ";

//if($teamName == $row['username'])
//{
	$displayString .= $addBOx;
//}


}
echo $displayString;
}
?>
