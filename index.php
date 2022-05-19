<?php
include 'php/header.php';

echo "welcome";
$servername = "localhost";
$username = "root";
$password = "";
$db = "projetperpignan";
$dbhost="localhost";
$connexion = mysqli_connect('localhost', $username, $password);
mysqli_select_db($connexion, $db); 

echo("");
include 'php/map.php';





include 'php/footer.php';
?>
