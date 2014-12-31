<!DOCTYPE html>
<html lang="en">
  <head>
	<?php
	$head = file_get_contents('header.html');
	echo $head;	
	?>
  <meta name="description" content="Single tip Langmuir probes for fusion, plasma energy, and physics labs. Custom sizing, materials, and configurations available.">

  <title>Single Tip Langmuir Probes | Woodruff Scientific, Inc.</title>
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
  		<li><a href="electrostatic">Plasma Particle Flux</a></li>
  		<li class="active">Langmuir Probes</li>
	</ol>

					<ul class="right">
					<li>Langmuir Probes</li>
						<ul>
							<li><a href="langmuir_single">Single Tip</a></li>
							<li><a href="langmuir_double">Double Tip</a></li>
							<li><a href="langmuir_quad">Quad Tip</a></li>
							<li><a href="langmuir_flat">Flat</a></li>
						</ul>
       			</ul>
	<h1>Langmuir Probes</h1>
		<div class="col-md-6">
		<p class="center"><a href="img/single_tip.jpg"><img src="img/single_tip-small.jpg"></a><br />Single-tip Langmuir Probe</p>
	</div>
	<div class="clearfix"></div>

	<h3>Single Tip</h3>
	<p>Available in Single, Double, Triple, or Quad tip configurations. Flat probes also available.</p>


		<div class="clearfix"></div>
		<p><a class="btn btn-lg btn-primary" href="mailto:sales@woodruffscientific.com?subject=Langmuir Probes RFQ &#038;body=How%20many:%0D%0A%0D%0AFrequency%20response:%0D%0A%0D%0AOD:%0D%0A%0D%0AVacuum%20rating%20(e.g.%20UHV,%20air):%0D%0A%0D%0AHarnessing%20length:%0D%0A%0D%0ACladding%20(e.g.%20BN,%20ss):%0D%0A%0D%0AShort%20description%20of%20the%20application:%0D%0A%0D%0APlease%20find%20attached%20a%20sketch/engineering%20drawing%20of%20the%20application.%0D%0A%0D%0AContact(Name/email/phone/fax/etc):%0D%0A%0D%0ANeeded%20by(Date):">Get a Quote &raquo;</a></p>






    </div> <!-- /container -->
    </div> <!-- /wrap -->

	<?php
	$footer = file_get_contents('footer.html');
	echo $footer;	
	?>	   
  </body>
</html>
