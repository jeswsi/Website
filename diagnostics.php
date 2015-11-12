<!DOCTYPE html>
<html lang="en">
  <head>
	<?php
	$head = file_get_contents('header.html');
	echo $head;
	?>
	<meta name="description" content="Custom diagnostics for fusion, plasma energy, and physics labs. WSI has nearly a decade of experience designing and manufacturing diagnostics for plasma experiments.">
  <title>Diagnostics | Woodruff Scientific, Inc.</title>
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
  		<li class="active">Diagnostics</li>
	</ol>
				<ul class="left">
					<li><a href="magnetic.php">Magnetic Field</a></li>
					<li><a href="electrostatic.php">Plasma Particle Flux</a></li>
        			<li><a href="optical.php">Refractive-Index Measurements</a></li>
        			<li><a href="spectroscopy.php">Spectroscopic</a></li>
        			<li><a href="thomson.php">Scattering</a></li>
        			<li><a href="neutralpart.php">Neutral Particles</a></li>
        			<li><a href="neutrons.php">Neutrons</a></li>
       			</ul>
    				<h1>Diagnostics</h1>

	<p>WSI has nearly a decade of experience designing and manufacturing diagnostics for plasma experiments. Browse our product listings to the left or download a <a href="pdf/Diagnostics.pdf">flyer (pdf)</a>.</p>
	<p>Recently WSI was awarded a Phase I and Phase II SBIR to examine the role that Additive Manufacturing can play in the development of plasma diagnostics. </p>
	<p>During the last 50 years, plasma diagnostics have matured into a standard set that now measure most of the dominant parameters needed to understand plasma confinement.   New diagnostics are being developed that allow new parameters to be measured. However, when presented with the opportunity to start a new facility or maintain an existing facility with failures in diagnostics occurring relatively frequently, the recourse is to utilize techniques and technologies dating back 50 years or more, resulting in expensive, large and often time-consuming diagnostic development activities.</p>
	<p>A principal cost associated with any new fusion system is the subsystem comprising all of the measurements needed to ensure that the plasma is reaching the temperature, density and confinement time needed for fusion conditions.  This `diagnostic' subsystem relies on technology that is decades old, and any custom system is expensive.  Some diagnostic components are known to fail regularly (such as plasma-facing mirrors on larger devices), and solutions for their cleaning or replacement are not straightforward to implement.  Additive manufacturing with vacuum compatible and plasma-compatible materials could therefore significantly impact the costs of the diagnostic subsystems, allowing in some possible cases for in-situ manufacture in vacuum, thereby reducing costs and shortening time-lines for commercial deployment.</p>
	<p>Diagnostic costs are also prohibitive for entry into fusion research: typically a magnetic system can cost several thousand dollars, and usually custom made.  Open source designs are now eliminating design costs - optical mount components are now available free for download and a few cents for printing.  We provide magnetic system components on our website for download and printing already.  Having a complete set of diagnostic designs available to academics and students will significantly impact development costs and time, and significantly reduce barriers to entry into plasma physics as a field.</p>
	<p>Fostering a community of 'open-source diagnosticians' can only help to improve the development of fusion technology and expedite transfer of technology to areas of high tech industry.  All of the diagnostic designs (not printer technology) that we will develop during the Phase I SBIR will therefore be offered as open-source on one of the available forums (or through our website). The designs will be available to serious academic studies and a wider sphere of high school educational projects. </p>
	<p></p>
	<p></p>
	<p></p>

	<p><a class="btn btn-lg btn-primary" href="mailto:sales@woodruffscientific.com" role="button">Get a Quote &raquo;</a></p>

    </div> <!-- /container -->
    </div> <!-- /wrap -->

	<?php
	$footer = file_get_contents('footer.html');
	echo $footer;
	?>
  </body>
</html>
