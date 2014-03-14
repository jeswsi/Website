<!DOCTYPE html>
<html lang="en">
  <head>
	<?php
	$head = file_get_contents('header.html');
	echo $head;	
	?>
	<meta name="description" content="Engineering design and analysis for fusion, plasma energy, and physics labs. WSI has engineered and built vacuum systems, pulsed power systems, and high field magnets. We can perform basic Thermal and Structural analysis with FEM software.">
  <title>Engineering | Woodruff Scientific, Inc.</title>
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
  		<li class="active">Engineering</li>
	</ol>

          <ul class="left">
            <li><a href="#vacuum">Vacuum System Design</a></li>
            <li><a href="#pulsed">Pulsed Power Design</a></li>
            <li><a href="#magnet">High Field Magnet Design</a></li>
            <li><a href="#straylight">Stray Light Analysis</a></li>
            <li><a href="#thermal">Thermal Analysis</a></li>
            <li><a href="#structural">Structural Analysis</a></li>
          </ul>

	<h1>Engineering</h1>
	<p>We have amassed experience drafting new components from a basic idea, working with engineering firms, and with vacuum manufacturers. WSI has engineered and built vacuum systems, pulsed power systems, and high field magnets. We can perform basic Thermal and Structural analysis with FEM software.</p>
	<p>Let us assist with your lab's design and engineering needs.</p>

<p><a class="btn btn-lg btn-primary" href="mailto:sales@woodruffscientific.com" role="button">Get a Quote &raquo;</a></p>

<a id="vacuum"></a>
	<h3>Vacuum System Design</h3>
	<div class="col-md-6">
		<a href="img/0001-MC_full_updated.jpg"><img src="img/0001-MC_full_updated-300x231.jpg" alt="0001-MC_full_updated" width="300" height="231" /></a>
    </div>
    <div class="col-md-6">
		<p><a href="img/STPX.jpg"><img src="img/STPX-300x199.jpg" alt="STPX" width="300" height="199" /></a><br/>
		<span class="text-muted">FAMU Spheromak (STPX). Baysha Bernales (Physics undergrad) and Brandon Alexander (lead technician).</span></p>
	</div>

  <div class="clearfix"></div>

<a id="pulsed"></a>
	<h3>Pulsed Power Design</h3>

    <div class="col-md-6">
    	<p><a href="img/BL480.png"><img src="img/BL480.png" width="300" alt="Capacitor Bank Engineering Drawing"></a></p>
    </div>
    <div class="col-md-6">
		<p>
		<a href="img/stpx_banks.jpg"><img src="img/stpx_banks_small.jpg" alt="STPX Capacitor Banks"></a><br />
		<span class="text-muted">Pulsed banks, dumps and ancil hardware for FAMU STPX.</span></p>
	</div>

	<a id="magnet"></a>
	<h3>High Field Magnet Design</h3>

	<a id="straylight"></a>
	<h3>Stray Light Analysis</h3>
	<p>WSI worked with ITER to analyze the effects of stray light on optical diagnostics. Use of beryllium 
	 walls meant that wall reflections could be bright enough to influence diagnostics. The ray-tracing software LightTools was used. SOLPS data of ITER scrape off layer was converted to light sources in LightTools, and wall reflectivity properties were modeled.
	<div class="col-md-6">
		<p><a href="img/iterchamber.png"><img src="img/iterchamber.png" alt="ITER Chamber" width="300"/></a><br/>
		<span class="text-muted">Inside view of ITER chamber</span></p>
	</div>
    <div class="col-md-6">
    	<p><a href="img/LT-ITER.png"><img src="img/LT-ITER.png" alt="LT" width="300"/></a><br/>
		<span class="text-muted">Wall Reflections of Plasma inside ITER chamber</span></p>
    </div>
    


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
