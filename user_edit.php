<?php include 'inc/checkSession.php'; ?>
<?php include 'inc/header.php'; ?>
<?php
	session_start();
    include 'inc/db.php';
    
    // Get the user data

    // Connect to server and select databse.
    $con = mysql_connect("$host", "$username", "$password")or die("cannot connect");
    // Check connection
	if (mysqli_connect_errno($con))
  	{
  		echo "Failed to connect to MySQL: " . mysqli_connect_error();
  	}
    mysql_select_db($db_name)or die("cannot select DB");
    $userID = $_GET['id'];
    $sql="SELECT * FROM $tbl_user WHERE user_id='$userID'";
    $result=mysql_query($sql);
    $user = mysql_fetch_array($result);
    
    mysqli_close($con);
    
    include 'inc/get_plants.php';
?>

<body id="users">

<!-- Master nav -->
<?php include 'inc/menu.php'; ?>
<div class="container">
  <div class="row title">
    <div class="col-lg-8">
      <h1><i class="icon-user"></i> Edit User</h1>
    </div>
  </div>
  <div class="row form">
    <div class="col-lg-8">
      <form class="form-upduser" name="updUserForm" method="post" action="user_update.php">
        <fieldset>  
          <input type="hidden" class="form-control" id="InputID" name="userID" value="<?php echo $user['user_id']; ?>">
          <div class="form-group">
            <label for="InputLastName">Last name</label>
            <input type="text" class="form-control" id="InputLastName" name="LastNameU" placeholder="Enter last name" value="<?php echo $user['LastName']; ?>">
          </div>
          <div class="form-group">
            <label for="InputFirstName">First name</label>
            <input type="text" class="form-control" id="InputFirstName" name="FirstNameU" placeholder="Enter first name" value="<?php echo $user['FirstName']; ?>">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail">Email address</label>
            <input type="text" class="form-control" id="InputEmail" name="EmailU" placeholder="Enter email" value="<?php echo $user['Email']; ?>">
          </div>
          <div class="form-group">
            <label for="InputPassword">Password</label>
            <input type="password" class="form-control" id="InputPassword" name="PasswordU" placeholder="Password" value="<?php echo $user['Password']; ?>">
          </div>
          <div class="form-group">
          <label for="InputLocation">Location</label>
          <select class="form-control">
          <option>Select Location</option>
          <?php
    	  while($location = mysql_fetch_array($result))
  		  {
  		  ?>
  		     <option><?php echo $location['PlantName']; ?></option>
  		  <?php } ?>  
		  </select>
		  </div>

          <button type="submit" class="btn btn-default">Update</button>
          <button class="btn btn-danger" type="button" data-toggle="modal" data-target="#myModal">Delete</button>
        </fieldset>
      </form>
      <!-- Modal -->
      <div class="modal fade" id="myModal">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title">Delete user</h4>
            </div>
            <div class="modal-body">
              <p>Are you sure you want to delete this user?</p>
            </div>
            <div class="modal-footer"> <a href="#" class="btn btn-default" data-dismiss="modal">Close</a> <a href="user_delete.php?id=<?php echo $userID; ?>" class="btn btn-danger">Delete</a> </div>
          </div>
          <!-- /.modal-content --> 
        </div>
        <!-- /.modal-dialog --> 
      </div>
      <!-- /.modal --> 
      
    </div>
  </div>
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
