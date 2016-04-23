<!doctype html>
<html lang="en">
 <head>
 <title>Document</title>
 <style type="text/css">
 .aafg{color:white;background-color:#2f2fff;font-family:'Times New Roman';padding:2%;border:1px solid #2f2fff; text-align:center;box-shadow:8px 8px #bcbcbc;margin:1px 1px 1px 1px; };
 #abs{};
 </style>
 </head>
 <body>
  <h1 class="aafg" > Admin Registration </h1>
  <?php
  if(isset($_POST["sub"]))
  {
	  $a=trim($_POST["pass"]); $b=trim($_POST["confirm_pass"]); $c=trim($_POST["mail-id"]);$d=trim($_POST['first']); $e=trim($_POST["last"]);
	   
	  if(!filter_var($c,FILTER_VALIDATE_EMAIL))
	  {
		  echo "<p style='font-size:1.5em;color:red;text-align:center'>* E-mail format is wrong</p>";
	  if($a!=$b)
	  {
		  echo "<p style='font-size:1.5em;color:red;text-align:center'>* There is a mismatch of password</p>";
	  }
	  
	  }
	  
	  else
	  {    
		  $query="INSERT INTO create_admin(name,DOB,email,password,confirm)VALUES('$d','$e','$c','$a','$b')";
		  include("link.php");
          mysqli_select_db($link,"admin");
		  if(!mysqli_query($link,$query))
			    echo "<p style='font-size:1.5em;color:red;text-align:center'>* Username already exists</p>";
		  else
                echo "<p style='font-size:1.5em;color:#00de6f;text-align:center'>* Registered successfully</p>";
	  }
  }
  ?>
  <form action="" method="post">
  <div  style="background-color:#e0e0e0;margin-top:1em;padding:5%;margin-left:35%;position:absolute;font-family:'Times New Roman'">
  <div style="background-color:#e0e0e0;padding:3%;">
  <label>  Name </label><br/>
  <input type="text" name="first" style="border-style:solid;border-color:white;padding:2%;" placeholder="FIRST NAME" size="35" value=""/><br/>
  </div>
  <div style="background-color:#e0e0e0;padding:3%;">
  <label> DOB (YYYY-DD-MM)</label><br/>
  <input type="text" name="last" style="border-style:solid;border-color:white;padding:2%;" placeholder="LAST NAME" size="35"  value=""/><br/>
  </div>
  <div style="background-color:#e0e0e0;padding:3%;">
  <label> E-mail Id </label><br/>
  <input type="text" name="mail-id" style="border-style:solid;border-color:white;padding:2%;" placeholder="E-MAIL" size="35" value=""/><br/>
  </div>
  <div style="background-color:#e0e0e0;padding:3%;">
  <label> Password </label><br/>
  <input type="password" name="pass" style="border-style:solid;border-color:white;padding:2%;" placeholder="PASSWORD" size="35" value=""/><br/>
  </div>
  <div style="background-color:#e0e0e0;padding:3%;">
  <label> Confirm Password </label><br/>
  <input type="password" name="confirm_pass" style="border-style:solid;border-color:white;padding:2%;" placeholder=" CONFIRM" size="35" value=""/><br/>
  </div>
  <div style="background-color:#e0e0e0;padding:3%;">
  <input type="submit" name="sub" value="Send" style="background-color:#00ffff;color:white;padding-left:35%;padding-right:35%;padding-top:3%;padding-bottom:3%; display:block;border:1px solid #e0e0e0;font-size:1.2em;font-family:'Times New Roman';margin-left:20px;"/>
  </div>
  </div>
  </form>
  
   </body>
</html>
