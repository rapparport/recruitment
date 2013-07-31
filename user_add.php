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
        <li><a href="plants.php">Power Plants</a></li>
      </ul>
      <p class="navbar-text pull-right">Signed in as <a href="user_edit.php" class="navbar-link">Vahe Avagyan</a> | <a href="#" class="navbar-link"><i class="icon-user"></i> My Profile</a> | <a href="#" class="navbar-link">Sign Out</a></p>
    </div>
  </div>
</div>
<div class="container">
  <div class="row title">
    <div class="col-lg-8">
      <h1><i class="icon-user"></i> Add User</h1>
    </div>
  </div>
  <div class="row form">
    <div class="col-lg-8">
      <form>
        <fieldset>
          <div class="form-group">
            <label for="InputLastName">Last name</label>
            <input type="text" class="form-control" id="InputLastName" placeholder="Enter last name">
          </div>
          <div class="form-group">
            <label for="InputFirstName">First name</label>
            <input type="text" class="form-control" id="InputFirstName" placeholder="Enter first name">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail">Email address</label>
            <input type="text" class="form-control" id="InputEmail" placeholder="Enter email">
          </div>
          <div class="form-group">
            <label for="InputPassword">Password</label>
            <input type="password" class="form-control" id="InputPassword" placeholder="Password">
          </div>
          <div class="well">
            <h5>User can manage candidates for:</h5>
            <label class="checkbox-inline first">
              <input type="checkbox" value="Chinese Station">
              Chinese Station </label>
            <label class="checkbox-inline">
              <input type="checkbox" value="Rio Bravo Fresno">
              Rio Bravo Fresno </label>
            <label class="checkbox-inline">
              <input type="checkbox" value="Rio Bravo Rocklin">
              Rio Bravo Rocklin </label>
            <label class="checkbox-inline">
              <input type="checkbox" value="Rio Bravo Jasmin">
              Rio Bravo Jasmin </label>
            <br>
            <label class="checkbox-inline first">
              <input type="checkbox" value="Rio Bravo Poso">
              Rio Bravo Poso </label>
            <label class="checkbox-inline">
              <input type="checkbox" value="Shasta">
              Shasta Renewable </label>
            <label class="checkbox-inline">
              <input type="checkbox" value="Corporate">
              Corporate</label>
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
