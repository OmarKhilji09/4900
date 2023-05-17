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

  $sql = "SELECT username, password, email FROM register_info Where password = '$password' AND email = '$email' ";




 if($result = $mysqli->query($sql))
  $row_cnt = $result->num_rows; // get how many rows the qeury returned
else{
  echo "Something went wrong when trying to fetch the data"."<br>";
  exsit();
}

 if($row_cnt == 0){
  echo "<h1>"."Wrong email or password"."<br>".
     " If you don't sign up yet you can go to sign up page and create account there"."</h1>";
  echo "<script>setTimeout(\"location.href = 'http://localhost:8888/login.html';\",5000);</script>";
  
 }
 elseif ($row_cnt >= 2)
 {
  echo "Your data is duplicated in the database, please conact us to fix this problem "."<br>";
       "<script>setTimeout(\"location.href = 'http://localhost:8888/login.html';\",5000);</script>";
 }
 elseif ($row_cnt==1)
 {

  $getname = $result->fetch_assoc();
  $getname = $getname['username'];

  session_start();
  $message1 = $email ;
  $message2 = $getname;
  $_SESSION['firstMessage'] = $message1;
  $_SESSION['secondMessage'] = $message2;

  echo "<h1>"."Sign in Successfully."."<br>"
       ."Welcome ".strtoupper($_SESSION['secondMessage'])."<br>"
       ."Redirect To the Main page..."."</h1>"."<br>";


  echo "<script>setTimeout(\"location.href = 'http://localhost:8888/index.php';\",5000);</script>";

  
 }
 


//  echo "<h1>"."Sign in Successfully."."</h1>"."<br>";
//  echo "<h1>"."Welcome ".strtoupper($_SESSION['secondMessage'])."</h1>"."<br>";
//  echo "<h1>"."Redirect To the Main page..."."</h1>"."<br>";
//  echo "<script>setTimeout(\"location.href = 'http://localhost:8888/index.php';\",1000);</script>";



  
 // $mysqli-> set_charset ( 'utf8' );

  // while ($row = $result->fetch_assoc()) {
  //   printf("%s %s \n", $row["email"], $row["password"]);
 

// while ($row = $result->fetch_assoc()) {
//   $active = $row['password'];
//   $contact = $row['email'];
// echo "The email is ".$contact.": ";
// echo "The password is ".$active."<br>";
// }

// echo "It skipped the above";

// $values = "SELECT `username`, `email` FROM `register_info` WHERE  email = '$email'";
// if($mysqli->query($values))
// {
//   echo "Welcome".$valuse;
// }
// else
// echo "Error while trying to fetch the valuse!!";



 


// echo "<script>setTimeout(\"location.href = 'http://localhost:8888/index.php';\",5000);</script>";

  // $mysqli->close();

?>



</body>


</html>