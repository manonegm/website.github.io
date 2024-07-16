<?php
session_start();

if(isset($_SESSION['email'])&& isset($_SESSION['pass'])){


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mechanic Shop</title>
    <link rel="stylesheet" href="home.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,500&family=Ubuntu:ital,wght@1,300&display=swap" rel="stylesheet">
<link rel="icon" type="image/x-icon" href="car3.png">
<div class="background">
<video autoplay muted loop id="bg-video">
    <source src="Royalty_Stock_Footage_and_Video_Footage___Artlist.io_1.mp4" type="video/mp4">
</div>
<!-- <link rel="stylesheet" href="user.css"> -->
</head>
    <body>
        <div class="container">
        <header class="header">
        <nav class="navbar">
        </header><br><br><br><br><br><br><br><br>
        <div class="wrapper">
     <div class="clos clos0">
        <!-- <span class="topline">Hello</span> -->
        <h1><span class="multitext"> </span> </h1>
         <span class="hello home"><p> <h2 > Hello, if you are looking for a car maintenance site, you are in the right place!
        </h2></p>
        <h2>The maintenance services available on this website allow you to keep your vehicle safe and running at peak efficiency.</h2>
        <br>  <h2>You can also rely on our website to carry out periodic maintenance of your cars regularly, and save a lot of time and effort in searching for different maintenance centers in the city.
        </h2>
    </h2>
    </span>
        <div class="btns">
            <a style="text-decoration: none;" href="servies.html">
            <button>Our Services </button>
        </a> 
        <a href="About.html">
            <button>About us </button>
        </a>
        </div>
     </div>
     <div class="clos clos1">
        <div class="imgbox">
            <img src="#" alt="" id="splash">
            <img src="#" alt="">
        </div>
     </div>
     <div class="social-icons">
        <a href="https://www.linkedin.com" target="_blank"><i class='bx bxl-linkedin' ></i></a>
        <a href="https://www.facebook.com" target="_blank"><i class='bx bxl-facebook' ></i></a>
        <a href="https://www.instagram.com" target="_blank"><i class='bx bxl-instagram' ></i></a>
        <a href="https://twitter.com/i/flow/login" target="_blank"><i class='bx bxl-twitter' ></i></a>
        </div>
        </div>
        <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
        <script>
            var typingEffect = new Typed(".multitext",{
                strings : ["welcome!"],
                loop : false,
                typeSpeed:100,
                backSpeed: 80,
                backDelay: 1500
            })
        </script>
        <script src="user.js"> </script>
    </div>
</body>
</html>
<?php
}
else{
    header("Location: index.php");
    exit();
}
?>