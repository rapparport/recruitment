<?php include 'inc/checkSession.php'; ?>
<?php include 'inc/header.php'; ?>
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
            <label for="InputEmail">Email address</label>
            <input type="text" class="form-control" id="InputEmail" placeholder="Enter email">
          </div>
          <div class="form-group">
            <label for="InputPassword">Password</label>
            <input type="password" class="form-control" id="InputPassword" placeholder="Password">
          </div>
           <div class="form-group">
            <label for="InputLocation">Location</label>
         <select class="form-control">
  <option>Select Location</option>
  <option>Chinese Station</option>
  <option>Rio Bravo Fresno</option>
  <option>Rio Bravo Rocklin</option>
  <option>Rio Bravo Jasmin</option>
  <option>Rio Bravo Poso</option>
  <option>Shasta Renewable</option>
  <option>Buena Vista Biomass</option>
  <option>Corporate</option>
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
