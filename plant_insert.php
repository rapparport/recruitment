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

    $name=$_POST['PlantName'];
    $desc=$_POST['PlantDesc'];
    
    if($name=="" || $desc=="")
    {
    	$_SESSION['message'] = 'emptyP';
    	header("location:plant_add.php");
    }
    else
    {
    	$sql="INSERT INTO $tbl_plants (PlantName, Description) VALUES ('$name','$desc')";
    	$result=mysqli_query($con, $sql);
    	if (!$result)
    	{
  			die('Error: ' . mysqli_error($con));
    	}
		$_SESSION['message'] = '';
    	header("location:plants.php");
    }
    mysqli_close($con);
?>