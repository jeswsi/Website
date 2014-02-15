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
  		<li><a href="index.php">Home</a></li>
  		<li class="active">Products</li>
	</ol>

	<h1>Products</h1>
		<ul class="left">
		  <li><a href="pulsedpower.php">Pulsed Power</a></li>
                  <li><a href="magnets.php">Magnets</a></li>
                  <li><a href="sources.php">Plasma Sources</a></li>
                  <li><a href="chambers.php">Confinement Chambers</a></li>
                  <li><a href="codac.php">CODAC</a></li>
                  <li><a href="diagnostics.php">Diagnostics</a></li>
                  <li><a href="devices.php">Devices</a></li>
                  <li><a href="computers.php">Computers</a></li>
		</ul>

	<p>Woodruff Scientific offers products that can be tailored to suit specific pulsed power and plasma physics applications, with the philosophy of providing all subsystems necessary for fusion energy development and research. </p>

    </div> <!-- /container -->
    </div> <!-- /wrap -->

	<?php
	$footer = file_get_contents('footer.html');
	echo $footer;	
	?>	   
  </body>
</html>
