<?php
echo('<script src="https://requirejs.org/docs/release/2.3.5/minified/require.js"></script>
');

include 'html/index.html';

echo "welcome";
$servername = "localhost";
$username = "root";
$password = "";
$db = "projetperpignan";
$dbhost="localhost";
$conn = new mysqli($dbhost, $username,$password,$db) or die("Connect failed: %s\n". $conn -> error);

echo "hi";
?>
