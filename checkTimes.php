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

$checkTaken = $db->prepare("SELECT COUNT(*) FROM time_slot WHERE id = ? AND taken=1");

$checkTaken->execute(array($id));

$displayString = "";

if($checkTaken->fetchColumn() > 0){

$job = $db->prepare("SELECT name,color FROM time_slot WHERE id= ?");


$job->execute(array($id));



$results = $job->fetch(PDO::FETCH_ASSOC);



$displayString .= "<h2 style=\" color:{$results['color']}; margin:0; padding:0 \" > {$results['name']}</h2>";

}








echo $displayString;

?>
