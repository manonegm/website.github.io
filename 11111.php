<?php
$servername = "localhost";
$username = "root";
$password ="";

// $connection = mysqli_connect("localhost","root","","user data");
// echo "connected suc  cessfully";
// if (!$connection ){
// echo "ffff".mysqli_connect_error();
// }
try {
    $conn = new PDO("mysql:host=$servername;dbname=user data",$username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch(PDOException $e){
    echo "Connection failed:". $e->getMessage();
}
?>