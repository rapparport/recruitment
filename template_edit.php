<?php include 'inc/header.php'; ?>
<body id="users">

<!-- Master nav -->
<div class="navbar navbar-fixed-top navbar-inverse navbar-fixed-top bs-docs-nav">
  <div class="container"> <a href="./" class="navbar-brand">Recruitment System</a>
    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
    <div class="nav-collapse collapse bs-navbar-collapse">
      <ul class="nav navbar-nav">
        <li><a href="candidates.php">Candidates</a></li>
        <li><a href="users.php">Users</a></li>
        <li class="active"><a href="templates.php">Email Templates</a></li>
      </ul>
      <p class="navbar-text pull-right">Signed in as <a href="user_edit.php" class="navbar-link">Vahe Avagyan</a> | <a href="#" class="navbar-link"><i class="icon-user"></i> My Profile</a> | <a href="#" class="navbar-link">Sign Out</a></p>
    </div>
  </div>
</div>
<div class="container">
  <div class="row title">
    <div class="col-lg-8">
      <h1><i class="icon-envelope"></i> Edit Template</h1>
    </div>
  </div>
  <div class="row form">
    <div class="col-lg-8">
      <form>
        <fieldset>
          <div class="form-group">
            <label for="InputTemplateName">Template name</label>
            <input type="text" class="form-control" id="InputTemplateName" placeholder="Enter template name" value="Passed">
          </div>
          <div class="form-group">
            <label for="InputTemplateDescription">Template description</label>
            <input type="text" class="form-control" id="InputTemplateDescription" placeholder="Enter brief description" value="Announcement for candidate passing exam and qualifying for further evaluation">
          </div>
          <div class="well">
            <h5>Template message</h5>
            <textarea class="form-control" rows="9">Dear IHI Power Services Candidate,

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec fermentum gravida justo, sed faucibus felis pellentesque eget. Nunc eu libero augue, eu euismod dui. Nulla facilisi. In et risus urna. Proin vel massa et lorem luctus dapibus sit amet in ipsum. Duis sodales molestie enim in vehicula. Phasellus orci orci, fermentum ac luctus et, lobortis vitae arcu. Vivamus commodo imperdiet molestie. Proin congue enim lectus.

Aenean posuere, est non tincidunt dignissim, neque ante malesuada massa, nec ultricies orci velit quis leo. Suspendisse tempus quam non dolor rutrum pharetra. Aliquam non mi neque, eu semper libero. Nam ut mi nisl, et vestibulum mauris. Aliquam erat volutpat. Maecenas at ante dui. Sed nec nibh ac sem auctor fermentum. 

Aenean ultricies urna sed ante cursus a placerat felis pretium. Maecenas condimentum aliquet lectus non imperdiet. 

IHI Power Services Corp.
Corporate Headquarters
95 Enterprise, Suite 300
Aliso Viejo, CA 92656

Phone: (949) 330-7900
Email: info@ihipower.com
</textarea>
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
