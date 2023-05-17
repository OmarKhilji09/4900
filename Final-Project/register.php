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

<body>

<?php
$name = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];




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

  $sql = "INSERT INTO register_info (username, password,email) VALUES ('$name','$password','$email')"; 

  
 if($result = $mysqli->query($sql)){
echo "<h1> Sign up successfully. <br>
          Redirect To the Login page...<br>
          Press log in and then use your Email and passowrd to log in...</h1>";
          echo "<script>setTimeout(\"location.href = 'http://localhost:8888/login.html';\",5000);</script>";
        }
 else{
 echo "<h1> Error has accure, please try again <br> Your Email may have been regirstred already <br> Try to log in</h1>";
 echo "<script>  setTimeout(\"location.href = 'http://localhost:8888/register.html';\",5000);  </script>";
 }
 

  // $mysqli->close();

?>