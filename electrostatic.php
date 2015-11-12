<!DOCTYPE html>
<html lang="en">
  <head>
	<?php
	$head = file_get_contents('header.html');
	echo $head;
	?>
  <meta name="description" content="Electrostatic probes and diagnostics for fusion, plasma energy, and physics labs. Custom sizing, materials, and configurations available.">

  <title>Plasma Particle Flux | Woodruff Scientific, Inc.</title>
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
		<li><a href="diagnostics">Diagnostics</a></li>
  		<li class="active">Plasma Particle Flux</li>
	</ol>
	<h1>Plasma Particle Flux</h1>
	<p>Electrostatic probes allow local measurement of plasma density and
temperature, as well as plasma potential.  Retarding grid energy
analyzers can be built for a variety of applications, depending on the
energy of the incident ions.  An excellent reference for electrostatic
probes is <a href="http://www.amazon.com/Principles-Plasma-Diagnostics-I-Hutchinson/dp/052167574X">Hutchinson</a>
also, see Noah Hershkowitz's chapter in <a href="http://www.amazon.com/Plasma-Diagnostics-Discharge-Parameters-Chemistry/dp/148320281X/ref=sr_1_1?s=books&ie=UTF8&qid=1395429516&sr=1-1&keywords=noah+hershkowitz
">Plasma Diagnostics: Discharge Parameters and Chemistry</a></p>

	<h3>Langmuir Probes</h3>
	<ul class="left">
						<li>Langmuir Probes</li>
						<ul>
							<li>Single Tip</li>
							<li>Double Tip</li>
							<li>Quad Tip</li>
							<li>Flat</li>
						</ul>
	</ul>

		<div class="col-md-6">
		<p class="center"><a href="img/diagnostics/double-langmuir.jpg"><img src="img/diagnostics/double-langmuir-small.jpg"></a><br />Double-tip Langmuir Probe</p>
	</div>
		<div class="clearfix"></div>

	<blockquote>
    <p><a href="langmuirrefs.html">Langmuir Probes References</a></p>
    <p><a href="files\diagnostics\DL-ES Final 2.pdf">Langmuir Probe Spec Sheet</a></p>
  </blockquote>
	<p>Available in Single, Double, Triple, or Quad tip configurations. Built for UHV environments. Probe size customizable depending on plasma parameters. Reciprocating probes available. Flat probes also available.</p>

	<!-- <div class="col-md-6">
		<p class="center"><a href="img/Langmuir2.jpg"><img src="img/Langmuir2-small.jpg"></a><br />Langmuir Probe</p>
	</div>
	<div class="col-md-6">
		<p class="center"><a href="img/Langmuir.jpg"><img src="img/Langmuir-small.jpg"></a><br />Langmuir Probe</p>
	</div> -->
		<p><a class="btn btn-lg btn-primary" href="mailto:sales@woodruffscientific.com?subject=Langmuir Probes RFQ &#038;body=How%20many:%0D%0A%0D%0AFrequency%20response:%0D%0A%0D%0AOD:%0D%0A%0D%0AVacuum%20rating%20(e.g.%20UHV,%20air):%0D%0A%0D%0AHarnessing%20length:%0D%0A%0D%0ACladding%20(e.g.%20BN,%20ss):%0D%0A%0D%0AShort%20description%20of%20the%20application:%0D%0A%0D%0APlease%20find%20attached%20a%20sketch/engineering%20drawing%20of%20the%20application.%0D%0A%0D%0AContact(Name/email/phone/fax/etc):%0D%0A%0D%0ANeeded%20by(Date):">Get a Quote &raquo;</a></p>


	<h3>Gridded Ion Energy Analyzers</h3>

 		<blockquote>
      <p><a href="ionenergy.html">Ion Energy References</a></p>
      <p><a href="files\diagnostics\E1-RFA information.pdf">Retarding Field Analyzer Spec Sheet</a></p>
    </blockquote>

	<div class="col-md-6">
		<p class="center"><a href="img/diagnostics/RFA_Cylinder.jpg"><img src="img/diagnostics/RFA_Cylinder-small.jpg"></a><br />Retarding Field Analyzer</p>
	</div>
	<div class="col-md-6">
		<p class="center"><a href="img/diagnostics/RFA.jpg"><img src="img/diagnostics/RFA-small.jpg"></a><br />Retarding Field Analyzer</p>

	</div>
	<div class="clearfix"></div>
		<p><a class="btn btn-lg btn-primary" href="mailto:sales@woodruffscientific.com?subject=Gridded Ion Energy Analyzers RFQ &#038;body=How%20many:%0D%0A%0D%0AFrequency%20response:%0D%0A%0D%0AOD:%0D%0A%0D%0AVacuum%20rating%20(e.g.%20UHV,%20air):%0D%0A%0D%0AHarnessing%20length:%0D%0A%0D%0ACladding%20(e.g.%20BN,%20ss):%0D%0A%0D%0AShort%20description%20of%20the%20application:%0D%0A%0D%0APlease%20find%20attached%20a%20sketch/engineering%20drawing%20of%20the%20application.%0D%0A%0D%0AContact(Name/email/phone/fax/etc):%0D%0A%0D%0ANeeded%20by(Date):">Get a Quote &raquo;</a></p>

    </div> <!-- /container -->
    </div> <!-- /wrap -->

	<?php
	$footer = file_get_contents('footer.html');
	echo $footer;
	?>
  </body>
</html>
