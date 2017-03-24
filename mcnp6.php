<!DOCTYPE html>
<html lang="en">
  <head>
	<?php
	$head = file_get_contents('header.html');
	echo $head;	
	?>
  <meta name="description" content="">
  <title>MCNP6 | Woodruff Scientific, Inc.</title>
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
      	  <li><a href="physics">Physics</a></li>
	  <li class="active">MCNP6</li>
  </ol>


	<h1>MCNP6</h1>
  <p>MCNP is a general-purpose Monte Carlo N-Particle code that can be used for neutron, photon, electron, or coupled neutron/photon/electron transport. Specific areas of application include, but are not limited to, radiation protection and dosimetry, radiation shielding, radiography, medical physics, nuclear criticality safety, Detector Design and analysis, nuclear oil well logging, Accelerator target design, Fission and fusion reactor design, decontamination and decommissioning. The code treats an arbitrary three-dimensional configuration of materials in geometric cells bounded by first- and second-degree surfaces and fourth-degree elliptical tori.</p>


<p>Thickness of stabilizing plates increased from 2mm to 8mm; 10M particles used
Get 94\% shine through at 2mm; With composite plates (8mm Be, 2-8mm Cu, 2mm W), get less shine through; Stabilizer needs to be latticed for exposure of sample to neutrons.</p>



    <div class="col-md-12">
      <p><a href="img/m.png"><img src="img/m.png" alt="MCNP6" width="300" height="300" /></a><br />
PIC1</p>
    </div>

    <div class="col-md-12">
      <p><a href="img/geometry.png"><img src="img/geometry.png" alt="Geometry" width="600" height="300" /></a><br />
PIC2</p>
    </div>
    
  

  </div> <!-- /container -->
    </div> <!-- /wrap -->

	<?php
	$footer = file_get_contents('footer.html');
	echo $footer;	
	?>	   
  </body>
</html>
