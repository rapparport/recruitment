<?php include 'inc/checkSession.php'; ?>
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
    
    $plantName=$_POST['PlantName'];
    $plantDesc=$_POST['PlantDesc'];
    $pID=$_POST['PlantID'];
	//echo "$plantName $pID $plantDesc";
	
	
    $sql="UPDATE $tbl_plants SET PlantName='$plantName', Description='$plantDesc' WHERE plant_id='$pID'";
    $result=mysqli_query($con, $sql);

    header("location:plants.php");
    mysqli_close($con);
?>