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

<div class="about-menu">
    <h1>Our Menu</h1>

</div> 

<div class="about-menu-content">
    <h1>
        ᚔ We Cater For All Occasions ᚔ
    </h1>
    <div class="underline"></div>

    <p>Appetizers - *ALL APPETIZERS DO NOT INCLUDE SOUP OR SALAD*</p>
        <p>Lamb & Poultry - *ALL ENTREES ARE SERVED WITH SOUP AND A SMALL HOUSE SALAD*</p>
        <p>Lamb (Lunch) & Poultry (Lunch) - *Hours 11AM-3PM MO-FRI*</p>

</div>

<div class="menu-row">

    <div class="menu-gallery">
        <img src="img/Menu/menu-item/Hummus.jpg" alt="menu-item">
        
        <div class="menu-gallery-dec">
        <h2>Hummus<span>9.95$</span></h2>
        <hr>
        <p>Pure chicken peas, sesame batter, olive oil, served with bread.</p>
    </div>

    
    </div>

    <div class="menu-gallery">
        <img src="img/Menu/menu-item/Leham-Segar.jpg" alt="menu-item">
        
        <div class="menu-gallery-dec">
        <h2>Leham Segar (Small Sauteed Lamb)<span>15.95$</span></h2>
        <hr>
        <p>Minced lamb, sauteed with onions, tomatoes, and Yemeni spices served with bread.</p>
    </div>

    
    </div>

    
</div>


<div class="menu-row">

    <div class="menu-gallery">
        <img src="img/Menu/menu-item/Kibdah.jpg" alt="menu-item">
        
        <div class="menu-gallery-dec">
        <h2>Kibdah (lamb liver) <span>14.95$</span></h2>
        <hr>
        <p>Sauteed cubed of lamb liver, with onions, tomatoes served with our clay oven bread.</p>
    </div>

    
    </div>

    <div class="menu-gallery">
        <img src="img/Menu/menu-item/Fatah-Honey.jpg" alt="menu-item">
        
        <div class="menu-gallery-dec">
        <h2>Fatah With Honey <span>11.00$</span></h2>
        <hr>
        <p>Yemeni style sliced bread, honey, and butter.</p>
    </div>

    
    </div>

    
</div>

<div class="menu-row">

    <div class="menu-gallery">
        <img src="img/Menu/menu-item/Chicken-with-Hummus.jpg" alt="menu-item">
        
        <div class="menu-gallery-dec">
        <h2>   Hummus with Chicken <span>16.95$</span></h2>
        <hr>
        <p>Minced chicken, sauteed with onions, tomatoes, and Yemeni spices dressed with Hummus.</p>
    </div>

 

    </div>

    <div class="menu-gallery">
        <img src="img/Menu/menu-item/Lamb-with-Hummus.jpg" alt="menu-item">
        
        <div class="menu-gallery-dec">
        <h2>Hummus With Lamb  <span>16.95$</span></h2>
        <hr>
        <p> Minced lamb, sauteed with onions, tomatoes, and Yemeni spices dressed with Hummus.

        </p>
    </div>

    
    </div>

    
</div>


<div class="menu-row">

    <div class="menu-gallery">
        <img src="img/Menu/menu-item/Lamb-Saltah.jpg" alt="menu-item">
        
        <div class="menu-gallery-dec">
        <h2>  Saltah <span>26.95$</span></h2>
        <hr>
        <p>A Fresh assorted root vegetable stew served in a bubbling hot clay bowl topped with a tangy whipped Fenugreek.  </p>
    </div>

 

    </div>

    <div class="menu-gallery">
        <img src="img/Menu/menu-item/Fahsa.jpg" alt="menu-item">
        
        <div class="menu-gallery-dec">
        <h2> Fahsah  <span>16.95$</span></h2>
        <hr>
        <p> Traditional Saltah combined with shredded lamb & served bubbling hot in a clay bowl with a warm clay oven bread.
        </p>
    </div>

    
    </div>

    
</div>

<div class="menu-row">

    <div class="menu-gallery">
        <img src="img/Menu/menu-item/Chicken-Haneeth.jpg" alt="menu-item">
        
        <div class="menu-gallery-dec">
        <h2> Chicken Haneeth <span> 16.95$ </span></h2>
        <hr>
        <p> Slow oven roasted chicken.
            </p>
    </div>
  
    
    </div>

    <div class="menu-gallery">
        <img src="img/Menu/menu-item/Kabsa-Lamb.jpg" alt="menu-item">
        
        <div class="menu-gallery-dec">
        <h2>  Kabsa Lamb
        <span>26.95$</span></h2>
        <hr>
        <p>Boneless lamb sauteed with long grain basmati rice, scallion & parsley.

        </p>
    </div>

 

    </div>

  

    
</div>



   
    


    



<footer>Yemen Café & Restaurant © 2023 |Designed by Omar </footer>

</body>

</html>