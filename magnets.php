
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
		<li><a href="Maxwell">maxwell Coils</a></li>
		<li><a href="pfcoil">PF Coil Sets</a></li>
		<li><a href="noncircular">Non-Circular Coils</a></li>
		<li><a href="lowlhighc">Low L High Current</a></li>
<!-- 		<li><a href="pancake">Flat/Pancake Coils</a></li> -->
		</ul>
	</div>
	<div class="">

	<h1>Magnets</h1>
	<img class="left" src="img/LANLcoils.jpg" width="224" height="300">
	<img class="left" src="img/HH_coil.jpg" width="224" height="300">
	<p>We produce custom magnetic field coils engineered for pulsed power applications, requiring high field strengths, high currents, high voltages, often UH vacuum compatibility (see e.g. Fig 1) and to withstand large forces. Typical coil sets have been designed and built for Helmholtz, Maxwell and other configurations (e.g. Poloidal field).  We have designed and built cooled coil systems (through to 10kW). Our standard offerings below can be tailored to specific applications.</p>
	<p class="text-muted">
		Fig 1. Vacuum-compatible 23″OD HH coils designed for LANL’s PLX experiment.<br>
		Fig 2. Vacuum-compatible  HH coils designed for The Aerospace Corporation.
	</p>

	<div class="clearfix">
  </div>
	<p>Useful Coil References at Wikipedia:</p>
	<ul>
		<li><a href="https://en.wikipedia.org/wiki/Helmholtz_coil">Helmholtz Coils</a></li>
		<li><a href="https://en.wikipedia.org/wiki/Maxwell_coil">Maxwell Coils</a></li>
		<li><a href="https://en.wikipedia.org/wiki/Field_coil">Field Coils</a></li>
		<li><a href="https://en.wikipedia.org/wiki/Electromagnet">Electromagnets</a></li>
		<li><a href="https://en.wikipedia.org/wiki/Pulsed_power">Pulsed Power</a></li>
	</ul>


	<p>Need high-field magnetic coils for your lab? WSI can provide a cost-effective solution.</p>
	<p><a class="btn btn-lg btn-primary" href="mailto:sales@woodruffscientific.com?subject=Coil RFQ &amp;body=Coil%20configuration%20(Helmholtz/%20Maxwell/%20other%20(please%20describe)):%0D%0A%0D%0AInductance%20L:%0D%0A%0D%0APeak%20current%20:%0D%0A%0D%0AOD:%0D%0A%0D%0AID:%0D%0A%0D%0AVacuum-compatible?(yes/no):%0D%0A%0D%0ACooling%20Requirements:%0D%0A%0D%0AShort%20description%20of%20the%20application:%0D%0A%0D%0APlease%20find%20attached%20a%20sketch/engineering%20drawing%20of%20the%20application.%0D%0A%0D%0ANeeded%20by(Date):%0D%0A%0D%0AContact(Name/email/phone/fax/etc):" role="button">Get a Quote &raquo;</a></p>

      </div>



     

    </div> <!-- /container -->
    </div> <!-- /wrap -->
	<?php
	$footer = file_get_contents('footer.html');
	echo $footer;	
	?>
  </body>
</html>

