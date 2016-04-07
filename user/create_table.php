<?php
if(isset($_POST["send"]))
{
create_table();
}
else
{
	create();
}
function create_table()
{
?>
<!doctype html>
<html lang="en">
 <head>
  <title>Document</title>
 </head>
 <body>
  <?php
  $bc="CREATE TABLE customer_details(
  carno INT(10) NOT NULL,
  telno BIGINT(25) NOT NULL)";
  $rt="CREATE TABLE login_details(
  username VARCHAR(20) NOT NULL,
  password VARCHAR(20) NOT NULL)";
  include("link.php");
  mysqli_select_db($link,"project_park");
  if(mysqli_query($link,$bc)==TRUE)
  echo "table creation successfull<br/>";
  else
  die(" unsuccessfull ".mysqli_error($link));
 mysqli_select_db($link,"project_park");
  if(mysqli_query($link,$rt)==TRUE)
  echo "table creation successfull<br/>";
  else
  die(" unsuccessfull ".mysqli_error($link));
  ?>
 </body>
</html>
<?php
}
  function create()
  {
  ?>
<!doctype html>
<html lang="en">
 <head>
  <title>Document</title>
 </head>
 <body>
<form action="" method="post">
<input type="submit" name="send" value="proceed creating table" />
</form>
</body>
</html>
<?php
  }
  ?>