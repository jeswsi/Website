<!DOCTYPE html>
<html lang="en">
  <head>
	<?php
	$head = file_get_contents('header.html');
	echo $head;	
	?>
  </head>

  <body>
    <div id="wrap">
    <div class="container">

	<?php
	$navbar = file_get_contents('navbar.html');
	echo $navbar;	
	?>	

	<h1>Testimonials</h1>
	<p>Woodruff Scientific has provided products and services to universities, national labs, and private companies. See what our customers are saying:</p>
	<h3>Vacuum compatible Helmholtz Coil</h3>
	<blockquote>“Woodruff Scientific designed and manufactured an in-vacuum Helmholtz coil and mounting structure to our specifications. We will be using the coils to generate an applied magnetic field for basic plasma physics and fusion-energy-science related experiments. Simon and his team were highly responsive to our needs and remained engaged and helpful even after the coils were delivered. Thank you very much!”
<p class="text-muted">Dr. Scott Hsu, P 24 Plasma Physics Group, Los Alamos National Laboratory</p></blockquote>

	<h3>Control and Data Aquisition System</h3>
	<blockquote>“Woodruff Scientific have made an excellent complete control and data acquisition system for our Laboratory Astrophysical Jet experiment. The system was expertly tailored to our needs with COTS National Instruments and proprietary custom hardware, operated by a full set of LabView interfaces coded to best practise design patterns. The hardware and services provided by Woodruff Scientific are among the most cost-effective in the industry. Highly recommended.”
<p class="text-muted">Prof. Sett You and Jens Von der Linden, University of Washington, 2013</p></blockquote>

	<h3>Pulsed Power Plasma Experiment</h3>
	<blockquote>“Woodruff Scientific Inc. constructed the Florida A&M University (FAMU)/Center for Plasma Science and Technology (CePaST) STPX (Spheromak Turbulent Plasma Experiment) under a subcontract funded by the U.S. Department of Energy… The STPX achieved plasma during the first attempt and CePaST is very pleased with the work performed by Woodruff Scientific Inc.” <a href="Woodruff-Testimonial.pdf">Full Testimonial (pdf)</a>
	<p class="text-muted">Charles A. Weatherford, Professor of Physics and Director of the Florida A&M University Center for Plasma Science and Technology 2013</p></blockquote>
    </div> <!-- /container -->
    </div> <!-- /wrap -->

	<?php
	$footer = file_get_contents('footer.html');
	echo $footer;	
	?>	   
  </body>
</html>

