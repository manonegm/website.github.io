<?php

$newpass = $_POST["new"];
$oldpass = $_POST["old"];


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user data";

$conn = new mysqli($servername,$username,$password,$dbname);

if ($conn->connect_error){

    die("connection field : " . $conn->connect_error );
}
$sql = "UPDATE datas SET pass ='$newpass' WHERE pass='$oldpass' ";
// i used the email instead of id bec email is our primary key
if ($conn->query($sql)=== TRUE)  {
   echo "record updated successfully";
} 
else{
    echo "error updating record : " . $conn->error;
}

$conn->close()
?>