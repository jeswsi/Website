<!DOCTYPE html>
<html lang="en">
  <head>
	<?php
	$head = file_get_contents('header.html');
	echo $head;	
	?>
  </head>

  <body>
    <div id="wrap">
    <div class="container">

	<?php
	$navbar = file_get_contents('navbar.html');
	echo $navbar;	
	?>	
	<ol class="breadcrumb">
  		<li><a href="index.php">Home</a></li>
  		<li class="active">Services</li>
	</ol>

	<h1>Services</h1>
		<ul class="left">
                  <li><a href="physics.php">Physics</a></li>
                  <li><a href="engineering.php">Engineering</a></li>
                  <li><a href="purchase.php">Purchase</a></li>
                  <li><a href="fabrication.php">Fabrication / Integration</a></li>
                  <li><a href="installation.php">Installation / Testing</a></li>
		</ul>
<p>We offer assistance with all stages of innovation: concept design, engineering design, procurement, fabrication, installation, testing, and operations. We can offer support packages to suit your application and budget.</p>


    </div> <!-- /container -->
    </div> <!-- /wrap -->

	<?php
	$footer = file_get_contents('footer.html');
	echo $footer;	
	?>	   
  </body>
</html>
