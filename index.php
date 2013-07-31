<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title></title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" href="css/daterangepicker.css">
<link rel="stylesheet" href="css/main.css">
<script src="js/vendor/jquery-1.10.1.min.js"></script>
<script src="js/vendor/bootstrap.min.js"></script>
<script src="js/vendor/moment.min.js"></script>
<script src="js/vendor/daterangepicker.js"></script>

<!--[if lt IE 9]>
            <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
            <script>window.html5 || document.write('<script src="js/vendor/html5shiv.js"><\/script>')</script>
        <![endif]-->
</head>
<body>

<!-- This code is taken from http://twitter.github.com/bootstrap/examples/hero.html --> 

<!-- Docs master nav 
    <div class="navbar navbar-fixed-top navbar-inverse navbar-fixed-top bs-docs-nav">
  <div class="container">
    <a href="./" class="navbar-brand">IHI Recruit</a>
    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <div class="nav-collapse collapse bs-navbar-collapse">
      <ul class="nav navbar-nav">
          <li class="active"><a href="#candidates">Candidates</a></li>
          <li><a href="#users">Users</a></li>
          <li><a href="#email">Email Templates</a></li>
      </ul>
    </div>
  </div>
</div>-->

<div class="masthead">
  <div class="container"> <span class="icon-stack icon-large"> <i class="icon-circle icon-stack-base"></i> <i class="icon-user icon-light"></i> </span> <span class="icon-stack icon-large"> <i class="icon-circle icon-stack-base"></i> <i class="icon-user icon-light"></i> </span> <span class="icon-stack icon-large"> <i class="icon-circle icon-stack-base"></i> <i class="icon-user icon-light"></i> </span>
    <h3>Welcome to the</h3>
    <h1>IHI Candidate Recruitment System</h1>
    <p class="lead">A historical listing of candidates and their testing results.</p>
    <!-- Button trigger modal -->
    
  <a data-toggle="modal" href="#myModal" class="btn btn-warning btn-large">Let's get started</a>
    
    <!-- Modal -->
    <div class="modal fade" id="myModal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-body">
            <form class="form-signin" action="login.php">
              <h2 class="form-signin-heading">Please sign in</h2>
              <div class="form-group">
                <input type="text" class="form-control" id="exampleInputEmail" placeholder="Enter email">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" id="exampleInputPassword" placeholder="Password">
              </div>
              <p><a href="#">Forgot your password?</a></p>
            <button type="button" class="btn btn-large btn-primary btn-block">Sign in</button>
            </form>
          </div>
        </div>
        <!-- /.modal-content --> 
      </div>
      <!-- /.modal-dialog --> 
    </div>
    <!-- /.modal --> 
    
  </div>
</div>
<div class="container">
  <footer>
    <p>&nbsp;</p>
    <p class="text-center"><small>Copyright &copy; 2013 IHI Power Services Corp. All rights reserved.</small></p>
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
