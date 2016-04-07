<?php
session_start();
?>
<!doctype html>
<html lang="en">
 <head>
  <title>Document</title>
 </head>
 <body>
  <?php
    define("user","admin");
	define("pass","12345");
  
  include("link.php");
  $username=mysqli_real_escape_string($link,$_POST["username"]);
  $password=mysqli_real_escape_string($link,$_POST["password"]);
  $pass=md5($password);
  $as="INSERT INTO login_details(username,password)VALUES('$username','$pass')";
  $rn="SELECT username and password FROM login_details WHERE username='user' and password='pass'";
  mysqli_select_db($link,"project_park");
  if(mysqli_query($link,$as)==FALSE)
  die("unsuccessfull ".mysqli_error($link));
  if(mysqli_query($link,$rn)==TRUE)
  {
	  echo "Thank you ".user." for registering ";
  }
  
?>
 </body>
</html>
