<!DOCTYPE html>
<html lang="en">
  <head>
	<?php
	$head = file_get_contents('header.html');
	echo $head;	
	?>
  <meta name="description" content="Integration of magnetics, vacuum, first wall, power, and diagnostics into a confinement chamber.">
  <title>Integration | Woodruff Scientific, Inc.</title>
  </head>

  <body>
<?php $googleTagManager = file_get_contents('googleTagManager.html'); echo $googleTagManager; ?>
    <div id="wrap">
    <div class="container">

	<?php
	$navbar = file_get_contents('navbar.html');
	echo $navbar;	
	?>	
	<ol class="breadcrumb">
  		<li><a href="index">Home</a></li>
 	 	<li><a href="services">Services</a></li>
 	 	<li><a href="chambers">Plasma-Material Interface</a></li>
  		<li class="active">Integration</li>
	</ol>
	<h1>Integration</h1>
	<p>The integration of all of the subsystems needed for a PMI is a laborious
process, however, it usually follows a simple multi-step process.
	<ol>
		<li>Develop physics point design (fix geometry)</li>
		<li>Examine diagnostic, power and heating requirements, and define views
needed, hence size and number of ports</li>
		<li>Determine if active or passive stabilization is needed</li>
		<li>Determine power loading on material surfaces for first wall solutions
(downselect to materials)</li>
	</ol>
	Working from the last closed flux surface outwards, the technology
required for the system is selected.

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
