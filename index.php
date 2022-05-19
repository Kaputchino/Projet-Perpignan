<?php
include 'html/index.html';
echo "welcome";
$servername = "localhost";
$username = "root";
$password = "";
$db = "projetperpignan";
$dbhost="localhost";
$connexion = mysqli_connect('localhost', $username, $password);
mysqli_select_db($connexion, $db); 

$userId="0";
$request="SELECT * FROM `trips` WHERE `idUser`="."0";
$result = mysqli_query($connexion, $request); 
foreach($result as $value){
   print_r($value);
   $requestFirst="SELECT * FROM `stations` WHERE `id`=".$value["idFirstStation"];
   $resultFirst = mysqli_query($connexion, $requestFirst); 
   foreach ($resultFirst as $valueFirst){
      echo("adaptedDrawMarker(".$valueFirst.")");
   }
}
?>