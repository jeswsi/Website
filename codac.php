<!DOCTYPE html>
<html lang="en">
  <head>
	<?php
	$head = file_get_contents('header.html');
	echo $head;	
	?>
	<meta name="description" content="Controls, Data Access, and Communication (CODAC) products and services. WSI can build, install and configure your lab's CODAC needs.">
  <title>CODAC | Woodruff Scientific, Inc.</title>
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
	<p>Controls, Data Acccess and Communication (CODAC) is the oft-used term for the systems that gather and analyze data and sends signals to all systems in order to measure critical physics parameters, control the plasma and to maintain safe operation of the device.
The main components of a data acquisition and control system are 
<ol>
	<li>sensors to measure some control parameter</li>
	<li>an analogue to digital
converter to convert signal into a form that can be either stored or
acted on</li>
	<li>programming logic to control the variable
	<li>output instrumentation for controlling the parameter.</li>
</ol>
In fusion systems, the
control parameter can by one of a range of different diagnostic
measurements, such as temperature, density, flow velocity and
practically any sensor that convert a physical property into an
electrical signal.  Usually these measurements are digitized with high
speed data acquisition, often sampling at a rate of a million times per
second.  Control parameters such as the charge in a capacitor bank, or
the temperature of an external system need not be sampled at such high
frequency and are often grouped into slow or fast acquisition.  The
software that is written to control the system parameters is usually
called the DAQ software, and often is written for the specific function
of the digitizers and slow and fast io.  Output instrumentation can be
solenoids, valves, regulators, circuit breakers, or relays. Such devices
control a desired output variable, and provide either remote or
automated control capabilities.</p>
	<p>Applications for controls are wide ranging.  The aerospace industry has
the most overlap with fusion research, since most subsystems are used in
electric propulsion, pulsed plasma thrusters and even fusion propulsion.
Next most closely related to fusion systems are military applications,
particularly for electromagnetic launchers (projectiles, aircraft, etc),
rail-, electrothermal- or coil-guns, high power microwave generators
(explosive flux compression generators) and most high power laser.  R&amp;D
applications include lightning simulators, linear accelerators, plasma
switches.</p>
	 <p>WSI can help you design and install your CODAC system.</p>
	 <p><a class="btn btn-lg btn-primary" href="mailto:sales@woodruffscientific.com" role="button">Get a Quote &raquo;</a></p>


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
