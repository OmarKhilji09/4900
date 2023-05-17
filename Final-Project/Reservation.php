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
    
    <title> Reservation </title>
</head>
<body style="background-color: black;">

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

<div class="form">

<h1><b>Make a Reservation</b> </h1>


 <div class="glass">

   <form action="Reserve.php" method="post">
    <label for="name">Name: </label>
    <input  id="name" type="text" name="name" placeholder="First and Last name"  value="<?php  echo $_SESSION['secondMessage']; ?>"   required > 
  


    <label for="location">Location: </label>
    <select name="city" id="city" required >
      <option  value="none" selected disabled hidden>
        Select
      </option>
      <option   value="BayRidge" >Bay Ridge</option>
      <option   value="Brooklyn">Brooklyn</option>
  </select>
  

  <label for="Reservation">Reservation for</label>
   <label for="Reservation"><input id="SD" type="radio" name="number" value="Two" required> <i>2</i> </label>
   <label for="Reservation"><input id="FO" type="radio" name="number" value="Four" required> <i>4</i></label>
   <label for="Reservation"><input id="IT" type="radio" name="number" value="Five" required>   <i>5+</i> </label>
 
   
<label for="date"> Select date </label>
    <input type="date" name="date" required>


<label for="Time">Select Time </label>
<input type="time" name="time" required>

<label for="Email">Email: </label>
<input  type="email" name="email"  placeholder=" Forexample@something.com" value="<?php  echo $_SESSION['firstMessage']; ?>"   required >

<label id="after">Message:</label>  
<textarea name="message" placeholder="Enter Your Message Here" required></textarea>


  <input type="submit" id="submit" >
  <input type="reset" >
  </form>


 </div>





</div>






 <footer>Yemen Café & Restaurant © 2023 |Designed by Omar </footer>






    </body>

   
















</html>