<!DOCTYPE html>
<html lang="en">
  <head>
	<?php
	$head = file_get_contents('header.html');
	echo $head;	
	?>
	<meta name="description" content="Plasma Sources for fusion, plasma energy, and physics labs.">
  <title>Spectroscopy | Woodruff Scientific, Inc.</title>
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
  		<li class="active">Plasma Sources</li>
	</ol>
		  	<ul class="left">
				<li><a href="#magnetized">Magnetized</a>
					<ul>
						<li><a href="#planarcoax">Planar Coaxial</a></li>
						<li><a href="#coaxshort">Coaxial Short</a></li>
						<li><a href="#coaxlong">Coaxial long (Marshall Gun)</a></li>
						<li><a href="#conicaltheta">Conical Theta-Pinch</a></li>
						<li><a href="#radialform">Radial Formation (Electrostatic)</a></li>
					</ul>
				</li>
        			<li><a href="#inductive">Inductive</a>
					<ul>
						<li><a href="#radialimplosion">Radial Implosion</a></li>
						<li><a href="#radialformation">Radial Formation</a></li>
					</ul>
				</li>
        			<li><a href="#gashandling">Gas Handling</a></li>
        			
       			</ul>
	<h1>Plasma Sources</h1>
	<p>We produce custom magnetized plasma sources designed for specific formation requirements in fusion energy sciences, requiring high field strengths, high currents, high voltages, often UH vacuum compatibility and to withstand large forces. Typical sources we have designed and tested have been used for a range of compact torus configurations. Offerings below can be tailored to specific requirements.</p>
	<p><a class="btn btn-lg btn-primary" href="mailto:sales@woodruffscientific.com?subject=Sources RFQ &#038;" role="button">Get a Quote &raquo;</a></p><br />

 	
	<div class="col-md-12"><!-- Products -->
 		<a id="magnetized"></a><a id="planarcoax"></a>
 		<h3>Magnetized Planar Coaxial</h3>

	<div class="col-md-6">
		<p><a href="img/planar.jpg"><img alt="Planar" src="img/planar-small.jpg" width="300" height="159" /></a></p>
	</div>
	<div class="col-md-6">
		<p><a href="img/PlanarSource3.jpg"><img alt="PlanarSource3" src="img/PlanarSource3-small.jpg" width="300" height="159" /></a></p>
	</div>

	<div class="col-md-6">
		<p><a href="img/PlanarSource1.jpg"><img alt="PlanarSource1" src="img/PlanarSource1-small.jpg" width="300" height="159" /></a><br />Model MPC-9</p>
	</div>
	<div class="col-md-6">
		<p></p>
	</div>

	<div class="clearfix"></div>
	<a id="coaxshort"></a>
	<h3>Magnetized Coaxial Short</h3>
	<div class="col-md-6">
		<p><a href="img/Coaxial-short.jpg"><img alt="CoaxShort" src="img/Coaxial-short-small.jpg" width="300" height="159" /></a></p>
	</div>
	<div class="col-md-6">
			<p><a href="img/ShortCoaxWide2.jpg"><img alt="CoaxShort" src="img/ShortCoaxWide2-small.jpg" width="300" height="159" /></a><br />Model MCS-18</p>
	</div>

		<div class="col-md-6">
		<p><a href="img/ShortCoaxWide.jpg"><img alt="CoaxShort" src="img/ShortCoaxWide-small.jpg" width="300" height="159" /></a></p>
	</div>
	<div class="col-md-6">
			<p><a href="img/coaxialshort2.jpg"><img alt="CoaxShort" src="img/coaxialshort2-small.jpg" width="300" height="159" /></a><br />Model MCS-18</p>
	</div>

	<p><a class="btn btn-lg btn-primary" href="mailto:sales@woodruffscientific.com" role="button">Get a Quote &raquo;</a></p><br />

	<a id="coaxlong"></a>
	<h3>Magnetized Coaxial Long (Marshall Gun)</h3>
	<div class="col-md-6">
		<p><a href="img/Coaxial-long2.jpg"><img alt="CoaxShort" src="img/Coaxial-long2-small.jpg" width="300" height="159" /></a></p>
	</div>
	<div class="col-md-6">
			<p><a href="img/coaxial-long.jpg"><img alt="CoaxShort" src="img/coaxial-long-small.jpg" width="300" height="159" /></a><br />Model MCL-18</p>
	</div>

	<a id="conicaltheta"></a>
	<h3>Magnetized Conical Theta Pinch</h3>
		<p>Model MCT-5</p>
		<p>Model MCT-10</p>
	<a id="radialimplosion"></a>
	<h3>Inductive Radial Implosion and Peristaltic Acceleration</h3>
		<p>Model IRIPA-18</p>
		<p>Model IRIPA-40</p>
	<a id="radialform"></a>
	<h3>Magnetized Radial Formation (Electrostatic)</h3>
		<p>Model S1-40</p>
		<p>Model S1-60</p>
	<a id="radialformation"></a>
	<h3>Magnetized Radial Formation (Inductive)</h3>
	<a id="gashandling"></a>
	<h3>Gas Handling</h3>
		<p>8 Valve Manifold</p>
	<p><a class="btn btn-lg btn-primary" href="mailto:sales@woodruffscientific.com" role="button">Get a Quote &raquo;</a></p>

	</div> <!-- /products -->
    </div> <!-- /container -->
    </div> <!-- /wrap -->

	<?php
	$footer = file_get_contents('footer.html');
	echo $footer;	
	?>	   
  </body>
</html>
