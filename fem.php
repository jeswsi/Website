<!DOCTYPE html>
<html lang="en">
  <head>
	<?php
	$head = file_get_contents('header.html');
	echo $head;	
	?>
	<meta name="description" content="Finite Element Analysis including thermal and structural analysis for fusion, plasma energy, and physics labs. WSI has engineered and built vacuum systems, pulsed power systems, and high field magnets. We can perform basic Thermal and Structural analysis with FEM software.">
  <title>Finite Element Analysis | Woodruff Scientific, Inc.</title>
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
 	 	<li><a href="engineering">Engineering</a></li>
  		<li class="active">Finite Element Analysis</li>
	</ol>




    
<h1>Finite Element Analysis</h1>
<p>WSI uses ANSYS, OpenFOAM, and ElmerFEM to perform thermal and structural analysis of various subsystems.</p>

<a id="thermal"></a>
	<h3>Thermal Analysis</h3>
	<!--<div class="col-md-6">
		<p><a href="img/Divertormesh.png"><img src="img/Divertormesh-300x228.png" alt="Divertormesh" width="300" height="228" /></a></p>
	</div>-->
    <div class="col-md-6">
		<p><a href="img/divertorcad.png"><img src="img/divertorcad-300x228.png" alt="divertorcad" width="300" height="228" /></a><br/>
		<span class="text-muted">ITER divertor heat loads</span></p>
    </div>
    <div class="col-md-6">
		<p><a href="img/WDivertor.png"><img src="img/WDivertor-300x205.png" alt="WDivertor" width="300" height="205" /></a></p>
    </div>

  <div class="clearfix"></div>

<a id="structural"></a>
	<h3>Structural Analysis</h3>
	<div class="col-md-6">
		<p><a href="img/coil_displacement.png"><img src="img/coil_displacement-300x228.png" alt="coil_displacement" width="300" height="228" /></a></p>
    </div>
    <!--<div class="col-md-6">
		<p><a href="img/coil_mesh.png"><img src="img/coil_mesh-300x253.png" alt="coil_mesh" width="300" height="253" /></a></p>
    </div>-->
    <div class="col-md-6">
		<p><a href="img/coil_stress.png"><img src="img/coil_stress-300x239.png" alt="coil_stress" width="300" height="239" /></a><br/>
		<span class="text-muted">Stress in a coil</span></p>
    </div>
    <p><a class="btn btn-lg btn-primary" href="mailto:sales@woodruffscientific.com" role="button">Get a Quote &raquo;</a></p>


    </div> <!-- /container -->
    </div> <!-- /wrap -->

	<?php
	$footer = file_get_contents('footer.html');
	echo $footer;	
	?>	   
  </body>
</html>
