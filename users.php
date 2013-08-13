<?php include 'inc/checkSession.php'; ?>
<?php include 'inc/header.php'; ?>
<?php include 'inc/passToStars.php';?>
<?php
	session_start();
    include 'inc/db.php';
    $_SESSION['message'] = '';
    
    // Connect to server and select databse.
    $con = mysql_connect("$host", "$username", "$password")or die("cannot connect");
    // Check connection
	if (mysqli_connect_errno($con))
  	{
  		echo "Failed to connect to MySQL: " . mysqli_connect_error();
  	}

    mysql_select_db($db_name)or die("cannot select DB");
    
    $sql="SELECT * FROM $tbl_user";
    $result=mysql_query($sql);
?>

<body id="users">

<!-- Master nav -->
<?php include 'inc/menu.php'; ?>
<div class="container">
  <div class="row title">
    <div class="col-12 col-sm-8 col-lg-8">
      <h1><i class="icon-group"></i> Users</h1>
    </div>
    <div class="col-6 col-sm-4 col-lg-4"> <a href="user_add.php">
      <button type="button" class="btn btn-ihi btn-large pull-right"><i class="icon-plus-sign icon-large"></i> Add User</button>
      </a> </div>
  </div>
  <table class="table table-striped table-hover">
    <thead>
      <tr>
        <th scope="col">Last Name</th>
        <th scope="col">First Name</th>
        <th scope="col">Email Address</th>
        <th scope="col">Password</th>
        <th scope="col">Plant Location</th>
      </tr>
    </thead>
    <tbody>
    <?php
    while($member = mysql_fetch_array($result))
  	{
  	?>
      <tr>
        <td><a href="user_edit.php?id=<?php echo $member['user_id'];?>"><?php echo $member['LastName'];?></a></td>
        <td><?php echo $member['FirstName']; ?></td>
        <td><?php echo $member['Email']; ?></td>
        <td><?php echo passToStars($member['Password']); ?></td>
        <td><?php echo $member['Location'] ?></td>
      </tr>
    <?php } ?>
    </tbody>
  </table>
  <hr>
  <footer>
    <p><small>Copyright &copy; <?php echo date("Y") ?> IHI Power Services Corp. All rights reserved.</small></p>
  </footer>
</div>
<!-- /container --> 
<script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src='//www.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
</body>
</html>
