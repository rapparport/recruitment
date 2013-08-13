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
    
    $lastName=$_POST['newLastName'];
    $firstName=$_POST['newFirstName'];
    $email=$_POST['newEmail'];
    $pwd=$_POST['newPass'];
    
    if($pwd=="" || $email=="" || $lastName=="" || $firstName=="")
    {
    	$_SESSION['message'] = 'emptyU';
    	header("location:user_add.php");
    }
    else
    {
    	$sql="INSERT INTO $tbl_user (LastName, FirstName, Email, Password) VALUES ('$lastName','$firstName','$email','$pwd')";
    	$result=mysqli_query($con, $sql);
    	if (!$result)
    	{
  			die('Error: ' . mysqli_error($con));
    	}
		$_SESSION['message'] = '';
    	header("location:users.php");
    }
    mysqli_close($con);
?>