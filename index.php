<?php
include 'html/index.html';

echo "welcome";
$servername = "localhost";
$username = "root";
$password = "";
$db = "projetperpignan";
$dbhost="localhost";
$conn = new mysqli($dbhost, $username,$password,$db) or die("Connect failed: %s\n". $conn -> error);
$userId="0";
$request="SELECT * FROM `trips` WHERE `idUser`="."0";
echo $request;
$stmt=$db->prepare($request);
$stmt->execute();
$res=$stmt->get_result()->fetch_assoc();
foreach($db->query($request) as $row) {
   print_r($row);
}
?>
