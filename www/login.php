<?php
include "datab.php";
?>
<?php
session_start();
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
    $login = clean($_POST['login1']);
	$password = clean($_POST['password']);
	$qry="SELECT * FROM users WHERE login='$login' AND password='$password'";
	$result=mysql_query($qry);
if($result) {
		if(mysql_num_rows($result) > 0 ) {
			session_regenerate_id();
			$member = mysql_fetch_assoc($result);
			$_SESSION['login'] = $member['login'];
			$_SESSION['password'] = $member['password'];
			$_SESSION['fname'] = $member['fname'];
			$_SESSION['lname'] = $member['lname'];
			
			
			session_write_close();
			header("location: homepage.php?");
			exit();
			}
			else
			{
			header("location: login_error.php");
			exit();
			}
		}
	else {
		die("Query failed");
	}	
	

?>