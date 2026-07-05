<?php
 
/*
$username = $_POST["username"];

$password = $_POST["password"];

echo $username. "<br>";

echo $password. "<br>";


//MySQLi Object-Oriented

$localhost="localhost";
$username="root";
$password="";
$dbname="phpstarter1";

//pdo
//mysqli
$conn = new mysqli($localhost,$username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
*/
/*=====================================*/

//MySQLi Procedural

$localhost="localhost";
$username="root";
$password="";
$dbname="phpstarter1";


@$conn=mysqli_connect($localhost,$username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";



?>