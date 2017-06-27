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
 	 	<li><a href="engineering">Engineering</a></li>
  		<li class="active">Finite Element Analysis</li>
	</ol>

  <h3>Thermal Analysis</h3>
  <!--<div class="col-md-6">
    <p><a href="img/Divertormesh.png"><img src="img/Divertormesh-300x228.png" alt="Divertormesh" width="300" height="228" /></a></p>
  </div>-->

  <div class="col-md-4">
    <p><a href="img/divertorcad.png"><img src="img/divertorcad-300x228.png" alt="divertorcad" width="300" height="228" /></a><br/>
    <span class="text-muted">ITER divertor heat loads</span></p>
    </div>

    <div class="col-md-4">
    <p><a href="img/WDivertor.png"><img src="img/WDivertor-300x205.png" alt="WDivertor" width="300" height="205" /></a></p>
    </div>

    <div class="col-md-4">
    <p><a href="img/Probeheadtemperature.png"><img src="img/Probeheadtemperature.png" alt="Probeheadtemperature" width="300" height="228" /></a><br/> <!--<span class="text-muted">Probe head with heat sink at peak temperature</span></p> -->
    </div>

    <div class="col-md-4">
    <p><a href="img/heatsinkmaterials.png"><img src="img/heatsinkmaterials.png" alt="heatsinkmaterials" width="300" height="205" /></a></p>
    </div> <!--<span class="text-muted">Comparison of performance with various heat sink materials</span></p>-->

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


    
<h1>Finite Element Analysis</h1>


	<style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;}
.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
.tg .tg-yw4l{vertical-align:top}
</style>
<table class="tg">
  <tr>
    <td class="tg-yw4l"><strong>Services</strong></td>
    <td class="tg-yw4l"><strong>Model Number</strong></td>
    <td class="tg-yw4l"><strong>Spec Sheet</strong></td>
    <td class="tg-yw4l"><strong>References</strong></td>
    <th class="tg-yw4l"></th>
  <tr>
    <th class="tg-yw4l">Thermal Analysis</th>
    <th class="tg-yw4l"></th>
    <th class="tg-yw4l"><a href="mailto:sales@woodruffscientific.com?subject=Thermal Analysis">Request spec sheet</a></th>
    <th class="tg-yw4l"></th>
    <th class="tg-yw4l"><a class="btn btn-lg btn-primary" href="mailto:sales@woodruffscientific.com?subject=Thermal Analysis" role="button">Get a Quote &raquo;</a></th>
  </tr>
  <tr>
    <th class="tg-yw4l">Structural Analysis</th>
    <th class="tg-yw4l"></th>
    <th class="tg-yw4l"><a href="mailto:sales@woodruffscientific.com?subject=Structural Analysis">Request spec sheet</a></th>
    <th class="tg-yw4l"></th>
    <th class="tg-yw4l"><a class="btn btn-lg btn-primary" href="mailto:sales@woodruffscientific.com?subject=Structural Analysis" role="button">Get a Quote &raquo;</a></th>
  </tr>
</table>



<p>WSI uses COMSOL Multiphysics® to perform finite element simulation of heat transfer, structural mechanics, and other difficult physical problems. We are able to analyze complex 3D geometries under steady-state or transient loading and perform parametric scans for material selection (see plot below) and design parameter optimization.</p>

<!--<p>WSI uses <a href="http://www.ansys.com/">ANSYS</a>, <a href="http://www.openfoam.com/">OpenFOAM</a>, and <a href="http://www.elmerfem.org/">ElmerFEM</a> to perform thermal and structural analysis of various subsystems. We can also handle files from other common CAD software such as <a href="http://www.3ds.com/products-services/catia/">CATIA</a>.</p> -->

<a id="thermal"></a>


    <p><a class="btn btn-lg btn-primary" href="mailto:sales@woodruffscientific.com" role="button">Get a Quote &raquo;</a></p>


    </div> <!-- /container -->
    </div> <!-- /wrap -->

	<?php
	$footer = file_get_contents('footer.html');
	echo $footer;	
	?>	   
  </body>
</html>
