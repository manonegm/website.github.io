<?php

session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user data";

$conn = new mysqli($servername,$username,$password,$dbname);

if ($conn->connect_error){

    die("connection field : " . $conn->connect_error );
}

$currentUser=$_SESSION['email'];

$sql = "DELETE  from datas WHERE email='$currentUser' ";
// i used the email instead of id bec email is our primary key
if ($conn->query($sql)=== TRUE)  {
   header("Location:index.php");
} 
else{
    echo "error updating record : " . $conn->error;
}

$conn->close()
?>