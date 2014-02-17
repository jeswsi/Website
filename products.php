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
  		<li class="active">Products</li>
	</ol>

	<h1>Products</h1>
		<ul class="left">
		  <li><a href="pulsedpower">Pulsed Power</a></li>
                  <li><a href="magnets">Magnets</a></li>
                  <li><a href="sources">Plasma Sources</a></li>
                  <li><a href="chambers">Confinement Chambers</a></li>
                  <li><a href="codac">CODAC</a></li>
                  <li><a href="diagnostics">Diagnostics</a></li>
                  <li><a href="devices">Devices</a></li>
                  <li><a href="computers">Computers</a></li>
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
