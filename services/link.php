<!doctype html>
<html lang="en">
 <head>
  <title>Document</title>
 </head>
 <body>
  <?php
  $link=mysqli_connect("localhost","root","");
  $char=mysqli_set_charset($link,"utf8");
  if(!$link)
  {
  die("could not connect to the server".mysqli_connect_error($link));
  if(!$char)
	  {
  die("error loading charset utf8".mysqli_error($link));
	  }}
  ?>
 </body>
</html>
