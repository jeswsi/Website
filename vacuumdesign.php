<!DOCTYPE html>
<html lang="en">
  <head>
	<?php
	$head = file_get_contents('header.html');
	echo $head;	
	?>
	<meta name="description" content="Engineering design and analysis for fusion, plasma energy, and physics labs. WSI has engineered and built vacuum systems, pulsed power systems, and high field magnets. We can perform basic Thermal and Structural analysis with FEM software.">
  <title>Vacuum System Design | Woodruff Scientific, Inc.</title>
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
 	 	<li><a href="services">Services</a></li>
  		<li><a href="engineering">Engineering</a></li>
  		<li class="active">Vacuum System Design</li>
	</ol>



	<h1>Vacuum System Design</h1>
	<div class="col-md-6">
		<a href="img/0001-MC_full_updated.jpg"><img src="img/0001-MC_full_updated-300x231.jpg" alt="0001-MC_full_updated" width="300" height="231" /></a>
    </div>
    <div class="col-md-6">
		<p><a href="img/STPX.jpg"><img src="img/STPX-300x199.jpg" alt="STPX" width="300" height="199" /></a><br/>
		<span class="text-muted">FAMU Spheromak (STPX). Baysha Bernales (Physics undergrad) and Brandon Alexander (lead technician).</span></p>
	</div>

  <div class="clearfix"></div>


    <p><a class="btn btn-lg btn-primary" href="mailto:sales@woodruffscientific.com" role="button">Get a Quote &raquo;</a></p>


    </div> <!-- /container -->
    </div> <!-- /wrap -->

	<?php
	$footer = file_get_contents('footer.html');
	echo $footer;	
	?>	   
  </body>
</html>
