<html>
<body bgcolor=#cfcfcf>
<font face=ubuntu size=50>
Modified Files in Current Version<br/>
</font>
<font face=ubuntu >
<?php 
	include("../../config.php");
	require_once("../../classes/common.class.php");
	new page;
	session_start();
	require_once("../../classes/database.class.php");
	if (!isset($_SESSION['uname']) || $_SESSION['uname']=='admin')
		header("location:/views/loginwrong.html");
	chdir($GIT_ROOT);
	exec("git diff --name-only",$row);
	foreach($row as &$temp)
	{
		echo "<a href=changetofile.php?filename=";
		echo substr($temp,strlen($_SESSION['projectName'])+1).">";
		echo substr($temp,strlen($_SESSION['projectName'])+1)."</a>";
	}
?>
</font>
</html>
