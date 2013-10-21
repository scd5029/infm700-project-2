<?php require "partials/_head.php" ?>
<?php require "partials/_navbar.php" ?>


<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
  <div class="container">
    <h3>Thank you for choosing to make a gift to Friends of Patterson Park today!</h3>
  </div>
</div>


<div class="container">
  <ol class="breadcrumb">
    <li><a href="#">Home</a></li>
    <li><a href="#">Donate Now</a></li>
  </ol>

  <div class="row">
    <div class="col-lg-8">
    <h1>Donate to Friends of Patterson Park</h1>
    <p><span style="color: red;">*</span>=required field</p>


    <form class="form-horizontal">
      <div class="control-group">
        <span class="control-label"><h4 align="left">Type of Friend:<span style="color: red;">*</span></h4></span>
        <div class="controls form-inline">
          <input type="radio" name="friendType" value="individual" id="individualRadio">
          <label for="inputKey">Individual</label>
          <input type="radio" name="friendType" value="corporate" id="corporateRadio">
          <label for="inputValue">Corporation</label>
        </div>
      </div>

      <div class="control-group">
        <span class="control-label"><h4 align="left">Friend Benefit Level:<span style="color: red;">*</span></h4></span>
        <div class="controls form-inline">
          <select name="anyFriendBenefits"><option>Any Benefits</option><option>These values can be dynamic if we think it's a good idea</option></select>
        </div>
      </div>

      <div class="control-group">
        <span class="control-label"><h4 align="left">Donation Amount:<span style="color: red;">*</span></h4></span>
        <div class="controls form-inline">
          <label for="inputKey">$</label>
          <input type="text" class="input-small" placeholder="0.00" id="inputKey">
        </div>
      </div>

      <div class="control-group">
        <span class="control-label"><h4 align="left">Donation Type:<span style="color: red;">*</span></h4></span>
        <div class="controls form-inline">
          <input type="radio" name="donationType" value="monthlyGift">
          <label for="inputKey">Monthly Gift</label>


          <input type="radio" name="donationType" value="annualGift">
          <label for="inputValue">Annual Gift</label>

          <input type="radio" name="donationType" value="oneTimeGift">
          <label for="inputValue">One Time Gift</label>
        </div>
      </div>

      <br/>

      <p><a class="btn btn-primary btn-lg">Donate Via Paypal Now &raquo;</a></p>
    </form>
  </div>


  <div class="col-lg-4">
    <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">PayPal For Donations</h3>
        </div>
        <div class="panel-body">
            We use PayPal to provide a secure and safe experience for our friends.  PayPal accepts the following major Credit Cards:
            <ul>
            <li>American Express</li>
            <li>Discover</li>
            <li>Maestro</li>
            <li>MasterCard</li>
            <li>Visa</li>
            <li>Your Bank Account</li>
            </ul>
            For more information about PayPal, please visit their <a href="https://www.paypal.com/us/webapps/mpp/how-paypal-works">website</a>.
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-12">
      <h2>Other Payment Methods</h2>
      <p>To donate to Paypal not using Paypal, please visit to the Individual and Corporate Friend pages or contact us for more information.</p>
      <div class="row">
      <div class="col-md-6">
        <p><a class="btn btn-info" href="BecomeAMember.html">Individual Friend Page &raquo;</a></p>
      </div>
      <div class="col-md-6">
        <p><a class="btn btn-info" href="BecomeACorporateMember.html">Corporate Friend Page &raquo;</a></p>
      </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-12">
      <h2>Contact Us</h2>
      <p>For more information on how to become a member, please contact the Executive Director of Friends of Patterson Park Jennifer Arndt Robinson.</p>
      <dl>
      <dd><b>Phone:</b> 410-276-3676
      </dd>
      <dd><b>Email:</b> Jennifer@pattersonpark.com
      </dd>
      </dl>
    </div>
  </div>
</div>


<?php require "partials/_foot.php" ?>
<?php require "partials/_scripts.php" ?>
<?php require "partials/_end.php" ?>
