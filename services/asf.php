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
  if(isset($_POST["submitvalue"]))
  {
$_SESSION["name1"]=$_POST["First_name"];
  $_SESSION["name2"]=$_POST["Last_name"];
  $_SESSION["mail"]=$_POST["E-mail_id"];
  $_SESSION["phone"]=$_POST["Phone_number"];
  $_SESSION["car1"]=$_POST["Car_Model"];
  $_SESSION["car2"]=$_POST["Car_number"];
  echo "data insertion successfull<br/>";
  ?>
 <a href="login.html"> Proceed to login </a>
  <?php
  }
  
  else if(isset($_POST["login"]))
  {
	if(isset($_POST["nf"]))
	  {
        if($_SESSION["mail"]==$_POST["nf"])
		  {
			echo "you have successfully logged in";
			header("Location:nano.php");
		  }
		  else
		  {
			  echo "invalid user.... Please Register first<br/>";
		  }
	  }
  }
  ?>
 </body>
</html>
