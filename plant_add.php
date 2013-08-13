<?php include 'inc/checkSession.php'; ?>
<?php include 'inc/header.php'; ?>

<body id="users">

<!-- Master nav -->
<?php include 'inc/menu.php'; ?>
<div class="container">
  <div class="row title">
    <div class="col-lg-8">
      <h1><i class="icon-gear"></i> Add Power Plant</h1>
    </div>
  </div>
  <div class="row form">
    <div class="col-lg-8">
      <?php if($_SESSION['message'] == 'emptyP') {?> <p style="color:red;">Please fill in all fields</p> <?php } ?>
      <form name="addPlantForm" method="post" action="plant_insert.php">
        <fieldset>
          <div class="form-group">
            <label for="InputTemplateName">Power plant name</label>
            <input type="text" class="form-control" name="PlantName" id="InputPlantName" placeholder="Enter power plant name">
          </div>
          <div class="form-group">
            <label for="InputTemplateDescription">Power plant description</label>
            <input type="text" class="form-control" name="PlantDesc" id="InputPlantDescription" placeholder="Enter brief description">
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
