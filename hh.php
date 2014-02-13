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
	<ol class="breadcrumb">
  		<li><a href="index.php">Home</a></li>
		<li><a href="products.php">Products</a></li>
 	 	<li><a href="magnets.php">Magnets</a></li>
  		<li class="active">Helmholtz Coils</li>
	</ol>
	<div>
	<h1>Helmholtz Coils</h1>
	<img height="159" width="300" src="img/HHcoil2.jpg"><p>We produce custom magnetic field coils designed for specific pulsed power applications in fusion energy sciences, requiring high field strengths, high currents, high voltages, often UH vacuum compatibility (see e.g. Fig 1) and to withstand large forces. Typical coil sets have been designed, and built for poloidal field generation, but also for applications for calibration of diagnostics. Offerings below can be tailored to specific applications.</p>
	</div>
	
	<div class="panel panel-default">
  <div class="panel-heading">Helmholtz Coils</div>
  <div class="panel-body">
    <p>Custom sizes or materials are also available. <a href="mailto:sales@woodruffscientific.com">Email us</a> for a consultation.</p>
  </div>

  <!-- Table -->
  <table class="table">
    <thead><tr>
	<th>Inner Dia</th>
	<th>Material</th>
	<th># of turns</th>
	<th></th>
    </tr></thead>
    <tr>
	<td>1m</td> 
	<td>Copper</td>
	<td>100</td>
	<td><script 
    data-tax="475" 
    data-shipping="30" 
    data-currency="USD" 
    data-amount="5000" 
    data-quantity="1" 
    data-name="1m Diameter HH coil" 
    data-button="cart" src="js/external/paypal-button-minicart.min.js?merchant=simon@woodruffscientific.com"
></script></td>
    <tr>
    <tr>
	<td>1m</td> 
	<td>Copper</td>
	<td>100</td>
	<td><script 
    data-tax="475" 
    data-shipping="30" 
    data-currency="USD" 
    data-amount="5000" 
    data-quantity="1" 
    data-name="1m Diameter HH coil" 
    data-button="cart" src="js/external/paypal-button-minicart.min.js?merchant=simon@woodruffscientific.com"
></script></td>
  </table>
</div>




    </div> <!-- /container -->
    </div> <!-- /wrap -->

	<?php
	$footer = file_get_contents('footer.html');
	echo $footer;	
	?>	   
  </body>
</html>
