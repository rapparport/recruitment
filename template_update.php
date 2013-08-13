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

    $tempName=$_POST['TempName'];
    $tempDesc=$_POST['TempDesc'];
    $tempMess=$_POST['TempMessage'];
    $tID=$_POST['tempID'];
	
    $sql="UPDATE $tbl_templates SET TempName='$tempName', Description='$tempDesc', Message='$tempMess' WHERE temp_id='$tID'";
    $result=mysqli_query($con, $sql);
    

    header("location:templates.php");
    mysqli_close($con);
?>