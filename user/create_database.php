<!doctype html>
<html lang="en">
 <head>
  <title>Document</title>
 </head>
 <body>
<?php
$a="CREATE DATABASE project_park";
include("link.php");
if(mysqli_query($link,$a)==TRUE)
echo "db creation successfull";
?>
<a href="http://localhost/create_table.php"> proceed creating the table </a>
 </body>
</html>
