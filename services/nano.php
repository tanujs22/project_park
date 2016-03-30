<?php
include("asf.php");
?>
<!doctype html>
<html lang="en">
 <head>
  <title>Document</title>
  <style type="text/css">
  .df{margin-left:40%;margin-top:5%;position:absolute;background-color:#dff4ff;padding:2%;font-size:1.5em;line-height:1.7em;}
  .fg{margin-left:40%;position:absolute;background-color:#0097e2;color:white;padding:2%;font-size:1.5em;}
  </style>
 </head>
 <body>
<h1 align="center"> User account page </h1>
<table class="fg">
<tr>
<th> Attributes</th>
<th> | </th>
<th>Credentials</th>
</tr>
</table>
  <table class="df">
  <tr>
  <td>First Name </td>
  <td> | </td>
  <td><?php echo $_SESSION["name1"]; ?></td>
  </tr>
   <tr>
  <td>Last Name </td>
  <td> | </td>
  <td><?php echo $_SESSION["name2"]; ?></td>
  </tr>
  <tr>
  <td>Phone </td>
  <td> | </td>
  <td><?php echo $_SESSION["phone"]; ?></td>
  </tr>
  <tr>
  <td>Car Model </td>
  <td> | </td>
  <td><?php echo $_SESSION["car1"]; ?></td>
  </tr>
  <tr>
  <td>Car Number </td>
  <td> | </td>
  <td><?php echo $_SESSION["car2"]; ?></td>
  </tr>
  </table>
 </body>
</html>
