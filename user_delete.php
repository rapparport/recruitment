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

	$deleteid = $_GET['id'];
	$sql="DELETE FROM $tbl_user WHERE user_id='$deleteid'";
    $result=mysqli_query($con, $sql);
    if (!$result)
    {
  		die('Error: ' . mysqli_error($con));
    }
	$_SESSION['message'] = '';
    header("location:users.php");
    
    mysqli_close($con);


?>