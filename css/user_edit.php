<?php include 'inc/checkSession.php'; ?>
<?php include 'inc/header.php'; ?>
<body id="users">

<!-- Master nav -->
<?php include 'inc/menu.php'; ?>
<div class="container">
  <div class="row title">
    <div class="col-lg-8">
      <h1><i class="icon-user"></i> Edit User</h1>
    </div>
  </div>
  <div class="row form">
    <div class="col-lg-8">
      <form>
        <fieldset>
          <div class="form-group">
            <label for="InputLastName">Last name</label>
            <input type="text" class="form-control" id="InputLastName" placeholder="Enter last name" value="Avagyan">
          </div>
          <div class="form-group">
            <label for="InputFirstName">First name</label>
            <input type="text" class="form-control" id="InputFirstName" placeholder="Enter first name" value="Vahe">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail">Email address</label>
            <input type="text" class="form-control" id="InputEmail" placeholder="Enter email" value="todd@rapparport.com">
          </div>
          <div class="form-group">
            <label for="InputPassword">Password</label>
            <input type="password" class="form-control" id="InputPassword" placeholder="Password" value="B1ll1on$">
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
              <input type="checkbox" value="Rio Bravo Jasmin" checked>
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
              <h4 class="modal-title">Delete user</h4>
            </div>
            <div class="modal-body">
              <p>Are you sure you want to delete this user?</p>
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
