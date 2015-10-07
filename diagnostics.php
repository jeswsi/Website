<!DOCTYPE html>
<html lang="en">
  <head>
	<?php
	$head = file_get_contents('header.html');
	echo $head;	
	?>
	<meta name="description" content="Custom diagnostics for fusion, plasma energy, and physics labs. WSI has nearly a decade of experience designing and manufacturing diagnostics for plasma experiments.">
  <title>Diagnostics | Woodruff Scientific, Inc.</title>
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
  		<li class="active">Diagnostics</li>
	</ol>
				<ul class="left">
					<li><a href="magnetic">Magnetic Field</a></li>
					<li><a href="electrostatic">Plasma Particle Flux</a></li>
        			<li><a href="optical">Refractive-Index Measurements</a></li>
        			<li><a href="spectroscopy">Spectroscopic</a></li>
        			<li><a href="thomson">Scattering</a></li>
        			<li><a href="neutralpart">Neutral Particles</a></li>
        			<li><a href="neutrons">Neutrons</a></li>
       			</ul>
    				<h1>Diagnostics</h1>

	<p>WSI has nearly a decade of experience designing and manufacturing diagnostics for plasma experiments. Browse our product listings to the left or download a <a href="pdf/Diagnostics.pdf">flyer (pdf)</a>.</p>
	<p><a class="btn btn-lg btn-primary" href="mailto:sales@woodruffscientific.com" role="button">Get a Quote &raquo;</a></p>

    </div> <!-- /container -->
    </div> <!-- /wrap -->

	<?php
	$footer = file_get_contents('footer.html');
	echo $footer;	
	?>	   
  </body>
</html>
