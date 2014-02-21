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
				<ul class="left">
				<li><a href="labview">LabVIEW Experiment Management System</a></li>
        			<li><a href="daq">Data Aquisition</a></li>
        			<li><a href="fiber">Fiber-Optic Relay Controls</a></li>
        			<li><a href="safety">Safety Interlocks</a></li>
       			</ul>
    <h1>CODAC</h1>
	<p>Controls, Data Acccess and Communication (CODAC) is the oft-used term for the systems that gather and analyze data and sends signals to all systems in order to measure critical physics parameters, control the plasma and to maintain safe operation of the device. WSI can help you design and install your COADAC system.</p>
		<div class="col-md-12">
			<blockquote>“Woodruff Scientific have made an excellent complete control and data acquisition system for our Laboratory Astrophysical Jet experiment. The system was expertly tailored to our needs with COTS National Instruments and proprietary custom hardware, operated by a full set of LabView interfaces coded to best practise design patterns. The hardware and services provided by Woodruff Scientific are among the most cost-effective in the industry. Highly recommended.”
			<footer>Prof. Sett You and Jens Von der Linden, University of Washington, 2013</footer></blockquote>
		</div>

    </div> <!-- /container -->
    </div> <!-- /wrap -->

	<?php
	$footer = file_get_contents('footer.html');
	echo $footer;	
	?>	   
  </body>
</html>
