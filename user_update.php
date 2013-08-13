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
    
    $lastNameUpd=$_POST['LastNameU'];
    $firstNameUpd=$_POST['FirstNameU'];
    $email=$_POST['EmailU'];
    $pwd=$_POST['PasswordU'];
    $uID=$_POST['userID'];
	
    $sql="UPDATE $tbl_user SET LastName='$lastNameUpd', FirstName='$firstNameUpd', Email='$email', Password='$pwd' WHERE user_id='$uID'";
    $result=mysqli_query($con, $sql);
    if($uID == $userIDcurrent)
	{
		$_SESSION['EMAIL'] = $email;
        $_SESSION['PASS'] = $pwd;
     
        $_SESSION['NAMEF'] = $firstNameUpd;
        $_SESSION['NAMEL'] = $lastNameUpd;
        $userName = $_SESSION['NAMEF']." ".$_SESSION['NAMEL'];
	}

    header("location:users.php");
    mysqli_close($con);
?>