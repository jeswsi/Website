<!DOCTYPE html>
<html lang="en">
  <head>
	<?php
	$head = file_get_contents('header.html');
	echo $head;	
	?>
	<meta name="description" content="High Field Magnet design for fusion, plasma energy, and physics labs. WSI has engineered and built vacuum systems, pulsed power systems, and high field magnets. We can perform basic Thermal and Structural analysis with FEM software.">
  <title>High Field Magnet Design | Woodruff Scientific, Inc.</title>
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
  		<li class="active">High Field Magnet Design</li>
	</ol>



	<h1>High Field Magnet Design</h1>
	<p>WSI offers design of high field magnets customized for your needs. Please view our <a href="magnets">magnet product listings</a> for previous work.</p>
	

<p><a class="btn btn-lg btn-primary" href="mailto:sales@woodruffscientific.com" role="button">Get a Quote &raquo;</a></p>



    </div> <!-- /container -->
    </div> <!-- /wrap -->

	<?php
	$footer = file_get_contents('footer.html');
	echo $footer;	
	?>	   
  </body>
</html>
