<?php


session_start();

$user = "sice";
$password = "7904063";




$teamName = $_GET['username'];
$text = $_GET['text'];
$teamColor = $_GET['teamColor'];
$id = $_GET['id'];
$timeSlot = $_GET['timeSlot'];

$memberpass = $_POST['password'];



$db = new PDO ("mysql:host=localhost;dbname=sice", "$user", "$password");

$checkTaken = $db->prepare("SELECT COUNT(*) FROM time_slot WHERE id = ? AND taken=1");

$checkTaken->execute(array($id));

$displayString = "";

if($checkTaken->fetchColumn() > 0){

$job = $db->prepare("SELECT name,color FROM time_slot WHERE id= ?");


$job->execute(array($id));



$results = $job->fetch(PDO::FETCH_ASSOC);

if($results['name'] == $_SESSION['username']) 
{ 

    $addBOx = "<img  style=\" margin-top:10%;\" src=\"xButton.jpg\" />  ";
} 

$displayString .= "<h2 style=\" color:{$results['color']}; margin:0; padding:0; float:left; margin-top:5%; \" > {$results['name']}</h2>{$addBOx}";



}








echo $displayString;

?>
