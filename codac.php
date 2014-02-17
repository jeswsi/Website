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
  		<li class="active">CODAC</li>
	</ol>
	<h1>CODAC</h1>
				<ul class="left">
				<li><a href="labview">LabVIEW Experiment Management System</a></li>
        			<li><a href="daq">Data Aquisition</a></li>
        			<li><a href="fiber">Fiber-Optic Relay Controls</a></li>
        			<li><a href="safety">Safety Interlocks</a></li>
       			</ul>
	<p>Controls, Data Acccess and Communication (CODAC) is the oft-used term for the systems that gather and analyze data and sends signals to all systems in order to measure critical physics parameters, control the plasma and to maintain safe operation of the device.</p>

    </div> <!-- /container -->
    </div> <!-- /wrap -->

	<?php
	$footer = file_get_contents('footer.html');
	echo $footer;	
	?>	   
  </body>
</html>
