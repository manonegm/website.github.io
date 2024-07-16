<?php 
session_start();
$user = $_POST['user'];
$phone = $_POST["phone"];
$model = $_POST["model"];
include "connect.php";
$currentUser=$_SESSION['email'];
$sql = "UPDATE datas set user='$user',model='$model',phone='$phone' where email='$currentUser'";
if ( $conn -> query($sql)===TRUE){
header("Location: profile.html");
}
else{
 echo "error: ". $sql . "<br>" . $conn->error;
}
?>