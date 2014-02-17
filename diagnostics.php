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
  		<li><a href="index">Home</a></li>
 	 	<li><a href="products">Products</a></li>
  		<li class="active">Diagnostics</li>
	</ol>
	<h1>Diagnostics</h1>
				<ul class="left">
				<li><a href="magnetic">Magnetic &amp; Electrostatic Probes</a></li>
        			<li><a href="optical">Optical</a></li>
        			<li><a href="spectroscopy">Spectroscopy</a></li>
        			<li><a href="thomson">Thomson Scattering</a></li>
        			<li><a href="neutralpart">Neutral Particle Diagnostics</a></li>
        			<li><a href="fastions">Fast Ions/Fusion Products</a></li>
       			</ul>
	<p>WSI has nearly a decade of experience designing and manufacturing diagnostics for plasma experiments. Browse our product listings to the left or download a <a href="pdf/Diagnostics.pdf">flyer (pdf)</a>.</p>

    </div> <!-- /container -->
    </div> <!-- /wrap -->

	<?php
	$footer = file_get_contents('footer.html');
	echo $footer;	
	?>	   
  </body>
</html>
