<!DOCTYPE html>
<html lang="en">
  <head>
	<?php
	$head = file_get_contents('header.html');
	echo $head;	
	?>
  <meta name="description" content="Physics analysis and computational physics which  WSI can provide for all stages of fusion, plasma energy, and physics labs.">
  <title>Physics | Woodruff Scientific, Inc.</title>
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
  		<li class="active">Physics</li>
	</ol>
	<h1>Physics</h1>
	<p>We can provide equilibrium, time-dependent MHD simulations for most Magnetic Fusion Energy (MFE) systems, using various state-of-the-art numerical models. Accounts are available on our local cluster for pre-production runs (up to 32 processors). Support for compilation, pre-, and post-processing offered. We also run various FEM fluid codes and have a broad range of circuit modeling capabilities. Use our expertise to get the most out of your simulations.</p>

<p><a class="btn btn-lg btn-primary" href="mailto:sales@woodruffscientific.com" role="button">Get a Quote &raquo;</a></p>

    <h3>Equilibrium / Stability</h3>
    <h3>Resistive MHD</h3>

    <h3>Hydrodynamics</h3>

    <h3>Multiphysics</h3>

    <h3>Electrostatics</h3>

    <h3>Systems Analysis</h3>

    <h3>Stray Light Modeling</h3>

    <h3>Pre-production HPC</h3>

    </div> <!-- /container -->
    </div> <!-- /wrap -->

	<?php
	$footer = file_get_contents('footer.html');
	echo $footer;	
	?>	   
  </body>
</html>
