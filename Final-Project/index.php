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
<body>

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

<div  class="about-us">


    <h1>
        OUR STORY
    </h1>
  
</div> 

 <div class="about-us-content">
    <hr>

   
    <p>Yemen Café and Restaurant was established in 1986.
       We serve authentic Yemeni food. Our cuisine is well known for its flavor,
        freshness, and use of spices. Cultural platters are our signature, hospitality and gratitude are our nature.
         The restaurant has a warm casual atmosphere, which makes it an original and satisfying place for our customers. Our menu features a wide array of great selections served in generous portions.
          You can decide to eat in or take to eat out.</p>

        <p>Despite the expectation of red meat bliss -- 
        chops and fresh fish are also on the menu for anyone who thinks he or she has been steered in the wrong direction.
         Yemen Café and Restaurant is upscale, but never uptight, with a welcoming neighborhood vibe and outstanding service that keeps locals coming back and visitors raving.</p>
         <hr>
</div>

<div class="about-us-Gallery">
    <img src="img/first.jpg">
    <h1>The First Yemeni Restaurant in the United States.</h1>
</div>

<div class="about-us-Gallery">
    <h1>Village Voice rated Yemen Cafe #13 out of 15,000 Restaurants.</h1>
    <img src="img/second.jpg">
</div>
<hr>

<div class="Reviews">
    <h1>Reviews </h1>
    <hr>
    <p>"Been eating here all my life.
         Best Yemeni food in Brooklyn I wouldn’t go anywhere else.
         I always get the chicken haneeth and the lamb fahsah and hummus.
          Delicious! Don’t forget the pita!"<br>
        &#9733;&#9733;&#9733;&#9733;&#9733;|Serena Muhammed</p>

        <hr>
        <p>"There are some places that don’t need reviews to attract customers.
             I believe in the restaurant, I believe in their food.
              There is more to than just saying I love their food.
               It is a heavenly experience."<br>
            &#9733;&#9733;&#9733;&#9733;&#9733;|Raihan Chisty</p>
            <hr>
            <p>"You can't go wrong when ordering Haneeth.
                 Also, the liver "Kebdah" is amazing, you must try it!"<br>
                 &#9733;&#9733;&#9733;&#9733;&#9733;| Khaled Saleh</p>
</div>

<hr> 

<div class="locations">
    <div class="locations-gallery1">
    <h1><a href=locations.html>Bay Ridge </a></h1>
    
  </div>
  
  <div class="locations-gallery2">
      <h1><a href=locations.html>Brooklyn</a></h1>

 
    </div>

</div>
<footer>Yemen Café & Restaurant © 2023 |Designed by Omar </footer>
</body>



</html>





