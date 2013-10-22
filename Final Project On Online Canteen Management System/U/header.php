<?php
if(isset($_SESSION['type']))
$role=$_SESSION['type'];
else
{
	$role=0;
}
if(isset($_SESSION['user']))
$user=$_SESSION['user'];
else
	$user="";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-stri.ct.dtd">
<html>
<head>
<title>NITT CANTEENS</title>
<link rel="stylesheet" type="text/css" href="style/style.css" media="screen" />
<style type="text/css">
<!--
.style3 {color: #0033CC}
.style4 {font-size: 1.2em}
body {
	background-color: #F5F5F5;
}
-->
</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" /></head>
<body>
<div id="header" >
<table width=100%">
<tr>
<td><div style="padding-left:100px;" align="right"><img src="images/logo1.jpg" alt="Logo" width="60" height="55" /></div></td>
<td style="padding-left:20px; max-width:500px;" align="center"><h1><span class="style3">National Institute of Technology</span><br/>
</h1><h2 style="color:blue;"> <span class="style4">Tiruchirappalli-620015</span><br/>
</h2><h3><font color=  color="#CC66FF" >NITT CANTEENS</h3></td>
<td align="left" ><b>Welcome <span style="text-decoration:underline; font-size: large;"><?php echo $user;?></span>,</b><font color="#FF0000" >&nbsp;Enjoy the service.</font></td>
</tr>
</table>
<div id="menu">
  <ul id="nav">
  <?php
  
   if($role==1)
   echo '<li><a href="index.php">HOME</a></li>';
   if($role==1)
   echo '<li><a href="meenakshi.php">MEENAKSHI</a></li>';
   if($role==1)
   echo '<li><a href="vasantham.php">VASANTHAM</a></li>';
   if($role==1)
   echo '<li><a href="buhari.php">BUHARI</a></li>';
   if($role==1)
   echo '<li><a href="feedback.php"><font color="">FEEDBACK</a></font></li>';
    if($role==2)
   echo '<li><a href="canteen.php">HOME</a></li>';
    if($role>=1)
   echo '<li><a href="logout.php">Logout</a></li>';
   
   echo '';
    ?>
   
   </ul>
 </div>
</div>