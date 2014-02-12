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

	<h1>Helmholtz Coils</h1>
	<p><img height="159" width="300" src="HHcoil2.jpg"></p>
<script 
    data-tax="475" 
    data-shipping="30" 
    data-currency="USD" 
    data-amount="5000" 
    data-quantity="1" 
    data-name="1m Diameter HH coil" 
    data-button="cart" src="js/external/paypal-button-minicart.min.js?merchant=simon@woodruffscientific.com"
></script>

    </div> <!-- /container -->
    </div> <!-- /wrap -->

	<?php
	$footer = file_get_contents('footer.html');
	echo $footer;	
	?>	   
  </body>
</html>
