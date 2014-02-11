
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

      <!-- Main component for a primary marketing message or call to action -->

	<div class="menu col-md-4">
        <h2>Magnets</h2>        		
		<ul>
		<li><a href="#solenoids">Solenoids</a></li>
		<li><a href="#helmholtzcoils">Helmholtz Coils</a></li>
		<li><a href="#">PF Coil Sets</a></li>
		<li><a href="#">Non-Circular Coils</a></li>
		<li><a href="#">Low L High Current</a></li>
		<li><a href="#">Flat/Pancake Coils</a></li>
		</ul>
	</div>
	<div class="col-md-8">

	<h2></h2>
	<img class="left" src="LANLcoils.jpg" width="224" height="300"><p> We produce custom magnetic field coils designed for specific pulsed power applications in fusion energy sciences, requiring high field strengths, high currents, high voltages, often UH vacuum compatibility (see e.g. Fig 1) and to withstand large forces. Typical coil sets have been designed, and built for poloidal field generation, but also for applications for calibration of diagnostics. Offerings below can be tailored to specific applications.</p>
	<p class="text-muted">
		Fig 1. Example: vacuum-compatible 23″OD HH coils designed for LANL’s PLX experiment.
	</p>
      </div>



      <div><!--products -->
	<a id="solenoids"></a>
	<h3>Solenoids</h3>
	<div class="col-md-6">
		
		<p><a href="Coil1.jpg"><img alt="Coil1" src="Coil1-300x129.jpg" width="300" height="129" /></a><br />
		<a href="Coil1.jpg">Flux plot</a><br />
		Circuit (<a href="Coil1.1-8mF-5O-0.3089H.pdf">schematic</a>, <a href="Coil1.1-8mF-5O-0.3089Ht.pdf">analysis</a>)</p>
	</div>

	<div class="col-md-6">
		<p><a href="Coil2.jpg"><img alt="Coil2" src="Coil2-300x129.jpg" width="300" height="129" /></a><br />
		<a href="Coil21.jpg">Flux plot</a><br />
		Circuit (<a href="Coil2.1-2mF-32mO-0.021mH.pdf">schematic</a>, <a href="Coil2.1-2mF-32mO-21mHt.pdf">analysis</a>)</p>	
		
	</div>

	<div class="col-md-6">
		<p><a href="Coil3.jpg"><img alt="Coil3" src="Coil3-300x159.jpg" width="300" height="159" /></a><br />
<a href="Coil31.jpg">Flux plot</a><br />
Circuit (<a href="Coil3.1-2mF-0.3mO-3uH.pdf">schematic</a>, <a href="Coil3.1-2mF-0.3mO-3uHt.pdf">analysis</a>)</p>
	</div>

	<div class="col-md-6">
		<p><a href="Coil41.jpg"><img alt="Coil4" src="Coil41-300x159.jpg" width="300" height="159" /></a><br />
<a href="Coil4.jpg">Flux plot</a><br />
Circuit (<a href="Coil4.1-2mF-0.16O-9.3mH1.pdf">schematic</a>, <a href="Coil4.1-2mF-0.16O-9.3mHt.pdf">analysis</a>)</p>
	</div>

	<p><a class="btn btn-lg btn-primary" href="mailto:sales@woodruffscientific.com" role="button">Get a Quote &raquo;</a></p>

	<a id="helmholtzcoils"></a>
	<h3>Helmholtz Coils</h3>
	<div class="col-md-6">
	</div>
	<div class="col-md-6">
	</div>
    </div> <!-- /products -->

    </div> <!-- /container -->
    </div> <!-- /wrap -->

	<?php
	$footer = file_get_contents('footer.html');
	echo $footer;	
	?>	   
  </body>
</html>

