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
 	 	<li><a href="products.php">Products</a></li>
  		<li class="active">Devices</li>
	</ol>
	<h1>Devices</h1>
	<p class="center"><a href="img/STPX.jpg"><img src="img/STPX-300x199.jpg" alt="STPX" width="300" height="199" class="aligncenter size-medium wp-image-1971" /></a><br />
<span class="text-muted">Fig. 1: FAMU Spheromak (STPX). L to R: Baysha Bernales (Physics undergrad) and Brandon Alexander (lead technician).</span></p>
	<p>WSI can integrate diagnostics, power, magnets, DAQ, and vacuum to produce turn-key plasma research devices. We can deliver Spheromaks, Field Reversed Configurations, Mirrors, Dense Plasma Foci, Inertial Electrostatic Confinement, and many other devices. Let us know what you want built.</p>
<p><a class="btn btn-lg btn-primary" href="mailto:sales@woodruffscientific.com" role="button">Get a Quote &raquo;</a></p><br />

<blockquote>“Woodruff Scientific Inc. constructed the Florida A&M University (FAMU)/Center for Plasma Science and Technology (CePaST) STPX (Spheromak Turbulent Plasma Experiment) under a subcontract funded by the U.S. Department of Energy… The STPX achieved plasma during the first attempt and CePaST is very pleased with the work performed by Woodruff Scientific Inc.” <a href="Woodruff-Testimonial.pdf">Full Testimonial (pdf)</a>
	<footer>Charles A. Weatherford, Professor of Physics and Director of the Florida A&M University Center for Plasma Science and Technology 2013</footer></blockquote>

    </div> <!-- /container -->
    </div> <!-- /wrap -->

	<?php
	$footer = file_get_contents('footer.html');
	echo $footer;	
	?>	   
  </body>
</html>
