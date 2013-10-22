<?php
require_once('functions.php');
secure(2);
require_once('conn.php');
?>
<?php
require_once('header.php');

?>
<style type="text/css">
<!--
.style1 {
	color: #0000CC;
	font-weight: bold;
	font-size: 26px;
}
-->
</style>

<div id="content">

<div id="right">

<br/>
<table align="center" width="100%" id="table1" cellpadding="5" cellspacing="5" border="2">
    <tr><th colspan="6"><center>
      <span class="style1">ORDERED LIST</span>
    </center></th></tr>
    <tr>
<th>Roll No.</th>
<th>Customer Name</th>
<th>Item List</th>
<th>Adress</th>
<th>Amount</th>
<th>Time</th>
</tr>
<?php
	$result=mysql_query("Select rollno,name,items,address,amount,time from orders where canteen='".$_SESSION['user']."'",$conn) or die(mysql_error());
	$i=1;

	while($result  and $row=mysql_fetch_array($result))
	{
?>
	<tr align="center"<?php if($i%2) { ?> style="background:#CCCCCC" <?php } ?>>
    <td align="center"><?php echo $row['rollno'] ?></td>
    <td align="center"><?php echo $row['name'] ?></td>
    <td align="center"><?php echo $row['items'] ?></td>
    <td align="center"><?php echo $row['address'] ?></td>
    <td align="center"><?php echo $row['amount'] ?></td>
    <td align="center"><?php echo $row['time'] ?></td>
    </tr>

<?php } ?>
</table>
</div>
</div>
<?php require_once('footer.php')?>
</body>

</html>
