<?php
require_once('functions.php');
secure(1);
require_once('conn.php');
if($_SESSION['type']==2)
header("Location: canteen.php");


?>
<?php require_once('header.php') ?>
<style type="text/css">
<!--
.style1 {font-size: 24px}
.style2 {font-size: 24}
.style4 {
	font-size: 24;
	font-weight: bold;
	color: #CC00FF;
}
-->
</style>

<div id="content">

<div id="right" style="font-size:15px; color: black; text-align: left;">
    <center><h1 style="color:  maroon">NITT ONLINE CANTEENS FOR FOODS</h1></center><br/>
    <p>Here we provide the online canteen facility in the NITT campus.<br/>
This facility is for private canteens in the NITT campus which are Meenakshi Bhawan,Buhari and Vasantham. <br/>
Usually People have to go to canteen and order the foods and they have to  wait in queue for a long time to get the orders.<br/>
</p>

<p>
    
    But with the help of this you just have to follow a very simple process to order your stuffs.<br/>
    And you need not to wait in the long queue, you can enjoy your food at your own place.</p>

<br/>

<h3>Process :</h3>
<ol  style=" list-style-type: square">
    <li>As, you have logged-in with your webmail id, webmail password, go to the any tab (MEENAKSHI,BUHARI,VASANTHAM) and order your food and fill up your account details.</li>
     <li>Once you click the submit button you order will got to respective canteen and amount will be deducted from your account.</li>
     <li>And same amount will be added in respective canteen's account.</li>
     <li>After that you will get your order in your address in short period of time.</li>
     <li>By this way you can save the time and you need not to pay extra charges for delivery of your orders<span class="style2">.</span></li>
</ol>
<span class="style2"><br/>
</span>
<center class="style1">
  <span class="style4">HAVE A NICE DAY...! </span>
</center>
</div>

   <div id="left">
	<div>
			
                        <img src="images/17.jpg" width="250px" height="200px"  />
						<img src="images/15.jpg" width="250px" height="200px"  />
			            <img src="images/13.jpg" width="250px" height="200px" />
	</div>

</div>
<?php
require_once('footer.php');
?>
