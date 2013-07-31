<?php
    session_start();
    $host="localhost"; // Host name
    $username="root"; // Mysql username
    $password="root"; // Mysql password
    $db_name="recruit_db"; // Database name
    $tbl_name="user"; // Table name
    
    // Connect to server and select databse.
    mysql_connect("$host", "$username", "$password")or die("cannot connect");
    mysql_select_db("$db_name")or die("cannot select DB");
    
    // username and password sent from form
    $myusername=$_POST['exampleInputEmail'];
    $mypassword=$_POST['exampleInputPassword'];
    
    // To protect MySQL injection (more detail about MySQL injection)
    $myusername = stripslashes($myusername);
    $mypassword = stripslashes($mypassword);
    $myusername = mysql_real_escape_string($myusername);
    $mypassword = mysql_real_escape_string($mypassword);
    
    $sql="SELECT * FROM $tbl_name WHERE Email='$myusername' and Password='$mypassword'";
    $result=mysql_query($sql);
    
    // Mysql_num_row is counting table row
    $count=mysql_num_rows($result);
    
    // If result matched $myusername and $mypassword, table row must be 1 row
    
    if($count==1)
    {
        //echo "ok";
        // Register $myusername, $mypassword and redirect
        //ob_start();
        //session_register("myusername");
        //session_register("mypassword");
        session_regenerate_id();
        $member = mysql_fetch_assoc($result);
        $_SESSION['EMAIL'] = $member['Email'];
        $_SESSION['PASS'] = $member['Password'];
        session_write_close();
        header("location:candidates.php");
        exit();
    }
    else {
        echo "Wrong Username ($myusername) or Password ($mypassword)";
    }
    //ob_end_flush();
    ?>