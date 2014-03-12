<!DOCTYPE html>
<html lang="en">
  <head>
	<?php
	$head = file_get_contents('header.html');
	echo $head;	
	?>
	<meta name="description" content="Pulsed Power capacitor banks and pulse forming networks for fusion, pulsed power, plasma energy, and physics labs. We can design and construct custom capacitor banks.">
  <title>Pulsed Power | Woodruff Scientific, Inc.</title>
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
  		<li class="active">Pulsed Power</li>
	</ol>
				<ul class="left">
					<li><a href="#bankmodules">Bank Modules</a></li>
        			<li><a href="#pfn">Pulse Forming Networks</a></li>
       			</ul>
    <h1>Pulsed Power</h1>
	<p>We have built, installed and tested pulsed power capacitor banks for a variety of applications. Fig. 1 shows an example arrangement for the banks we have built for an R&amp;D environment, for which the room served as the enclosure. Banks are custom built for specific applications, although small modules have a fast turn around time. Spec sheets available on request. For design only, please see our <a href="services">Services</a></p>

	<p class="center">
	<a href="img/stpx_banks.jpg"><img src="img/stpx_banks_small.jpg"></a><br />
	<span class="text-muted">Fig. 1. Pulsed banks, dumps and ancil hardware for FAMU STPX.</span></p>

<h3>Safety</h3>
Safety must be the number one priority in all labs. The high-voltage used in our banks is inherently dangerous; WSI takes all measures to ensure operator safety. A proper safety protocol needs to be followed. Banks should always be kept in an isolated room equipped with <a href="safety">safety interlocks</a>. Our bank dumps are double or triple redundant, default to a safe position in case of power outage or other failure, and are controled via door interlocks and from the control room. WSI can work with your lab to setup a safe testing environment.

<a id="bankmodules"></a>
<h3>Bank Modules</h3>
<h4>Module A <small>(based on 4uF, 12kV, 300J caps)</small></h4>
	<div class="col-md-6">
		<p class="center"><a href="img/BankAC1.jpg"><img src="img/BankAC1-small.jpg"></a><br />
		Module AC32</p>
	</div>
	<div class="col-md-6">
		<p class="center"><a href="img/BankAC2.jpg"><img src="img/BankAC2-small.jpg"></a><br />
		Module AC64</p>
	</div>
<h4>Module B <small>(based on 120uF, 12kV, 9kJ caps)</small></h4>
	<div class="col-md-6">
		<p class="center"><a href="img/BankBL1.jpg"><img src="img/BankBL1-small.jpg"></a><br />
		Module BL480</p>
	</div>
	<div class="col-md-6">
		<p class="center"><a href="img/BankBL2.jpg"><img src="img/BankBL2-small.jpg"></a><br />
		Module BL960</p>
	</div>
<h4>Module C <small>(based on 2mF, 5kV, 25kJ caps)</small></h4>
	<p>Module C can be wall mounted or shelf mounted (plans available on request).</p>
	<div class="col-md-6">
		<p class="center"><a href="img/BankCL3.jpg"><img src="img/BankCL3-small.jpg"></a><br />
		Module CL4000</p>
	</div>
	<div class="col-md-6">
		<p class="center"><a href="img/BankCL1.jpg"><img src="img/BankCL1-small.jpg"></a><br />
		Module CL10000</p><br />
	</div>

	<p><a class="btn btn-lg btn-primary" href="mailto:sales@woodruffscientific.com" role="button">Get a Quote &raquo;</a></p>

<a id="pfn"></a>
<h3>Pulse Forming Networks</h3>
	<div class="col-md-6">
		
	</div>
	<div class="col-md-6">

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
