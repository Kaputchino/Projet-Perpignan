
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">  
    <title>Projet Perpignan</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css"
    integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ=="
    crossorigin=""/>
    <link rel="stylesheet" href="css/map.css">


 
</head>
<body>


    <div id="mapRail">

    </div>
    <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js" integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og==" crossorigin=""></script>
    <script type="text/javascript" src="js/map.js"></script>
    <?php 
      echo(
         "
         "
      );
    
    
    
    ?>

    
</body>




</html>


<?php

//include 'html/index.html';

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
