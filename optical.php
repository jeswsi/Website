<!DOCTYPE html>
<html lang="en">
  <head>
	<?php
	$head = file_get_contents('header.html');
	echo $head;	
	?>
	<meta name="description" content="Optical Diagnostics for fusion, plasma energy, and physics labs. HeNe Interferometers, CO2 Interferometers, Polarimeters, and more.">
  <title>Refractive-Index Measurements | Woodruff Scientific, Inc.</title>
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
 	 	<li><a href="products">Products</a></li>
		<li><a href="diagnostics">Diagnostics</a></li>
  		<li class="active">Refractive-Index Measurements</li>
	</ol>
	<h1>Refractive-Index Measurements</h1>
<!-- 	PICTURE OF HENE INTERFEROMETER
 -->	<p>Laser-based diagnostics that are sensitive to either path length
	changes, polarization angle changes or refractive index of the plasma
	comprise interferometers, polarimeters, and reflectometers.  We have
	experience with HeNe interferometers and also CO2 interferometers. An
	excellent reference refractive index diagnostics is Hutchinson's
	<a href="http://www.amazon.com/Principles-Plasma-Diagnostics-I-Hutchinson/dp/052167574X">Principles of Plasma Diagnostics 2nd Edition</a>
	</p>

	<h3>HeNe Interferometer</h3>
<!-- 
--ZEMAX image
--Components for download: mirror mount, beamsplitter mount,
--Other HeNe interferometers -->

	<h3>CO2 Interferometer</h3>
<!-- 	--ZEMAX image
--components for download
--other CO2 interferometers
 -->
	<h3>Polarimeter</h3>
<!-- 	--ZEMAX image
--components for download
--other polarimeters in the world -->

	<p><a class="btn btn-lg btn-primary" href="mailto:sales@woodruffscientific.com?subject=Optical Diagnostics RFQ &#038;body=How%20many:%0D%0A%0D%0ANumber%20of%20chords:%0D%0A%0D%0AShort%20description%20of%20the%20application:%0D%0A%0D%0APlease%20find%20attached%20a%20sketch/engineering%20drawing%20of%20the%20application.%0D%0A%0D%0AContact(Name/email/phone/fax/etc):%0D%0A%0D%0ANeeded%20by(Date):" role="button">Get a Quote &raquo;</a></p>


    </div> <!-- /container -->
    </div> <!-- /wrap -->

	<?php
	$footer = file_get_contents('footer.html');
	echo $footer;	
	?>	   
  </body>
</html>
