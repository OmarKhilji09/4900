<?php 
session_start();
if(!isset($_SESSION['secondMessage']))
{
    echo " <div  style ='height: 800px; background-color: #444;'> <h1 style ='text-align: center; color: white;  background-color: #444;'> You're trying to acess a page for sign up users only '<br>' 
               Redirect To the Main page...</h1></div>'<script>setTimeout(\"location.href = 'http://localhost:8888/index.html';\",5000);</script>' </body";
} 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon " type="image/png" href="img/favicon.png">
    
    <title>Yemen Restaurant Cafe </title>
</head>

<body style="background-color: rgb(0, 0, 0);">



<div class="intro"></div>
<header>
    <nav>
    <ul>
        <li><a href="index.php">About us</a> </li>
        <li><a href="locations.php"> Locations</a></li>
        <li><a href="menu.php"> Menu</a></li>
        <li><a href="Reservation.php">Reservation</a></li>
        <li><a href="Services.php">Services</a></li>

        <li><?php  echo "Welcome ".strtoupper($_SESSION['secondMessage']);  ?></li>

        <li><a href="logout.php">Log Out</a></li>
        
    </ul>
    </nav>

</header> 

<h1 style="text-align: center; padding: 40px;">Our Locations</h1>
<div style="padding:40px">
<div class="locations">
    <div class="locations-gallery1">
    <h1>Bay Ridge</h1>
        
    </div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48446.49958608576!2d-74.05684292089843!3d40.63194999999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2455a77f103c9%3A0xdcf43630b1ce78e!2sYemen%20Cafe!5e0!3m2!1sen!2sus!4v1618744117414!5m2!1sen!2sus" width="50%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
  </div>
 

<div class="locations">
  <div class="locations-gallery2">
      <h1>Downtown Brooklyn</h1>
    </div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48404.464023646084!2d-74.02871352089848!3d40.6898526!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a4f9db71013%3A0x76bf7d6bdcee080!2sYemen%20Caf%C3%A9%20%26%20Restaurant!5e0!3m2!1sen!2sus!4v1618744207543!5m2!1sen!2sus" width="50%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>


</div>

</div>



<footer>Yemen Café & Restaurant © 2023 |Designed by Omar </footer>


</body>

</html>

