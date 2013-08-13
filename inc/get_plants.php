<?php
	// Get plant locations
    
    // Connect to server and select databse.
    $con = mysql_connect("$host", "$username", "$password")or die("cannot connect");
    // Check connection
	if (mysqli_connect_errno($con))
  	{
  		echo "Failed to connect to MySQL: " . mysqli_connect_error();
  	}
    mysql_select_db($db_name)or die("cannot select DB");
    $sql="SELECT * FROM $tbl_plants";
    $result=mysql_query($sql);
    mysqli_close($con);
?>