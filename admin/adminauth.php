<?php
	//Start session
	session_start();
	
	//Include Config
	include('../include/config.php');
	
	//Query grabs the ID of the user and checks if it is an admin
	$queryAdmin = "SELECT admin FROM users WHERE id = '".$_SESSION['SESS_MEMBER_ID']."'";
	$resultAdmin = mysql_query($queryAdmin);
	
	$row = mysql_fetch_array($resultAdmin);
	
	$admin = $row['admin'];
	
	if($admin == '0'){
		$error = "Access Restricted. You are NOT allowed in the admin section!";
		$_SESSION['ERRMSG_ARR'] = $errmsg;
		session_write_close();
		header("location: ../login.php");
		exit();
					 }
					 
?>