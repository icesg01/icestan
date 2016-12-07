<?php


session_start();

$user = "sice";
$password = "7904063";


$id = $_GET['id'];


$db = new PDO ("mysql:host=localhost;dbname=sice", "$user", "$password");

$select = $db->prepare("SELECT * FROM time_slot WHERE id = ?");

$select->execute(array($id));

$delete = $db->prepare("DELETE FROM time_slot WHERE id = ?");

$delete->execute(array($id));

$results = $select->fetch(PDO::FETCH_ASSOC);
$displayString = "";


$day = substr($results['id'], 0, strlen($results['id']) - 1);
$weekNumber = substr($results['id'], strlen($results['id']) - 1, strlen($results['id']));


$displayString .= "<input onclick=\"secureTime('{$day}','{$weekNumber}','{$results['color']}','{$results['name']}','{$results['timesselected']}')\" type=\"checkbox\" />";

echo $displayString;
?>
