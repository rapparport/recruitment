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
      <h1><i class="icon-envelope"></i> Add Template</h1>
    </div>
  </div>
  <div class="row form">
    <div class="col-lg-8">
      <?php if($_SESSION['message'] == 'emptyT') {?> <p style="color:red;">Please fill in fields</p> <?php } ?>
      <form name="addTempForm" method="post" action="template_insert.php">
        <fieldset>
          <div class="form-group">
            <label for="InputTemplateName">Template name</label>
            <input type="text" class="form-control" name="newTempName" id="InputTemplateName" placeholder="Enter template name">
          </div>
          <div class="form-group">
            <label for="InputTemplateDescription">Template description</label>
            <input type="text" class="form-control" name="newTempDesc" id="InputTemplateDescription" placeholder="Enter brief description">
          </div>
          <div class="well">
            <h5>Template message</h5>
            <textarea class="form-control" name="newTempMessage" rows="9"></textarea>
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
