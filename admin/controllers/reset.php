<?php
	session_start();
	require_once("../../classes/database.class.php");
	$con=new Database;
	$con->connect();
	if ($con->query("SELECT uname FROM Accounts WHERE sessionID='$_SESSION[SessionID]'")==0)
	{
		$con->close();
		header("Location:../views/login.html");		
	}
	else
	{
	$passwd=mysql_escape_string($_POST['passwd']);
	$uname=mysql_escape_string($_POST['uname']);
	$con->query("UPDATE Accounts SET passwd='$passwd' WHERE uname='$uname'");
	$con->close();
	}
	header("location:../adminHome.php");
?>

