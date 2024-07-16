<?php
session_start();
include "connect.php";

if (isset($_POST['email'])&& isset($_POST['pass'])){
  function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
}
$email = validate($_POST['email']);
$pass = validate($_POST['pass']);
if(empty($email)){
    header("Location: index.php?error=Email is required");
    exit();
}
else if(empty($pass)){
  header("Location: index.php? error=Password Required");
  exit();
}
$sql = "SELECT * FROM datas WHERE email='$email' AND pass='$pass'";
$result = mysqli_query($conn,$sql);
if (mysqli_num_rows($result)===1){
  $row = mysqli_fetch_assoc($result);
  if($row['email']=== $email && $row['pass']===$pass){
    echo "logged in";
    $_SESSION['email']=$row['email'];
    $_SESSION['user']=$row['user'];
    $_SESSION['pass']=$row['pass'];
    $_SESSION['number']=$row['number'];
    $_SESSION['model']=$row['model'];
    header("Location: home.php");
    exit();
  
  }
  else{
    header("Location: index.php?error=Incorrect email or password");
    exit();
  }
}
else{
  echo '<script>alert("wrong email or password")</script>';
  // header("Location: index.php");
}
?>