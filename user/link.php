<!doctype html>
<html lang="en">
 <head>
  <title>Document</title>
 </head>
 <body>
  <?php
  $link=mysqli_connect("localhost","root","");
  if(!$link)
  die("could not connect to the database".mysqli_connect_error());

  if(!mysqli_set_charset($link,"utf8"))
  die("error in loading utf8 charset ".mysqli_error($link));
  ?>
 </body>
</html>
