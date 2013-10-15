<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Sign Up Page</title>
<style type="text/css">
<!--
.style3 {
	color: #0033CC;
	font-weight: bold;
}
.style4 {
	color: #990000;
	font-weight: bold;
}
body {
	background-color:#0000FF;
}

-->
</style>
</head>

<body><center>
  <p><strong> <img src="sign_in.jpg" alt="home" width="1069" height="283" /> </strong></p>
  <p class="style4">SIGN UP HERE     </p>
</center>

<form action="sign_up.php" method="post">
<table width="297" border="1" align="center">
  <tr>
    <td width="113" bordercolor="#0000FF" bgcolor="#99FFCC"><span class="style3">User Name </span></td>
    <td width="168"><input name="u_name" type="text" id="u_name" /></td>
  </tr>
  <tr>
    <td bordercolor="#0000FF" bgcolor="#99FFCC"><span class="style3">Roll No </span></td>
    <td><input name="roll" type="text" id="roll" /></td>
  </tr>
  <tr>
    <td bordercolor="#0000FF" bgcolor="#99FFCC"><span class="style3">DOB</span></td>
    <td><input name="dob" type="text" id="dob" /></td>
  </tr>
  <tr>
    <td bordercolor="#0000FF" bgcolor="#99FFCC"><span class="style3">Branch</span></td>
    <td><input name="branch" type="text" id="branch" /></td>
  </tr>
  <tr>
    <td bordercolor="#0000FF" bgcolor="#99FFCC"><span class="style3">Department</span></td>
    <td><input name="dept" type="text" id="dept" /></td>
	</tr>
	<tr>
	 <td bordercolor="#0000FF" bgcolor="#99FFCC"><span class="style3">Mobile</span></td>
    <td><input name="mob" type="text" id="mob" /></td>
  
  </tr>
  <tr>
    <td bordercolor="#0000FF" bgcolor="#99FFCC"><span class="style3">Password</span></td>
    <td><input name="u_pass" type="password" id="u_pass" /></td>
  </tr>
  <tr>
    <td bordercolor="#0000FF" bgcolor="#99FFCC"><span class="style3">Email</span></td>
    <td><input name="email" type="text" id="email" /></td>
  </tr>
  
  <tr bordercolor="#0000FF" bgcolor="#99FFCC">
    <td colspan="2"><div align="center"><strong>
      <input type="submit" name="Submit" value="Sign Up" />
    </strong></div></td>
    </tr>
</table>


</form>
</body>
</html>
<?php
$con=mysql_connect("localhost","root","") or die (mysql_error());
$db=mysql_select_db('my_db',$con) or die (mysql_error());


		if(isset($_POST['Submit']))
		{
		$name=$_POST['u_name'];
		$roll=$_POST['roll'];
		$dob=$_POST['dob'];
		$branch=$_POST['branch'];
		$dept=$_POST['dept'];
		$mob=$_POST['mob'];
		$pass=$_POST['u_pass'];
		$email=$_POST['email'];
		
		if($name=='')
		{
		echo"<script>alert('Enter your name')</script>";
		exit();
		}
		if($roll=='')
		{
		echo"<script>alert('Enter your name')</script>";
		exit();
		}
		if($dob=='')
		{
		echo"<script>alert('Enter your name')</script>";
		exit();
		}
		if($branch=='')
		{
		echo"<script>alert('Enter your name')</script>";
		exit();
		}
		if($dept=='')
		{
		echo"<script>alert('Enter your name')</script>";
		exit();
		}
		if($mob=='')
		{
		echo"<script>alert('Enter your name')</script>";
		exit();
		}
		if($pass=='')
		{
		echo"<script>alert('Enter your name')</script>";
		exit();
		}
		if($email=='')
		{
		echo"<script>alert('Enter your name')</script>";
		exit();
		}
		else
		{
		$que="Insert into user_reg(Name,Roll_No,DOB,Branch,Department,Mobile,Password,Email) values('$name','$roll','$dob','$branch','$dept','$mob','$pass','$email')";
		if(mysql_query($que))
		{
		echo"<script>alert('Registration Sucessful')</script>";
		echo"<script> window.open('home.php','_self')</script>";
		}}}
?>

