<?php include 'inc/header.php'; ?>
<body id="candidates">

<!-- Master nav -->
<div class="navbar navbar-fixed-top navbar-inverse navbar-fixed-top bs-docs-nav">
  <div class="container"> <a href="./" class="navbar-brand">Recruitment System</a>
    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
    <div class="nav-collapse collapse bs-navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="candidates.php">Candidates</a></li>
        <li><a href="users.php">Users</a></li>
        <li><a href="templates.php">Email Templates</a></li>
      </ul>
      <p class="navbar-text pull-right">Signed in as <a href="user_edit.php" class="navbar-link">Vahe Avagyan</a> | <a href="#" class="navbar-link"><i class="icon-user"></i> My Profile</a> | <a href="#" class="navbar-link">Sign Out</a></p>
    </div>
  </div>
</div>
<div class="container">
  <div class="row title">
    <div class="col-lg-8">
      <h1><i class="icon-user"></i> Add Candidate</h1>
    </div>
  </div>
  <div class="row form">
    <form>
      <div class="col-lg-8">
        <h3>Personal information</h3>
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
            <label for="InputPhone">Phone</label>
            <input type="text" class="form-control" id="InputPhone" placeholder="Enter phone number">
          </div>
          <div class="form-group">
            <label for="InputMobilePhone">Mobile phone</label>
            <input type="text" class="form-control" id="InputMobilePhone" placeholder="Enter mobile phone number">
          </div>
          <div class="form-group">
            <label for="InputAddress">Street address</label>
            <input type="text" class="form-control" id="InputAddress" placeholder="Enter street address">
          </div>
          <div class="form-group">
            <label for="InputCity">City</label>
            <input type="text" class="form-control" id="InputCity" placeholder="Enter city">
          </div>
          <div class="form-group">
            <label for="InputState">State</label>
            <select class="form-control" id="InputState">
              <option value="AL">Alabama</option>
              <option value="AK">Alaska</option>
              <option value="AZ">Arizona</option>
              <option value="AR">Arkansas</option>
              <option selected="selected" value="CA">California</option>
              <option value="CO">Colorado</option>
              <option value="CT">Connecticut</option>
              <option value="DE">Delaware</option>
              <option value="DC">District of Columbia</option>
              <option value="FL">Florida</option>
              <option value="GA">Georgia</option>
              <option value="HI">Hawaii</option>
              <option value="ID">Idaho</option>
              <option value="IL">Illinois</option>
              <option value="IN">Indiana</option>
              <option value="IA">Iowa</option>
              <option value="KS">Kansas</option>
              <option value="KY">Kentucky</option>
              <option value="LA">Louisiana</option>
              <option value="ME">Maine</option>
              <option value="MD">Maryland</option>
              <option value="MA">Massachusetts</option>
              <option value="MI">Michigan</option>
              <option value="MN">Minnesota</option>
              <option value="MS">Mississippi</option>
              <option value="MO">Missouri</option>
              <option value="MT">Montana</option>
              <option value="NE">Nebraska</option>
              <option value="NV">Nevada</option>
              <option value="NH">New Hampshire</option>
              <option value="NJ">New Jersey</option>
              <option value="NM">New Mexico</option>
              <option value="NY">New York</option>
              <option value="NC">North Carolina</option>
              <option value="ND">North Dakota</option>
              <option value="OH">Ohio</option>
              <option value="OK">Oklahoma</option>
              <option value="OR">Oregon</option>
              <option value="PA">Pennsylvania</option>
              <option value="RI">Rhode Island</option>
              <option value="SC">South Carolina</option>
              <option value="SD">South Dakota</option>
              <option value="TN">Tennessee</option>
              <option value="TX">Texas</option>
              <option value="UT">Utah</option>
              <option value="VT">Vermont</option>
              <option value="VA">Virginia</option>
              <option value="WA">Washington</option>
              <option value="WV">West Virginia</option>
              <option value="WI">Wisconsin</option>
              <option value="WY">Wyoming</option>
            </select>
          </div>
          <div class="form-group">
            <label for="InputZip">Zip code</label>
            <input type="text" class="form-control" id="InputZip" placeholder="Enter zip code">
          </div>
          <div class="form-group">
            <label for="InputSSN">Last 4 digits of SSN</label>
            <input type="text" class="form-control" id="InputSSN" placeholder="Enter last 4 digits of SSN">
          </div>
        </fieldset>
      </div>
      <div class="col-lg-12">
        <h3>Testing History</h3>
          <button type="button" id="add" class="btn btn-ihi btn-small"><i class="icon-plus-sign"></i> Add row</button>

            <table id="test_history" class="table table-striped table-hover">
<thead>      <tr>
        <th scope="col">Test Date</th>
        <th scope="col">Answer Sheet</th>
        <th scope="col">Test Location</th>
        <th scope="col">Test Result</th>
        <th scope="col">Pass Probability</th>
        <th scope="col">Position</th>
        <th scope="col">Work Location</th>
      </tr></thead>
<tbody>      <tr>
        <td>      <input type="text" class="form-control" value="" data-date-format="mm/dd/yy" id="InputTestDate" placeholder="Choose date">
</td>
        <td>      <input type="text" class="form-control" value="" id="InputAnswerSheet" placeholder="Enter sheet number">
</td>
        <td>      <select class="form-control">
  <option>Choose plant</option>
  <option>Chinese Station</option>
  <option>Rio Bravo Fresno</option>
  <option>Rio Bravo Rocklin</option>
  <option>Rio Bravo Jasmin</option>
  <option>Rio Bravo Poso</option>
  <option>Shasta Renewable</option>
  <option>Corporate</option>
</select>
</td>
        <td> <select class="form-control">
  <option>Choose plant</option>
  <option>Chinese Station</option>
  <option>Rio Bravo Fresno</option>
  <option>Rio Bravo Rocklin</option>
  <option>Rio Bravo Jasmin</option>
  <option>Rio Bravo Poso</option>
  <option>Shasta Renewable</option>
  <option>Corporate</option>
</select></td>
        <td>  <select class="form-control">
  <option>Choose plant</option>
  <option>Chinese Station</option>
  <option>Rio Bravo Fresno</option>
  <option>Rio Bravo Rocklin</option>
  <option>Rio Bravo Jasmin</option>
  <option>Rio Bravo Poso</option>
  <option>Shasta Renewable</option>
  <option>Corporate</option>
</select>
</td>
        <td>  <select class="form-control">
  <option>Choose plant</option>
  <option>Chinese Station</option>
  <option>Rio Bravo Fresno</option>
  <option>Rio Bravo Rocklin</option>
  <option>Rio Bravo Jasmin</option>
  <option>Rio Bravo Poso</option>
  <option>Shasta Renewable</option>
  <option>Corporate</option>
</select>
</td>
        <td> <select class="form-control">
  <option>Choose plant</option>
  <option>Chinese Station</option>
  <option>Rio Bravo Fresno</option>
  <option>Rio Bravo Rocklin</option>
  <option>Rio Bravo Jasmin</option>
  <option>Rio Bravo Poso</option>
  <option>Shasta Renewable</option>
  <option>Corporate</option>
</select>
</td>
      </tr></tbody>
</table>
        <fieldset>
        </fieldset>
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </form>
  </div>
<hr>
<footer>
  <p><small>Copyright &copy; <?php echo date("Y") ?> IHI Power Services Corp. All rights reserved.</small></p>
</footer>
</div>
<!-- /container -->
<script>
 $("#add, .check ").click(function() {
 $('#test_history tbody>tr:last')
    .clone(true)
    .insertAfter('#test_history tbody>tr:last').find('input').each(function(){
        $(this).val('');
    });
});
</script>
<script>
$('#InputTestDate').datepicker();
</script>
<script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src='//www.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
</body>
</html>
