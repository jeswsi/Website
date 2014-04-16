<!DOCTYPE html>
<html lang="en">
  <head>
	<?php
	$head = file_get_contents('header.html');
	echo $head;	
	?>
  <meta name="description" content="">
  <title>Electrostatics | Woodruff Scientific, Inc.</title>
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
        <li><a href="physics">Physics</a></li>
	<li class="active">Electrostatics</li>
    </ol>

	<h1>Electrostatics</h1>
  <p>Primary tools for Electrostatics are Poisson/Superfish.</p>
    <p><a href="img/COAXTEST00.png"><img src="img/COAXTEST00-300x190.png" alt="COAXTEST00" width="300" height="190" /></a></p>

<p><a class="btn btn-lg btn-primary" href="mailto:sales@woodruffscientific.com?subject=Electrostatics Problem&body=Geometry:%0D%0A%0D%0AInitial Conditions:%0D%0A%0D%0ABoundary Conditions:%0D%0A%0D%0ADescription of Problem:%0D%0A%0D%0A" role="button">Submit Problem &raquo;</a></p>


    </div> <!-- /container -->
    </div> <!-- /wrap -->

	<?php
	$footer = file_get_contents('footer.html');
	echo $footer;	
	?>	   
  </body>
</html>
