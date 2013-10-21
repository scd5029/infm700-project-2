<?php require "partials/_head.php" ?>
<?php require "partials/_navbar.php" ?>


<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
  <div class="container">
    <h1>Contact Us</h1>
    <p>
       The Friends of Patterson Park are located on <a href="https://www.google.com/maps/preview#!q=Patterson+Park%2C+Baltimore%2C+MD">27 South Patterson Park Avenue Baltimore, MD 21231</a>.
    </p>
  </div>
</div>


<!-- Example row of columns -->
<div class="container">
  <!-- Example row of columns -->
  <ol class="breadcrumb">
    <li><a href="#">Home</a></li>
    <li class="active"><a href="getInvolved.html">Contact Us</a></li>
  </ol>
  <div class="row">
    <div class="col-lg-12">
      <h2>Send Us An Email</h2>
      <p>
        <span style="color: red;">*</span>=required field
      </p>
      <form class="form-horizontal">
        <div class="control-group">
          <div class="controls form-inline">
            <label for="fromEmail">From:<span style="color: red;">*</span></label><input type="text" name="fromEmail" placeholder="Your Email Address" class="form-control">
          </div>
        </div>
        <div class="control-group">
          <div class="controls form-inline">
            <label for="toEmail">To:<span style="color: red;">*</span></label>
            <select name="toEmail" class="form-control">
              <option value="friends@pattersonpark.com">General Information (friends@pattersonpark.com)</option>
              <option value="volunteer@pattersonpark.com">Volunteer Information (volunteer@pattersonpark.com)</option>
            </select>
          </div>
        </div>
        <div class="control-group">
          <div class="controls form-inline">
            <label for="message">Message:<span style="color: red;">*</span></label>
            <textarea name="message" id="message" class="form-control" rows="5">
            </textarea>
          </div>
        </div>
        <br/>
        <p>
          <a class="btn btn-primary btn-lg">Send Email &raquo;</a>
        </p>
      </form>
    </div>
    <div class="col-lg-12">
      <h2>Other Contact Information</h2>
      <div class="row">
        <div class="col-lg-6">
          <h3>Mailing Address</h3>
          <p>
             27 South Patterson Park Avenue
          </p>
          <p>
             Baltimore, MD 21231
          </p>
          <h3>E-mail</h3>
          <p>
             For general information: friends@pattersonpark.com
          </p>
          <p>
             To volunteer: volunteer@pattersonpark.com
          </p>
        </div>
        <div class="col-lg-6">
          <h3>Phone</h3>
          <p>
             410-276-3676
          </p>
          <h3>Fax</h3>
          <p>
             410-327-7592
          </p>
        </div>
      </div>
    </div>
  </div>
</div>


<?php require "partials/_foot.php" ?>
<?php require "partials/_scripts.php" ?>

<script type="text/javascript">
  function getURLParameter(name) {
    return decodeURIComponent((new RegExp('[?|&]' + name + '=' + '([^&;]+?)(&|#|;|$)').exec(location.search)||[,""])[1].replace(/\+/g, '%20')) || null;
  }
  $(document).ready(function(){
    //Dynamic load email page from volunteers page buttons
    volunteer = getURLParameter('volunteer');
    if (volunteer == "true") {
      volunteerTeam = getURLParameter('volunteerTeam');
      $('[name=toEmail]').val('volunteer@pattersonpark.com');
      $("textarea#message").val('I am interested in learning more about volunteering for the ' + volunteerTeam);
    }
  });
</script>

<?php require "partials/_end.php" ?>
