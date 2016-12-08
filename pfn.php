<!DOCTYPE html>
<html lang="en">
  <head>
	<?php
	$head = file_get_contents('header.html');
	echo $head;	
	?>
	<meta name="description" content="Pulse forming networks for fusion, pulsed power, plasma energy, and physics labs. We can design and construct custom capacitor banks.">
  <title>Pulse Forming Networks | Woodruff Scientific, Inc.</title>
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
  		<li><a href="pulsedpower">Pulsed Power</a></li>
  		<li class="active">Pulse Forming Networks</li>

	</ol>

    <h1>Pulse Forming Networks</h1>
	<p class="center"><a href="files/TypeBPFN.pdf"><img src="img/typeB-small.png"></a><br />
		<span class="text-muted">Type B Pulse Forming Network</span></p>
	<p>Woodruff Scientific can design and build pulse forming networks for your specific application. Various PFN configurations are appropriate for different situations:</p>
	<ul>
		<li>Type A - Used for very high voltage pulses</li>
		<li>Type B - Uncoupled inductors, Capacitances vary</li>
		<li>Type C - Often used, Capacitances vary</li>
		<li>Type E - Similar configuration to Type B with mutual inductance and Fixed Capcitances</li>
	</ul>
	<h3>Example Schematics</h3>
	<p>
		<a href="files/TypeAPFN.pdf">Type A Pulse Forming Network</a><br />
		<a href="files/TypeBPFN.pdf">Type B Pulse Forming Network</a><br />
		<a href="files/TypeCPFN.pdf">Type C Pulse Forming Network</a><br />
		<a href="files/TypeEPFN.pdf">Type E Pulse Forming Network</a><br />
	</p>
<h3>References</h3>
	<blockquote><a href="pfns.html">Pulse Forming Network References</a></blockquote>
	<!--<blockquote><a href="dcfilters.html">DC Filter References</a></blockquote>
	<blockquote><a href="invertors.html">Invertor References</a></blockquote>
	<blockquote><a href="snubbers.html">Snubber References</a></blockquote>
	<blockquote><a href="marx.html">Marx Generator References</a></blockquote>
	<blockquote><a href="pulsegen.html">Pulse Generator References</a></blockquote>
	<blockquote><a href="blumlein.html">Blumlein References</a></blockquote>-->

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
