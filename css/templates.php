<?php include 'inc/checkSession.php'; ?>
<?php include 'inc/header.php'; ?>
<body id="users">

<!-- Master nav -->
<?php include 'inc/menu.php'; ?>
<div class="container">
  <div class="row title">
    <div class="col-12 col-sm-8 col-lg-8">
      <h1><i class="icon-envelope"></i> Email Templates</h1>
    </div>
    <div class="col-6 col-sm-4 col-lg-4"> <a href="template_add.php">
      <button type="button" class="btn btn-ihi btn-large pull-right"><i class="icon-plus-sign icon-large"></i> Add Template</button>
      </a> </div>
  </div>
  <table class="table table-striped table-hover">
    <tr>
      <th scope="col">Template Name</th>
      <th scope="col">Template Description</th>
      <th scope="col" class="text-center">Delete</th>
    </tr>
    <tr>
      <td><a href="template_edit.php">Passed</a></td>
      <td>Announcement for candidate passing exam and qualifying for further evaluation</td>
      <td class="text-center"><a data-toggle="modal" data-target="#myModal" href="#"><i class="icon-remove icon-large"></i></a></td>
    </tr>
    <tr>
      <td><a href="template_edit.php">Accepted</a></td>
      <td>Announcement for offer of employment</td>
      <td class="text-center"><a data-toggle="modal" data-target="#myModal" href="#"><i class="icon-remove icon-large"></i></a></td>
    </tr>
    <tr>
      <td><a href="template_edit.php">Rejected</a></td>
      <td>Announcement for candidate failing exam and not qualifying for further evaluation</td>
      <td class="text-center"><a data-toggle="modal" data-target="#myModal" href="#"><i class="icon-remove icon-large"></i></a></td>
    </tr>
    <tr>
      <td><a href="template_edit.php">Custom</a></td>
      <td>Use this template to create blank message</td>
      <td class="text-center"><a data-toggle="modal" data-target="#myModal" href="#"><i class="icon-remove icon-large"></i></a></td>
    </tr>
  </table>
  <!-- Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Delete template</h4>
        </div>
        <div class="modal-body">
          <p>Are you sure you want to delete this email template?</p>
        </div>
        <div class="modal-footer"> <a href="#" class="btn btn-default" data-dismiss="modal">Close</a> <a href="#" class="btn btn-danger">Delete</a> </div>
      </div>
      <!-- /.modal-content --> 
    </div>
    <!-- /.modal-dialog --> 
  </div>
  <!-- /.modal -->
  
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
