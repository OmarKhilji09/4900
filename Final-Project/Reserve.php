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

<style>
body  { 
    background-image: linear-gradient(rgba(0,0,0,0.75),rgba(0,0,0,0.75)), url(img/b1.png);
    background-attachment: fixed;
    background-repeat: no-repeat;
    background-position: center ;
    background-size: cover;
    height: 100%;
    width: 100%;
    

}
h1 {

  text-align: center;
  color: white;
  margin-top: 20%;

}
</style>



<?php

$name = $_POST['name'];

$location = $_POST['city'];

$number = $_POST['number'];

$date = $_POST['date'];

$time = $_POST['time'];

$email = $_POST['email'];

$message = $_POST['message'];




$db_host = 'localhost';
  $db_user = 'root';
  $db_password = 'root';
  $db_db = 'mydb';

  $mysqli = new mysqli(
    $db_host,
    $db_user,
    $db_password,
    $db_db,
  );
  if ($mysqli->connect_error) {
    echo 'Errno: '.$mysqli->connect_errno;
    echo '<br>';
    echo 'Error: '.$mysqli->connect_error;
    exit();
  } 

 
  $sql = "INSERT INTO resv_info (name, location, number, date, time, email, message) VALUES ('$name','$location','$number','$date','$time','$email','$message')"; 

 if($result = $mysqli->query($sql))
     session_start();
  else
     {
      echo "Error has accure, please try again";
      echo "<script>setTimeout(\"location.href = 'http://localhost:8888/index.html';\",5000);</script>";}


    if (isset($_SESSION['secondMessage'])){
    echo "<h1> Your reservation is completed <br>
          We looking forward to see you <br>";
    echo "<script>setTimeout(\"location.href = 'http://localhost:8888/index.php';\",5000);</script>";}
   
  else{
    echo "<h1> Your reservation is completed <br>
          We looking forward to see you <br>";
    echo "<script>setTimeout(\"location.href = 'http://localhost:8888/index.html';\",5000);</script>";}

 
?>



</body>


</html>