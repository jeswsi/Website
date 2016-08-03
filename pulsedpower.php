<!DOCTYPE html>
<html lang="en">
  <head>
	<?php $head = file_get_contents('header.html'); echo $head;	?>
	<meta name="description" content="Pulsed Power capacitor banks and pulse forming networks for fusion, pulsed power, plasma energy, and physics labs. We can design and construct custom capacitor banks.">
  <title>Pulsed Power | Woodruff Scientific, Inc.</title>
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
  		<li class="active">Pulsed Power</li>
	</ol>
				<ul class="left">
					<li>Bank Modules</li>
						<ul>
							<li><a href="moduleA">Module A</a></li>
							<li><a href="moduleB">Module B</a></li>
							<li><a href="moduleC">Module C</a></li>
						</ul>
        			<li><a href="pfn">Pulse Forming Networks</a></li>
       			</ul>
    <h1>Pulsed Power</h1>
	<p>We have built, installed and tested pulsed power capacitor banks for a variety of applications. Fig. 1 shows an example arrangement for the banks we have built for an R&amp;D environment, for which the room served as the enclosure. Banks are custom built for specific applications, although small modules have a fast turn around time. Spec sheets available on request. For design only, please see our <a href="services">Services</a></p>
	<p>
Applications for pulsed power are wide ranging.  The aerospace industry
has the most overlap with fusion research, since most subsystems are
used in electric propulsion, pulsed plasma thrusters and even fusion
propulsion.  Next most closely related to fusion systems are military
applications, particularly for electromagnetic launchers (projectiles,
aircraft, etc), rail-, electrothermal- or coil-guns, high power
microwave generators (explosive flux compression generators) and most
high power lasser.  R&amp;D applications include lightning simulators,
linear accelerators, plasma switches, and most laser applications (using
solid state laser - YAG, Ruby or Alexandrite, or pulsed gas lasers -
Excimer, nitrogen or metal vapor). For example in the medical field,
pulsed power is used in a vareity of laser applications from those used
in surgery to hair removal; defibrilators and EM nerve stimulation;
oncological accelerators; and X-ray devices. Utility companies regularly
employ pulsed power systems - these can include power factor correction,
dynamic voltage restorers and HV testing (cable thumpers, or hipot
testing).  By far the widest application of pulsed power however comes
in the industrial sector, which for manufacturing (spot welding,
magnetizing, metal forming, induction heating, compaction),
sterilization (medical, food, water, surfaces) and materials processing
(ion implantation, deposition, laser shock, etc).</p>
	<p class="center">
	<a href="img/stpx_banks.jpg"><img src="img/stpx_banks_small.jpg"></a><br />
	<span class="text-muted">Fig. 1. Pulsed banks, dumps and ancil hardware for FAMU STPX.</span></p>

	<p>Need help with your pulsed power design? WSI can get your lab up and running.</p>
	<p><a class="btn btn-lg btn-primary" href="mailto:sales@woodruffscientific.com" role="button">Get a Quote &raquo;</a></p>


<h3>Safety</h3>
Safety must be the number one priority in all labs. WSI takes all measures to ensure operator safety. A proper safety protocol needs to be followed. Banks should always be kept in an isolated room equipped with <a href="safety">safety interlocks</a>. Our bank dumps are double or triple redundant, default to a safe position in case of power outage or other failure, and are controled via door interlocks and from the control room. WSI can work with your lab to setup a safe testing environment.

<h3>References</h3>
	<blockquote><a href="pfns.html">Pulse Forming Network References</a></blockquote>
	<blockquote><a href="dcfilters.html">DC Filter References</a></blockquote>
	<blockquote><a href="invertors.html">Invertor Refernces</a></blockquote>
	<blockquote><a href="snubbers.html">Snubber References</a></blockquote>
	<blockquote><a href="marx.html">Marx Generator References</a></blockquote>
	<blockquote><a href="pulsegen.html">Pulse Generator References</a></blockquote>
	<blockquote><a href="blumlein.html">Blumlein References</a></blockquote>


    </div> <!-- /container -->
    </div> <!-- /wrap -->

	<?php
	$footer = file_get_contents('footer.html');
	echo $footer;	
	?>	   
  </body>
</html>
