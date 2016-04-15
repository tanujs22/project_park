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
  $rt=$_POST["mailid"];$cv=$_POST["pass"];
  $uni=sha1(uniqid($rt,TRUE));
  $_SESSION["id"]=$uni;
  include("link.php");
  $e="INSERT INTO login2(token,user,password)VALUES('$uni','$rt','$cv')";
  mysqli_select_db($link,"login");
  if(!mysqli_query($link,$e))
  die(" unsuccessfull ".mysqli_error($link));
  $url='<a href="http://localhost/verify.php ?token=$uni">click</a>';
  $message=" Thank you for signing up at our site.
  Please go to ".$url." to verify ";
  mail($rt,"account validation",$message);
  ?>
 </body>
</html>
