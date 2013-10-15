<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>sign_in</title>
<style type="text/css">
<!--
.style1 {color: #F0F0F0}
body {
	background-color:#0000FF;
}
.style4 {
	color: #FF0000;
	font-weight: bold;
}
.style6 {color: #0000FF; font-weight: bold; }
.style8 {color: #0000FF; font-weight: bold; font-size: 18px; }
-->
</style>
</head>

<body>

<center>
  <p><strong> <img src="sign_in.jpg" alt="home" width="1069" height="283" /> </strong></p>
  <p class="style4">LOG IN HERE     </p>
</center>
<form action="sign_in.php" method="post">
<table width="286" border="4" align="center" bordercolor="#CCCCCC">
  <tr>
    <td width="110" bgcolor="#CCFFCC"><span class="style8">USERNAME</span></td>
    <td width="158"><input name="username" type="text" id="username" /></td>
  </tr>
  <tr>
    <td bgcolor="#CCFFCC"><span class="style6">PASSWORD </span></td>
    <td><input name="password" type="password" id="password" /></td>
  </tr>
  <tr bgcolor="#CCFFCC">
    <td colspan="2">
      <div align="center">
        <input name="sign_in" type="submit" id="sign_in" value="Log In" />
      </div></td>
    </tr>
</table>

<span class="style1"></span>
</form>


</body>
</html>


<?php
	
$con=mysql_connect("localhost","root","") or die (mysql_error());
$db=mysql_select_db('my_db',$con) or die (mysql_error());
if(isset($_POST['sign_in']))
{
 $username=$_POST['username'];
 $password=$_POST['password'];
	if($username==''){
	echo "<script>alert('Please Enter your Username')</script>";
	exit();
	}
	if($password==''){
	echo "<script>alert('Please Enter your password')</script>";
	exit();
	}

$query="SELECT * FROM user_reg WHERE Name='$username' and Password='$password'";
$run=mysql_query($query) or die (mysql_error());
if(mysql_num_rows($run)>0)
   { 
	$_SESSION['username'] == $myusername;
	echo "<script>alert('welcome...!!!')</script>";
    header("location:menu.php");
   }
   
else
 {
 echo '<font color="red" size="5"><center> USERNAME OR PASSWORD IS WRONG OR NOT SIGNED UP </center></font>';
 } 
 }
?>
 