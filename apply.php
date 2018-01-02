<!DOCTYPE html>
<html lang="en">
  <head>
	<?php
	$head = file_get_contents('header.html');
	echo $head;
	?>
  <meta name="description" content="">
  <title>Apply to Scientific Computing Bootcamp | Woodruff Scientific, Inc.</title>
  <script src="js/validate_form.js"></script>

  </head>

  <body>
<?php $googleTagManager = file_get_contents('googleTagManager.html'); echo $googleTagManager; ?>
    <div id="wrap">
    <div class="container">

	<?php
	$navbar = file_get_contents('navbar.html');
	echo $navbar;
	?>
	<ol class="breadcrumb">
  		<li><a href="index">Home</a></li>
 	 	<li><a href="#">Company</a></li>
  		<li class="active">Apply to Scientific Computing Bootcamp</li>
	</ol>
	<h1>Apply to Scientific Computing Bootcamp<br/>
		<small>Feb 26 - Mar 2, 2018 Session</small></h1>

		<div class="col-md-8">
		<p><a href="shortcourse">Back to Course information</a></p>
    <p>Application form is currently under construction. Please email <a href="mailto:info@woodruffscientific.com">info@woodruffscientific.com</a> for additional information.</p>
		<!-- <div class="panel panel-default">
			<div class="panel-body">
				<form name="apply" action="finish" onsubmit="return validate_form ( );" method="post">
				<div class="form-group">
    				<label for="name">Name</label>
    				<input type="text" class="form-control" name="name" placeholder="Enter full name">
  				</div>
				<div class="form-group">
    				<label for="email">Email address</label>
    				<input type="email" class="form-control" name="email" placeholder="Enter email">
  				</div>
        <div class="form-group">
            <label for="addemail">[Optional] Additional Email address</label>
            <input type="email" class="form-control" name="addemail" placeholder="Enter additional email">
          </div>
  				<div class="form-group">
    				<label for="school">School</label>
    				<input type="text" class="form-control" name="school" placeholder="Enter School">
  				</div>
          <div class="form-group">
            <label for="degree">Anticipated Degree</label>
            <input type="text" class="form-control" name="degree" placeholder="Enter anticipated degree">
          </div>
          <div class="form-group">
            <label for="major">Major(s)</label>
            <input type="text" class="form-control" name="major" placeholder="Enter major(s)">
          </div>
          <div class="form-group">
            <label for="minor">Minor(s)</label>
            <input type="text" class="form-control" name="minor" placeholder="Enter minor(s)">
          </div>
          <div class="form-group">
            <label for="credits">Credits in major completed</label>
            <input type="text" class="form-control" name="credits" placeholder="Enter credits">
          </div>
				<div class="form-group">
    				<label for="languages">Computer Familiarity</label>
    				<textarea rows="3" class="form-control" name="languages" placeholder="Briefly describe familiarity with operating systems, programming languages, familiarity with command line, etc."></textarea>
    				<p class="help-block">Extensive programming experience is <strong>not</strong> necessary!</p>
  				</div>
  				<div class="form-group">
    				<label for="languages">Mathematics Familiarity</label>
    				<textarea rows="3" class="form-control" name="math" placeholder="Briefly describe familiarity with mathematics: PDEs, FEM, etc."></textarea>
    				<p class="help-block">Extensive mathematics experience is <strong>not</strong> necessary!</p>
  				</div>
  				<div class="form-group">
    				<label for="how">How did you hear about this course?</label>
    				<input type="text" class="form-control" name="how" placeholder="">
  				</div>
  				<div class="form-group">
    				<label for="languages">Why are you interested in this course?</label>
    				<textarea rows="3" class="form-control" name="why" placeholder=""></textarea>
    				<p class="help-block"></p>
  				</div>
  				<div class="form-group">
    				<label for="languages">Anything else you'd like us to know?</label>
    				<textarea rows="3" class="form-control" name="anythingelse" placeholder=""></textarea>
    				<p class="help-block"></p>
  				</div>


  				<button type="submit" class="btn btn-default">Submit</button>
				</form>
			</div>
		</div>
		</div> -->
		<div class="clearfix"></div>
				<p><a href="course">Back to Course information</a></p>

    </div> <!-- /container -->
    </div> <!-- /wrap -->

	<?php
	$footer = file_get_contents('footer.html');
	echo $footer;
	?>
  </body>
</html>

