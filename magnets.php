
<!DOCTYPE html>
<html lang="en">
  <head>
	<?php
	$head = file_get_contents('header.html');
	echo $head;	
	?>
	<meta name="description" content="Magnets for fusion, plasma energy, and physics labs. Custom sizing, materials, and configurations available.">
  <title>Magnets | Woodruff Scientific, Inc.</title>
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
  		<li class="active">Magnets</li>
	</ol>

      <!-- Main component for a primary marketing message or call to action -->

	<div>       		
		<ul class="left">
		<li><a href="solenoids">Solenoids</a></li>
		<li><a href="hh">Helmholtz Coils</a></li>
		<li><a href="pfcoil">PF Coil Sets</a></li>
		<li><a href="noncircular">Non-Circular Coils</a></li>
		<li><a href="lowlhighc">Low L High Current</a></li>
		<li><a href="pancake">Flat/Pancake Coils</a></li>
		</ul>
	</div>
	<div class="">

	<h1>Magnets</h1>
	<img class="left" src="img/LANLcoils.jpg" width="224" height="300"><p> We produce custom magnetic field coils designed for specific pulsed power applications in fusion energy sciences, requiring high field strengths, high currents, high voltages, often UH vacuum compatibility (see e.g. Fig 1) and to withstand large forces. Typical coil sets have been designed, and built for poloidal field generation, but also for applications for calibration of diagnostics. Offerings below can be tailored to specific applications.</p>
	<p class="text-muted">
		Fig 1. Example: vacuum-compatible 23″OD HH coils designed for LANL’s PLX experiment.
	</p>

	<p>Need high-field magnetic coils for your lab? WSI can provide a cost-effective solution.</p>
	<p><a class="btn btn-lg btn-primary" href="mailto:sales@woodruffscientific.com" role="button">Get a Quote &raquo;</a></p>

      </div>



     

    </div> <!-- /container -->
    </div> <!-- /wrap -->
	<?php
	$footer = file_get_contents('footer.html');
	echo $footer;	
	?>
  </body>
</html>

