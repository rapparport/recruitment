<?php include 'inc/checkSession.php'; ?>
<?php include 'inc/header.php'; ?>
<?php
		include 'inc/db.php';
    	$tbl_name="recruits"; // Table name
    
		$con1=mysql_connect("$host", "$username", "$password")or die("cannot connect");
		// Check connection
		if (mysqli_connect_errno($con1))
  		{
  			echo "Failed to connect to MySQL: " . mysqli_connect_error();
  		}
    	$result = mysqli_query($con1,"SELECT * FROM `recruits` LIMIT 0, 30 ");
   		while($row = mysqli_fetch_array($result))
  		{
  			echo $row['FirstName'] . " " . $row['FirstName'];
  			echo "<br>";
  		}
  		echo $result;
?>    
    
<body>

<!-- Master nav -->
<?php include 'inc/menu.php'; ?>
<div class="container">
  <div class="row title">
    <div class="col-12 col-sm-8 col-lg-8">
      <h1><i class="icon-group"></i> Candidates</h1>
    </div>
    <div class="col-6 col-sm-4 col-lg-4">
            <a href="candidate_add.php">
<button type="button" class="btn btn-ihi btn-large pull-right"><i class="icon-plus-sign icon-large"></i> Add Candidate</button></a>
    </div>
  </div>
  <h3>Filter Candidates</h3>
  <div class="well well-small"> 
    <!-- Split button -->
    <div class="btn-group">
      <button type="button" class="btn btn-ihi btn-small">Name</button>
      <button type="button" class="btn btn-ihi btn-small dropdown-toggle" data-toggle="dropdown"> <span class="caret"></span> </button>
      <ul class="dropdown-menu">
        <li><a href="#">Sort by Last Name</a></li>
        <li><a href="#">Sort by First Name</a></li>
      </ul>
    </div>
    <!-- Split button -->
    <div class="btn-group">
      <button type="button" class="btn btn-ihi btn-small">Recommend</button>
      <button type="button" class="btn btn-ihi btn-small dropdown-toggle" data-toggle="dropdown"> <span class="caret"></span> </button>
      <ul class="dropdown-menu">
        <li><a href="#">Recommended Only</a></li>
        <li><a href="#">Not Recommended Only</a></li>
      </ul>
    </div>
    <!-- Split button -->
    <div class="btn-group">
      <button type="button" class="btn btn-ihi btn-small">Pass Probability</button>
      <button type="button" class="btn btn-ihi btn-small dropdown-toggle" data-toggle="dropdown"> <span class="caret"></span> </button>
      <ul class="dropdown-menu">
        <li><a href="#">Over 75%</a></li>
        <li><a href="#">50% to 75%</a></li>
        <li><a href="#">Below 75%</a></li>
      </ul>
    </div>
    <!-- Split button -->
    <div class="btn-group">
      <button type="button" class="btn btn-ihi btn-small">Position</button>
      <button type="button" class="btn btn-ihi btn-small dropdown-toggle" data-toggle="dropdown"> <span class="caret"></span> </button>
      <ul class="dropdown-menu">
        <li><a href="#">O&M Tech I</a></li>
        <li><a href="#">O&M Tech II</a></li>
        <li><a href="#">O&M Tech III</a></li>
      </ul>
    </div>
    <!-- Split button -->
    <div class="btn-group">
      <button type="button" class="btn btn-ihi btn-small">Plant Location</button>
      <button type="button" class="btn btn-ihi btn-small dropdown-toggle" data-toggle="dropdown"> <span class="caret"></span> </button>
      <ul class="dropdown-menu">
        <li><a href="#">Chinese Station</a></li>
        <li><a href="#">Rio Bravo Fresno</a></li>
        <li><a href="#">Rio Bravo Rocklin</a></li>
        <li><a href="#">Rio Bravo Jasmin</a></li>
        <li><a href="#">Rio Bravo Poso</a></li>
        <li><a href="#">Shasta Renewable</a></li>
        <li><a href="#">Buena Vista Biomass</a></li>
      </ul>
    </div>
    <!-- Single date picker button -->
    <div id="reportrange" class="btn-group">
      <button type="button" class="btn btn-ihi btn-small dropdown-toggle" data-toggle="dropdown"> Date Tested <span class="caret"></span> </button>
    </div>
    <script type="text/javascript">
$('#reportrange').daterangepicker(
    {
      ranges: {
         'Today': [moment(), moment()],
         'Yesterday': [moment().subtract('days', 1), moment().subtract('days', 1)],
         'Last 7 Days': [moment().subtract('days', 6), moment()],
         'Last 30 Days': [moment().subtract('days', 29), moment()],
         'This Month': [moment().startOf('month'), moment().endOf('month')],
         'Last Month': [moment().subtract('month', 1).startOf('month'), moment().subtract('month', 1).endOf('month')]
      }
    }
);
</script> 
    <!-- Search box -->
    <form class="pull-right" action="">
      <input type="text" class="form-control input-small col-lg-8" placeholder="Search">
    </form>
  </div>
  <form name="theForm">
    Select <a href="javascript:selectToggle(true, 'theForm');">All</a> | <a href="javascript:selectToggle(false, 'theForm');">None</a>
    <p>
    <table class="table table-striped table-hover">
      <tr>
        <th scope="col">&nbsp;</th>
        <th scope="col">Last Name</th>
        <th scope="col">First Name</th>
        <th scope="col">Email Address</th>
        <th scope="col">Test Date</th>
        <th scope="col">Test Location</th>
        <th scope="col">Test Result</th>
        <th scope="col">Pass Probability</th>
        <th scope="col">Position</th>
        <th scope="col">Plant Location</th>
      </tr>
      <tr>
        <td><input type="checkbox" value=""></td>
        <td><a href="#">Rapparport</a></td>
        <td>Todd</td>
        <td>todd@rapparport.com</td>
        <td>07/26/13</td>
        <td>Irvine</td>
        <td>R</td>
        <td>87%</td>
        <td>O&M Tech 1</td>
        <td>Chinese Station</td>
      </tr>
      <tr>
        <td><input type="checkbox" value=""></td>
        <td><a href="#">Rapparport</a></td>
        <td>Todd</td>
        <td>todd@rapparport.com</td>
        <td>07/26/13</td>
        <td>Irvine</td>
        <td>R</td>
        <td>87%</td>
        <td>O&M Tech 1</td>
        <td>Chinese Station</td>
      </tr>
      <tr>
        <td><input type="checkbox" value=""></td>
        <td><a href="#">Rapparport</a></td>
        <td>Todd</td>
        <td>todd@rapparport.com</td>
        <td>07/26/13</td>
        <td>Irvine</td>
        <td>R</td>
        <td>87%</td>
        <td>O&M Tech 1</td>
        <td>Chinese Station</td>
      </tr>
    </table>
  </form>
  <div class="container">
    <!-- Split button -->
    <div class="btn-group pull-right">
      <button type="button" class="btn btn-ihi btn-small"><i class="icon-envelope-sign icon-large"></i> Email</button>
      <button type="button" class="btn btn-ihi btn-small dropdown-toggle" data-toggle="dropdown"> <span class="caret"></span> </button>
      <ul class="dropdown-menu">
        <li><a href="#">Passed</a></li>
        <li><a href="#">Accepted</a></li>
        <li><a href="#">Rejected</a></li>
        <li><a href="#">Custom</a></li>
      </ul>
    </div>
  <ul class="pagination pagination-small pull-left">
    <li><a href="#">&laquo;</a></li>
    <li><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
    <li><a href="#">&raquo;</a></li>
  </ul>
  </div>
  <hr>
  <footer>
    <p><small>Copyright &copy; <?php echo date("Y") ?> IHI Power Services Corp. All rights reserved.</small></p>
  </footer>
</div>
<!-- /container --> 
<script>
function selectToggle(toggle, form) {
     var myForm = document.forms[form];
     for( var i=0; i < myForm.length; i++ ) { 
          if(toggle) {
               myForm.elements[i].checked = "checked";
          } 
          else {
               myForm.elements[i].checked = "";
          }
     }
}
</script> 
<script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src='//www.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
</body>
</html>

