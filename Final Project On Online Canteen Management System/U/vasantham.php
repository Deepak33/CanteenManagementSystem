<?php
require_once('functions.php');
secure(1);
require_once('conn.php');
?>
<?php 
		if(isset($_POST['Submit']))
		{
                    $item="";
                    if(isset($_POST['t1']))
                        $item.=$_POST['t1'].',';
                    if(isset($_POST['t2']))
                        $item.=$_POST['t2'].',';
                    if(isset($_POST['t3']))
                        $item.=$_POST['t3'].',';
                    if(isset($_POST['t4']))
                        $item.=$_POST['t4'].',';
                    if(isset($_POST['t5']))
                        $item.=$_POST['t5'].',';
                    if(isset($_POST['t6']))
                        $item.=$_POST['t6'].',';
                    if(isset($_POST['t7']))
                        $item.=$_POST['t7'].',';
                    if(isset($_POST['t8']))
                        $item.=$_POST['t8'].',';
                    if(isset($_POST['t9']))
                        $item.=$_POST['t9'].',';
                    if(isset($_POST['t10']))
                        $item.=$_POST['t10'].',';
                    if(isset($_POST['t11']))
                        $item.=$_POST['t11'].',';
                    if(isset($_POST['t12']))
                        $item.=$_POST['t12'].',';
                    if(isset($_POST['t13']))
                        $item.=$_POST['t13'].',';
                    if(isset($_POST['t14']))
                        $item.=$_POST['t14'].',';
                    if(isset($_POST['t15']))
                        $item.=$_POST['t15'];


    //                    echo $item;

  //                      echo $_SESSION['user'];

                   // echo $_POST['t1'];
//                    echo $_POST['amount'];

                        $sql="Select amount from bank where accountnum='".$_POST['acc']."' and pin='".$_POST['pass']."'";
					$result=mysql_query($sql,$conn) OR die(mysql_error());
                                   if($result and mysql_num_rows($result)>0)
					{
						$row=mysql_fetch_array($result);
						$current=$row['amount'];
					}
                                       // echo $current;
                                       // $text=$current;

                                        if($current >= $_POST['amount'])
                                            {
                                             $sql="Insert into orders(canteen,rollno,items,name,address,amount,time) values('Vasantham', '".$_SESSION['user']."','".$item."','".mysql_real_escape_string($_POST['name'])."','". $_POST['add']."','".mysql_real_escape_string($_POST['amount'])."',NOW())";
                                              mysql_query($sql,$conn) or die(mysql_error()) ;
                                              $sq="update bank set amount = amount - '".$_POST['amount']."' where accountnum='".$_POST['acc']."' and pin='".$_POST['pass']."'";
                                            mysql_query($sq,$conn) or die(mysql_error());
                                            $s="update canteen set sales = sales + '".$_POST['amount']."' where name='Vasantham'";
                                            mysql_query($s,$conn) or die(mysql_error());
                                            $text="Transaction Completed Successfully!. Amount deducted from your account is ".$_POST['amount']."<br><center><h1>Thank You.</h1> </center>";

                                        }
                                        else
                                            {

                                            $text="Insufficient amount in Your Account";
                                        }




			/*$id=mysql_insert_id($conn);
                        $idi=rand()%500000;
			$ref="NITT".str_pad($idi,5,"0",STR_PAD_LEFT);
                        $pa=rand()%50000000;
			$pass="PASS".str_pad($pa,5,"0",STR_PAD_LEFT);

			$text="Registration Completed Successfully!";
			$text.="<br>Your student account is created and initiated with Rs.550/-.<br/> Your account id is : ".$ref.'<br />';
                        $text.=" Your account Password is : ".$pass.'<br />Please keep this private safe and secure';
			/*Sending mail to Complainant*/
                      /*  $query="Insert into account(rollno,id,pass,amount) values('".$_SESSION['user']."','".$ref."','".$pass."','550')";
                        mysql_query($query,$conn) or die(mysql_error());

			$to = $_SESSION['user'].'@nitt.edu';
			$subject = "Mail from Festember Core team";
			$message = 'Hello '.$_SESSION['user'].',<br>Your softcoupon account has been generated with Festember core with the account id: '.$ref.'.and Password : '.$pass.'<br>Use these ID and Password for all transactions in the upcoming college fest.<br>This is a system generated mail. Please do not reply to this mail.<br>Regards.';
			$from = "Festember";
			$headers = "From:" . $from;
		//	mail($to,$subject,$message,$headers);
			/*Sending mail to Complainant*/
		}	
?>
<?php require_once('header.php') ?>
<script>

var x;

function blinkBorder(colorA, colorB, element, time){
  x++;
  if(x == 10)
	  return;
  element.style.borderColor = colorB ;
  setTimeout( function(){
    blinkBorder(colorB, colorA, element, time);
    colorB = null;
    colorA = null;
    element = null;
    time = null;
  } , time) ;
}



function calc()
{	var f=document.form1
	var hr1=0,hr2=0,hr3=0,dr1=0,dr2=0,dr3=0,dr4=0,or1=0,or2=0,or3=0,or4=0,or5=0,or6=0,or7=0,or8=0;
	if(f.t1.checked)hr1=25;
	if(f.t2.checked)hr2=50;
	if(f.t3.checked)hr3=20;
	if(f.t4.checked)dr1=20;
	if(f.t5.checked)dr2=50;
	if(f.t6.checked)dr3=50;
	if(f.t7.checked)dr4=60;
	if(f.t8.checked)or1=70;
	if(f.t9.checked)or2=80;
	if(f.t10.checked)or3=60;
        if(f.t11.checked)or4=60;
        if(f.t12.checked)or5=25;
        if(f.t13.checked)or6=50;
	if(f.t14.checked)or7=25;
        if(f.t15.checked)or8=50;
        f.amount.value= hr1+hr2+hr3+dr1+dr2+dr3+dr4+or1+or2+or3+or4+or5+or6+or7+or8;
        return f.amount.value;


}



function validate()
{
	var f=document.form1
	//alert("hi calculation "+calc()+"timing::"+calct()+"problem::"+calcp())
	var name = f.username.value;
	var nameReg = /^[a-zA-Z ]*$/;
	var numReg = /^\d+$/;

var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	//alert(f.contact.value.length);
	if(name=="" || !nameReg.test(name))
	{	alert("Please Enter Your Name.\nName can only have Alphabets and Spaces.")
		f.username.focus()
		x = 0;
		blinkBorder("white","red", f.username, 500);
		return false;
	}

        if(f.department.value=="")
{
alert("Select your department from the list please...");
f.department.focus();
x = 0;
blinkBorder("white","red", f.department, 500);
return false;
}

if(f.classes.value=="")
	{	alert("Please Enter Your Class Name");
		f.classes.focus()
		x = 0;
		blinkBorder("white","red", f.classes, 500);
		return false;
	}

if(f.year.value=="")
{
alert("Select year of study from the list please...");
f.year.focus();
x = 0;
blinkBorder("white","red", f.year, 500);
return false;
}


if(f.email.value=="")
{
alert("Can't leave email field empty.");
f.email.focus();
x = 0;
blinkBorder("white","red", f.email, 500);
return false;
}

  if(!(f.email.value.match(mailformat)))
	{
    alert("Invalid email address!");
    f.email.focus();
    x = 0;
blinkBorder("white","red", f.email, 500);
    return false;
    }



if(f.mess.value=="")
{
alert("Select your mess from the list please...");
f.mess.focus();
x = 0;
blinkBorder("white","red", f.mess, 500);
return false;
}

if(f.tshirt.value=="")
{
alert("Select your department from the list please...");
f.tshirt.focus();
x = 0;
blinkBorder("white","red", f.tshirt, 500);
return false;
}


        if(f.cr.value=="" || !nameReg.test(f.cr.value))
	{	alert("Please Enter Your Class representative's Name.\nName can only have Alphabets and Spaces.")
		f.cr.focus()
		x = 0;
		blinkBorder("white","red", f.cr, 500);
		return false;
	}



if(f.crcontact.value=="" || !numReg.test(f.crcontact.value) || f.crcontact.value.length > 10)
	{	alert("Please Enter Proper Contact Number.\nContact can have only numbers (Max 10 digits)");
		f.crcontact.focus()
		x = 0;
		blinkBorder("white","red", f.crcontact, 500);
		return false;
	}

        	f.amount.value=calc();

return true;
}
function error(str)
{
	document.getElementById("errorbox").innerHTML=str
}


</script>

<div id="center">
	<div>
           
                        <div align="center"><img src="images/menu1.jpg" width="1250px" height="230px" border="2" /><br/>
                        </div>
</div>
<form name="form1" method="post" onsubmit="return calc()">
<div id="content">
<div id="right">

<div align="center" class="box" style="color:#006600"><?php if (!isset($text)) $text=""; echo $text ?></div>
<div id="errorbox" class="box" align="center" style="color:#FF0000"></div>

<table width="100%" align="center" border="0" cellpadding="5" cellspacing="5">

<tr> <td colspan="2" align="center"> <div align="center" style="font-weight: bold; font-family: Verdana, Arial, Helvetica, sans-serif; color: #0000CC; font-style: italic">  
  <blockquote>
    <blockquote>
      <p>&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size: 28px">&nbsp;&nbsp;<span style="color: #00CC33">VASANTHAM </span></span></p>
    </blockquote>
  </blockquote>
</div></td>
</tr>
<tr align="center">
<td width="39%" align="right"><strong>Soup</strong><strong> @25Rs</strong> <input type="checkbox" name="t1" value="soup" /></td>
<td width="39%" align="right"><strong>VEG NOODELS </strong><strong>@50Rs</strong><input name="t2" type="checkbox" id="t2" value="veg noodels" /></td>
</tr>
<tr align="center">
<td align="right"><strong>ALOO PRATHA @20 Rs</strong><input name="t3" type="checkbox" id="t3" value="aloo paratha" /></td>

<td width="39%" align="right"><strong>BUTTER NAN @20 Rs</strong><input name="t4" type="checkbox" id="t4" value="butter nan" /></td>
</tr>
<tr align="center">
<td align="right"><strong>PBM @50 Rs</strong><input name="t5" type="checkbox" id="t5" value="pbm" /></td>
<td width="39%" align="right"><strong>GOBI MASALA @50 Rs </strong><input name="t6" type="checkbox" id="t6" value="gobi masala" /></td>
</tr>

<tr align="center">
    <td align="right"><strong>VEG RICE @60 Rs </strong><input name="t7" type="checkbox" id="t7" value="veg rice" /></td>
<td width="39%" align="right"><strong>CHICKEN RICE @70 Rs </strong><input name="t8" type="checkbox" id="t8" value="chicken rice" /></td>
</tr>


<tr align="center">
<td width="39%" align="right"><strong>GRILLED CHICKEN @80 Rs </strong><input type="checkbox" name="t9" id="t9" value="grilled chicken"  /></td>
<td width="39%" align="right"><strong>BUTTER CHICKEN @60 Rs </strong>  <input type="checkbox" name="t10" id="t10" value="butter chicken" /></td>

</tr>


<tr align="center">
<td width="39%" align="right"><strong>TANDOORI CHIKEN@60 RS </strong><input name="t11" type="checkbox" id="t11" value="tandoori chicken" />
</td>
<td width="39%" align="right"><strong>COKE 500ML 25 Rs </strong><input name="t12" type="checkbox" id="t12" value="coke 500ml" /></td>
</tr>

<tr align="center">
<td width="39%" align="right"><strong>COKE 1L @50 Rs </strong><input name="t13" type="checkbox" id="t13" value="coke 1l" /></td>
<td width="39%" align="right"><strong>SPRITE  500ML @25 RS </strong><input name="t14" type="checkbox" id="t14" value="sprite 500ml" /></td>
</tr>
<tr align="center">
<td width="39%" align="right"><strong>SPRITE  1L @50 Rs </strong><input name="t15" type="checkbox" id="t15" value="sprite 1l" /></td>
<td>&nbsp; </td>
</tr>
<tr>
  <td width="39%" align="right"><strong>Name</strong><input name="name" type="text" id="name" size="26" /></td>
<td width="39%" align="right"><strong>Order Address </strong><textarea name="add" cols="50" id="add"></textarea></td>
</tr>
<tr>
  <td width="39%" align="right"><strong>Account No </strong><input name="acc" type="text" id="acc" size="26" /></td>
<td width="39%" align="right"><strong>Password </strong><input name="pass" type="password" id="pass" size="26" /></td>
</tr>

<tr>
    <input type="hidden" name="amount" value="" />
<td colspan="2" align="center"><input type="submit" name="Submit" value="Submit" /><!--<input type="button" value="Check" onclick="validate()"/>--></td>
</tr>

</table>
</div>
	
<div id="left">
	<div>
							
						<img src="images/12.jpg" width="250px" height="200px"/><br/>
                        <img src="images/17.jpg" width="250px" height="200px" />

	   
</div>

</div>

</form>
<?php require_once('footer.php') ?>
</body>
</html>