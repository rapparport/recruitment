<?php include 'inc/header.php'; ?>
<body id="users">

<!-- Master nav -->
<div class="navbar navbar-fixed-top navbar-inverse navbar-fixed-top bs-docs-nav">
  <div class="container"> <a href="./" class="navbar-brand">Recruitment System</a>
    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
    <div class="nav-collapse collapse bs-navbar-collapse">
      <ul class="nav navbar-nav">
        <li><a href="candidates.php">Candidates</a></li>
        <li class="active"><a href="users.php">Users</a></li>
        <li><a href="templates.php">Email Templates</a></li>
      </ul>
      <p class="navbar-text pull-right">Signed in as <a href="#" class="navbar-link">Vahe Avagyan</a> | <a href="#" class="navbar-link"><i class="icon-user"></i> My Profile</a> | <a href="#" class="navbar-link">Sign Out</a></p>
    </div>
  </div>
</div>
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
    <tr>
      <th scope="col">Last Name</th>
      <th scope="col">First Name</th>
      <th scope="col">Email Address</th>
      <th scope="col">Password</th>
      <th scope="col">Plant Location</th>
    </tr>
    <tr>
      <td><a href="user_edit.php">Avagyan</a></td>
      <td>Vahe</td>
      <td>avagyanvahe@gmail.com</td>
      <td>**********</td>
      <td>Corporate</td>
    </tr>
    <tr>
      <td><a href="user_edit.php">Rapparport</a></td>
      <td>Todd</td>
      <td>todd@rapparport.com</td>
      <td>**********</td>
      <td>Corporate</td>
    </tr>
    <tr>
      <td><a href="user_edit.php">Edison</a></td>
      <td>Thomas</td>
      <td>tom@edison.com</td>
      <td>**********</td>
      <td>Chinese Station</td>
    </tr>
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
