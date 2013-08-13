<?php include 'inc/checkSession.php'; ?>
<?php include 'inc/header.php'; ?>
<?php
	session_start();
    include 'inc/db.php';
    
    // Get the user data
    $tbl_name="plants"; // Table name
    // Connect to server and select databse.
    $con = mysql_connect("$host", "$username", "$password")or die("cannot connect");
    // Check connection
	if (mysqli_connect_errno($con))
  	{
  		echo "Failed to connect to MySQL: " . mysqli_connect_error();
  	}
    mysql_select_db($db_name)or die("cannot select DB");
    $plantID = $_GET['id'];
    $sql="SELECT * FROM $tbl_name WHERE plant_id='$plantID'";
    $result=mysql_query($sql);
    $plant = mysql_fetch_array($result);
    mysqli_close($con);

?>

<body id="plants">

<!-- Master nav -->
<?php include 'inc/menu.php'; ?>
<div class="container">
  <div class="row title">
    <div class="col-lg-8">
      <h1><i class="icon-gear"></i> Edit Power Plant</h1>
    </div>
  </div>
  <div class="row form">
    <div class="col-lg-8">
      <form name="updPlantForm" method="post" action="plant_update.php">
        <fieldset>
          <input type="hidden" class="form-control" id="InputID" name="PlantID" value="<?php echo $plant['plant_id']; ?>">
          <div class="form-group">
            <label for="InputPlantName">Power plant name</label>
            <input type="text" class="form-control" id="InputPlantName" name="PlantName" placeholder="Enter plant name" value="<?php echo $plant['PlantName'];?>">
          </div>
          <div class="form-group">
            <label for="InputPlantDescription">Power plant description</label>
            <input type="text" class="form-control" id="InputPlantDescription" name="PlantDesc" placeholder="Enter brief description" value="<?php echo $plant['Description']; ?>">
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
              <h4 class="modal-title">Delete power plant</h4>
            </div>
            <div class="modal-body">
              <p>Are you sure you want to delete this power plant?</p>
            </div>
            <div class="modal-footer"> <a href="#" class="btn btn-default" data-dismiss="modal">Close</a> <a href="plant_delete.php?id=<?php echo $plantID; ?>" class="btn btn-danger">Delete</a> </div>
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
