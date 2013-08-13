<?php include 'inc/checkSession.php'; ?>
<?php include 'inc/header.php'; ?>
<?php include 'inc/db.php'; ?>
<?php include 'inc/get_plants.php'; ?>

<body id="users">

<!-- Master nav -->
<?php include 'inc/menu.php'; ?>
<div class="container">
  <div class="row title">
    <div class="col-lg-8">
      <h1><i class="icon-user"></i> Add User</h1>
    </div>
  </div>
  <div class="row form">
    <div class="col-lg-8">
      <?php if($_SESSION['message'] == 'emptyU') {?> <p style="color:red;">Please fill in all fields</p> <?php } ?>
      <form name="addUserForm" method="post" action="user_insert.php">
        <fieldset>
          <div class="form-group">
            <label for="InputLastName">Last name</label>
            <input type="text" class="form-control" id="InputLastName" name="newLastName" placeholder="Enter last name">
          </div>
          <div class="form-group">
            <label for="InputFirstName">First name</label>
            <input type="text" class="form-control" id="InputFirstName" name="newFirstName" placeholder="Enter first name">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail">Email address</label>
            <input type="text" class="form-control" id="InputEmail" name="newEmail" placeholder="Enter email">
          </div>
          <div class="form-group">
            <label for="InputPassword">Password</label>
            <input type="password" class="form-control" id="InputPassword" name="newPass" placeholder="Password">
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
          <button type="submit" class="btn btn-default">Submit</button>
        </fieldset>
      </form>
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
