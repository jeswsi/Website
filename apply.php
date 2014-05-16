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
		<small>September 8-12, 2014 Session</small></h1>

		<div class="col-md-8">
		<p><a href="course">Back to Course information</a></p>
		<div class="panel panel-default">
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
    				<label for="name">School or Employer</label>
    				<input type="text" class="form-control" name="school" placeholder="Enter School / Employer">
  				</div>
          <div class="form-group">
            <label for="name">Anticipated Degree</label>
            <input type="text" class="form-control" name="degree" placeholder="Enter expected degree, major(s), minor(s)">
          </div>
				<div class="form-group">
    				<label for="languages">Computer Familiarity</label>
    				<textarea rows="3" class="form-control" name="languages" placeholder="Briefly describe familiarity with Operating Systems, programming languages, familiarity with command line, etc."></textarea>
    				<p class="help-block">Extensive programming experience is <strong>not</strong> necessary!</p>
  				</div>
  				<div class="form-group">
    				<label for="languages">Mathematics Familiarity</label>
    				<textarea rows="3" class="form-control" name="math" placeholder="Briefly describe familiarity with mathematics: PDEs, FEM, etc"></textarea>
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
		</div>
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

