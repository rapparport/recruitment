<?php
    session_start();
	include 'inc/db.php';
	$_SESSION['message'] = '';
	
    // Connect to server and select databse.
    $con = mysqli_connect($host, $username, $password)or die("cannot connect");
    // Check connection
	if (mysqli_connect_errno($con))
  	{
  		echo "Failed to connect to MySQL: " . mysqli_connect_error();
  	}

    mysqli_select_db($con, $db_name)or die("cannot select DB");
    
    // username and password sent from form
    $myusername=$_POST['InputEmail'];
    $mypassword=$_POST['InputPassword'];
    
    // To protect MySQL injection (more detail about MySQL injection)
    $myusername = stripslashes($myusername);
    $mypassword = stripslashes($mypassword);
    $myusername = mysqli_real_escape_string($con, $myusername);
    $mypassword = mysqli_real_escape_string($con, $mypassword);
    
    $sql="SELECT * FROM $tbl_user WHERE Email='$myusername' and Password='$mypassword'";
    $result=mysqli_query($con, $sql);
    
    // Mysql_num_row is counting table row
    $count=mysqli_num_rows($result);
    
    // If result matched $myusername and $mypassword, table row must be 1 row
    
    if($count==1)
    {
        session_regenerate_id();
        $member = mysqli_fetch_assoc($result);
        $_SESSION['EMAIL'] = $member['Email'];
        $_SESSION['PASS'] = $member['Password'];
        $_SESSION['LOGGEDIN'] = true;
     
        $_SESSION['NAMEF'] = $member['FirstName'];
        $_SESSION['NAMEL'] = $member['LastName'];
        $_SESSION['uID'] = $member['user_id'];
        
        session_write_close();
        mysqli_close($con);
        header("location:candidates.php");
        exit();
    }
    else {
        echo "Wrong Username ($myusername) or Password ($mypassword)";
        mysqli_close($con);
    }
    //ob_end_flush();
?>