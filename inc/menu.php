<div class="navbar navbar-fixed-top navbar-inverse navbar-fixed-top bs-docs-nav">
  <div class="container"> <a href="./" class="navbar-brand">Recruitment System</a>
    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
    <div class="nav-collapse collapse bs-navbar-collapse">
      <ul class="nav navbar-nav">
        <li <?php if(basename($_SERVER['PHP_SELF']) == "candidates.php"){ ?> class="active"<?php } ?> ><a href="candidates.php">Candidates</a></li>
        <li <?php if(basename($_SERVER['PHP_SELF']) == "users.php"){ ?> class="active"<?php } ?>><a href="users.php">Users</a></li>
        <li <?php if(basename($_SERVER['PHP_SELF']) == "templates.php"){ ?> class="active"<?php } ?>><a href="templates.php">Email Templates</a></li>
        <li <?php if(basename($_SERVER['PHP_SELF']) == "plants.php"){ ?> class="active"<?php } ?>><a href="plants.php">Power Plants</a></li>
      </ul>
      <p class="navbar-text pull-right">Signed in as <a href="user_edit.php" class="navbar-link"><?php echo $userName;?></a> | <a href="#" class="navbar-link"><i class="icon-user"></i> My Profile</a> | <a href="logout.php" class="navbar-link">Sign Out</a></p>
    </div>
  </div>
</div>



