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
    <script src="js.js"></script>
    <title> Register </title>
    
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

<!-- <div class="form"> -->


    <table class="tb2">

<tr>
<th colspan="2"> 
 <h1>Split Bill Claculator</h1>
</th>
</tr>

<tr>
<td>
<label for="The total Amount">Total Amount </label> 
</td>

<td>
<input type="text" id="amount" placeholder="Enter the bill Amount">
</td>

</tr>



<tr>
<td>
<label for="The total Amount">How Many Persons will pay </label>
</td>
<td>
<input type="text" id="persons" placeholder="Enter How Many Persons will pay">
</td>
</tr>

<tr>
<td colspan="2">
<h1 id="split_result"></h1>
</td>
</tr>


<tr>
<td colspan="2">
<button onclick="split_bill()">Claculate</button>
</td>
</tr>

</table>
<br>
<br>






<div class="tb2">
    <table>
        <tr>
            <th>
                Time and Date
            </th>
        </tr>
        <tr>
            <td>You need to use keyboard to diplay info</td>
        </tr>
        <tr>
            <td>
            <button onkeypress="show_date()" >Click Me Then Press any keyboard Key</button>
        </td>
        </tr>
        <tr>
            <td>
                <p id="time"></p>
            </td>
        </tr>
    </table>


</div>












 <footer>Yemen Café & Restaurant © 2023 |Designed by Omar </footer>






    </body>

   
















</html>