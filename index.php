<?php
include 'html/index.html';

echo "welcome";
$servername = "localhost";
$username = "root";
$password = " ";
$db = "projetperpignan";
try {
   $dbh = new PDO('mysql:host=localhost;dbname=projetperpignan', $username, $password);

   // set the PDO error mode to exception
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   echo "Connected successfully";
   }
catch(PDOException $e)
   {
   echo "Connection failed: " . $e->getMessage();
   }
echo "hi";
?>
