<?php
	session_start();
//	require_once 'conn.php';
	function secure($mod)
	{
		if(!isset($_SESSION['login']))
		{
			die("<script>top.location='login.php'</script>");
		}
		if($mod>1 and $_SESSION['type']==1)
		die("<script>top.location='index.php'</script>");
		if($mod==1 or $_SESSION['type']==$mod or $_SESSION['type']==5)
		{
			;
		}
		else
		{
			die("<script>top.location='index.php'</script>");
		}
	}


//IMAP settings
$authmethods['imap']['status']=TRUE;
$authmethods['imap']['server_address']="10.0.0.173";
//$authmethods['imap']['server_address']="localhost";
$authmethods['imap']['port']="143";
//$authmethods['imap']['port']="";
$authmethods['imap']['user_domain']="nitt.edu"; // i.e. user must login with username@nitt.edu


function quoteIMAP($str)
{
  return ereg_replace("([\"\\])", "\\1", $str);
}

function imapAuth ($username, $password)
{
  /*      global $authmethods;
        if(!isset($authmethods['imap']['server_address']) ||
!isset($authmethods['imap']['port']))
                displayerror("Please specify IMAP authentication settings completely");

        $imap_server_address=$authmethods['imap']['server_address'];
        $imap_port=$authmethods['imap']['port'];
          $imap_stream = fsockopen($imap_server_address,$imap_port);
          if ( !$imap_stream ) {
            return false;
          }
          $server_info = fgets ($imap_stream, 1024);

          $query = 'b221 ' .  'LOGIN "' . quoteIMAP($username) .  '" "'  .quoteIMAP($password) .
"\"\r\n";
          $read = fputs ($imap_stream, $query);

          $response = fgets ($imap_stream, 1024);
          $query = 'b222 ' . 'LOGOUT';
          $read = fputs ($imap_stream, $query);
          fclose($imap_stream);

          strtok($response, " ");
          $result = strtok(" ");
*/
$result = "OK";
          if($result == "OK")
                        return TRUE;
          else
            return FALSE;
}



?>