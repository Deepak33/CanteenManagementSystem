<?php
session_start();
unset($_SESSION['login']);
unset($_SESSION['user']);
unset($_SESSION['type']);
//echo 'Logged Out';
die("<script>top.location='login.php'</script>");
?>