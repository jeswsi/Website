<!DOCTYPE html>
<html lang="en">
  <head>
	<?php
	$head = file_get_contents('header.html');
	echo $head;	
	?>
		<meta name="description" content="Custom devices for fusion, plasma energy, and physics labs. WSI has built complete devices for clients such as Florida A&M (STPX)">
  <title>Devices | Woodruff Scientific, Inc.</title>
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
  		<li class="active">Devices</li>
	</ol>

	<ul class="left">
		<li><a href="spheromaks">Spheromaks</a></li>
		<li><a href="frc">FRCs</a></li>
		<li><a href="denseplasmafoci">Dense Plasma Foci</a></li>
		<li><a href="iec">IEC</a></li>
		<li><a href="neutronsource">Neutron Sources</a></li>

	</ul>

	<h1>Devices</h1>
	<p class="center"><a href="img/STPX.jpg"><img src="img/STPX-300x199.jpg" alt="STPX" width="300" height="199"  /></a><br />
<span class="text-muted">Fig. 1: FAMU Spheromak (STPX). L to R: Baysha Bernales (Physics undergrad) and Brandon Alexander (lead technician).</span></p>
	<p>WSI can integrate diagnostics, power, magnets, DAQ, and vacuum to produce turn-key plasma research devices. We can deliver Spheromaks, Field Reversed Configurations, Mirrors, Dense Plasma Foci, Inertial Electrostatic Confinement, and many other devices. Let us know what you want built.</p>
<p><a class="btn btn-lg btn-primary" href="mailto:sales@woodruffscientific.com" role="button">Get a Quote &raquo;</a></p><br />

<blockquote>“Woodruff Scientific Inc. constructed the Florida A&M University (FAMU)/Center for Plasma Science and Technology (CePaST) STPX (Spheromak Turbulent Plasma Experiment) under a subcontract funded by the U.S. Department of Energy… The STPX achieved plasma during the first attempt and CePaST is very pleased with the work performed by Woodruff Scientific Inc.” <a href="Woodruff-Testimonial.pdf">Full Testimonial (pdf)</a>
	<footer>Charles A. Weatherford, Professor of Physics and Director of the Florida A&M University Center for Plasma Science and Technology 2013</footer></blockquote>

<h3>References</h3>
		<blockquote><a href="spheromaks.html">Spheromak References</a></blockquote>
		<blockquote><a href="frcs.html">Field Reversed Configurations References</a></blockquote>
		<blockquote><a href="dpfs.html">Dense Plasma Foci References</a></blockquote>
		<blockquote><a href="iec.html">Inertial Electrostatic Confinement References</a></blockquote>
		<blockquote><a href="ns.html">Neutron Source References</a></blockquote>


    </div> <!-- /container -->
    </div> <!-- /wrap -->

	<?php
	$footer = file_get_contents('footer.html');
	echo $footer;	
	?>	   
  </body>
</html>
