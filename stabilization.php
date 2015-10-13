<!DOCTYPE html>
<html lang="en">
  <head>
	<?php
	$head = file_get_contents('header.html');
	echo $head;	
	?>
  <meta name="description" content="Stabilization for vacuum compatible confinement chambers.">
  <title>Stabilization | Woodruff Scientific, Inc.</title>
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
 	 	<li><a href="chambers">Plasma-Material Interface</a></li>
  		<li class="active">Stabilization</li>
	</ol>
	<h1>Stabilization</h1>
	<p>Both passive and active stabilization is needed for magnetic fusion
systems.  For experiments in which the pulse length is shorter than the
resistive diffusion time into the first wall, then passive stabilization
is usually sufficient (entailing copper plates, bars, or in some cases
flux-conformal first wall, or flux conserver).  Usually however for long
pulsed systems, some form of active feedback stabilization is needed.
Active feedback stabilization is needed for example for resistive wall
modes, to move plasma strike point around.  Controls and power systems,
and coils are all offered for this subject area, so please see:
	<ul>
		<li>Controls</li>
		<li><a href="noncircular">Non-circular magnetic field coils</a> (e.g. for RWMs)</li>
		<li><a href="magnets">Circular field coils</a> (e.g. for vertical stability)</li>
	</ul>
</p>
	<p><a class="btn btn-lg btn-primary" href="mailto:sales@woodruffscientific.com" role="button">Get a Quote &raquo;</a></p><br />


    </div> <!-- /container -->
    </div> <!-- /wrap -->

	<?php
	$footer = file_get_contents('footer.html');
	echo $footer;	
	?>	   
  </body>
</html>
