<html>
<body bgcolor=#cfcfcf>
<font face=ubuntu size=50>
Modified Files in Current Version<br/>
</font>
<font face=ubuntu >
<?php 
	include("../../config.php");
	session_start();
	require_once("../../classes/database.class.php");
	$con=new Database;
	if($con->checkCookie($_SESSION['sessionID'],$_SESSION['uname'])==0)
	{
		$con->close();
		header("location:../../../views/loginwrong.html");
	}
	$con->close();
	chdir($GIT_ROOT);
	echo exec("git diff --name-only");
?>
</font>
</html>
