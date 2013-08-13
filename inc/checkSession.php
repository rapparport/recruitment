<?php
	session_start();
	if (!(isset($_SESSION['LOGGEDIN']) && $_SESSION['LOGGEDIN'] == true)) 
	{
		header("location:index.php");
		exit();
	}
	else
	{
    	$userName = $_SESSION['NAMEF']." ".$_SESSION['NAMEL'];
    	$userIDcurrent = $_SESSION['uID'];
    }
?>