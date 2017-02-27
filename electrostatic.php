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
		<li><a href="diagnostics">Diagnostics</a></li>
  		<li class="active">Plasma Particle Flux</li>
	</ol>

  <h1>Plasma Particle Flux</h1>

    <p>
    A Fundamental technique for measuring the properties of plasmas is the use
    of electrostatic probes, most notably the Langmuir probe, Mach probe, and
    retarding field analyzer (RFA). These probes are inserted into the plasma
    and thus allow local measurement of several plasma properties. The Langmuir
    probe measures the electron energy, temperature, and density and comes in
    single, double, and triple tip configurations, which have various effects on
    the plasma. Some of these configurations are able to measure the floating
    potential and/or plasma potential. A Mach probe is used to measure the ion
    flow velocity. Retarding field analyzers can measure the ion or electron
    energy and temperature in specific directions. Each electrostatic probe
    configuration has its advantages and disadvantages and the scientists at WSI
    can help you decide which probe is right for you. Two excellent references
    for electrostatic probes are Hutchinson's <a href="http://www.amazon.com/Principles-Plasma-Diagnostics-I-Hutchinson/dp/052167574X"
      > Principles of Plasma Diagnostics</a> and Noah Hershkowitz's chapter in
    <a href="http://www.amazon.com/Plasma-Diagnostics-Discharge-Parameters-Chemistry/dp/148320281X/ref=sr_1_1?s=books&ie=UTF8&qid=1395429516&sr=1-1&keywords=noah+hershkowitz"
      > Plasma Diagnostics: Discharge Parameters and Chemistry</a>. References
    for specific applications of each type of probe are provided in the sections
    below.
    </p>

    When requesting a quote for an electrostatic diagnostic, please consider the
    following:
    <ul>
      <li>Quantity to be measured and its expected magnitude. Electron or ion
          measurements? Is electron density of interest? Ion flow velocity or
          energy and temperature? Are floating and/or plasma potential of
          interest?</li>
      <li>Frequency response. What is the frequency (or range of frequencies)
          that need to be measured? What is the timescale of evolution of
          the measured quantitiy?</li>
      <li>Digitizer dynamic range. What is the peak-to-peak signal amplitude
          that your data acquisition system can handle?</li>
      <li>Vacuum environment. Is the probe intended to be used in air or vacuum?
          High vacuum (HV, 10<sup>-3</sup> - 10<sup>-9</sup> torr) or ultra-high
          vacuum (UHV, 10<sup>-9</sup> - 10<sup>-12</sup> torr)? This helps us
          determine the materials that can be used for your application.</li>
      <li>Thermal environment. Will the probe experience high heat loads (for
          example, behind first wall tiles) or low heat loads? Will it
          experience thermal cycling? Will it be used at a high or low ambient
          temperature (will the chamber be baked)? This information also places
          restrictions on the materials that can be used.</li>
      <li>Mounting interface. Will the probe be mounted to a vacuum flange, a
          custom mounting structure on the chamber wall, a reciprocating drive,
          or something else?</li>
      <li>Size constraints. Diameter of port through which the probe must be
          inserted, distance from the mount to the measurement location within
          the plasma, perturbation to the plasma, et cetera.</li>
    </ul>

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
		<p class="center"><a href="img/diagnostics/ES-DL1 render.jpg"><img src="img/diagnostics/ES-DL1 render.jpg"></a><br />Double-tip Langmuir Probe</p>
	</div>
		<div class="clearfix"></div>

	<blockquote>
    <p><a href="langmuirrefs.html">Langmuir Probes References</a></p>
    <p><a href="files/diagnostics/DL-ES Final 2.pdf">Langmuir Probe Spec Sheet</a></p>
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
      <p><a href="files/diagnostics/E1-RFA information.pdf">Retarding Field Analyzer Spec Sheet</a></p>
    </blockquote>

	<div class="col-md-6">
		<p class="center"><a href="img/diagnostics/E1-RFA-U render with text.jpg"><img src="img/diagnostics/E1-RFA-U render with text.jpg"></a><br />Retarding Field Analyzer</p>
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
