<?php
session_start();
?>
<html>
<head>
	<style type="text/css" >
		.members
		{
			border:3px solid black;
			width:100px;
			background-color:#afafaf;	
			height:350px;
		}
	a
	{
		display:block;
    }
	a:hover
	{
		color:red;
	}

	.commit
	{
		border:3px solid black;
		width:480px;
		height:340px;
		background-color:#afafaf;
		margin-left:200px;
		margin-top:-350px;
	}

</style>

</head>
<style type="text/css">
body {
	background-color:#cfcfcf;
} 
</style>
<body bgcolor = "green">
<script language="php">
require_once("../classes/database.class.php");
$con=new Database;
if (!isset($_SESSION['uname']) || $_SESSION['uname']!=$_SESSION['projectName'])
	header("location:/views/loginwrong.html");
$con->messageDump();
$con->close();
require_once("../classes/guide.class.php"); 
require_once("../classes/common.class.php"); 
$page=new page("Weclome $_SESSION[projectName] Guide");
echo "<h3> Project Contributers </h3>";
$guide = new Guide($_SESSION["projectName"]);
$guide->show_members();
$guide->show_commit_button();
$guide->show_panel_button()
</script>
</html>
