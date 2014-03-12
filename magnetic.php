<!DOCTYPE html>
<html lang="en">
  <head>
	<?php
	$head = file_get_contents('header.html');
	echo $head;	
	?>
	<meta name="description" content="Magnetic &amp; Electrostatic probes and diagnostics for fusion, plasma energy, and physics labs. Custom sizing, materials, and configurations available.">
  <title>Magnetic &amp; Electrostatic Probes | Woodruff Scientific, Inc.</title>
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
		<li><a href="Diagnostics">Diagnostics</a></li>
  		<li class="active">Magnetic &amp; Electrostatic Probes</li>
	</ol>
	<h1>Magnetic &amp; Electrostatic Probes</h1>
	<p>Paragraph</p>

    </div> <!-- /container -->
    </div> <!-- /wrap -->

	<?php
	$footer = file_get_contents('footer.html');
	echo $footer;	
	?>	   
  </body>
</html>
