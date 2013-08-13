<?php
    session_start();
	include 'inc/db.php';
    
    // Connect to server and select databse.
    $con = mysqli_connect($host, $username, $password)or die("cannot connect");
    // Check connection
	if (mysqli_connect_errno($con))
  	{
  		echo "Failed to connect to MySQL: " . mysqli_connect_error();
  	}

    mysqli_select_db($con, $db_name)or die("cannot select DB");
    
    $tempName=$_POST['newTempName'];
    $tempDesc=$_POST['newTempDesc'];
    $message=$_POST['newTempMessage'];
    
    if($tempName=="" || $tempDesc=="")
    {
    	$_SESSION['message'] = 'emptyT';
    	header("location:template_add.php");
    }
    else
    {
    	$sql="INSERT INTO $tbl_templates (TempName, Description, Message) VALUES ('$tempName','$tempDesc','$message')";
    	$result=mysqli_query($con, $sql);
    	if (!$result)
    	{
  			die('Error: ' . mysqli_error($con));
    	}
		$_SESSION['message'] = '';
    	header("location:templates.php");
    }
    mysqli_close($con);
?>