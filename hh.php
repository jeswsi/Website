<!DOCTYPE html>
<html lang="en">
  <head>
	<?php
	$head = file_get_contents('header.html');
	echo $head;	
	?>
  <meta name="description" content="Helmholtz coils for fusion, plasma energy, and physics labs. Custom sizing and materials available.">
  <title>Helmholtz Coils | Woodruff Scientific, Inc.</title>
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
 	 	<li><a href="magnets">Magnets</a></li>
  		<li class="active">Helmholtz Coils</li>
	</ol>
	
	<h1>Helmholtz Coils</h1>
	  <p class="center">
    <a href="img/LANLcoils.jpg"><img src="img/LANLcoils.jpg" width="224" height="300"></a><br />
    <span class="text-muted">Fig 1. Example: vacuum-compatible 23″OD HH coils designed for LANL’s PLX experiment.</span></p>

 
  <h2>Configurations</h2>
      <p>
      Copper wire and Stainless Steel wire-forms. Custom sizing and materials available.
    </p>
  <div class="col-md-6">
    
    <p><a href="img/HHcoil2.jpg"><img alt="Coil1" src="img/HHcoil2.jpg" width="300" height="129" /></a>
    </p>
  </div>

  <div class="clearfix">
  </div>
  <p><a class="btn btn-lg btn-primary" href="mailto: sales@woodruffscientific.com?subject=HH RFQ &amp;body=L:%0D%0A%0D%0APeak%20current%20:%0D%0A%0D%0AOD:%0D%0A%0D%0AID:%0D%0A%0D%0AVacuum-compatible?(yes/no):%0D%0A%0D%0AShort%20description%20of%20the%20application:%0D%0A%0D%0APlease%20find%20attached%20a%20sketch/engineering%20drawing%20of%20the%20application.%0D%0A%0D%0ANeeded%20by(Date):%0D%0A%0D%0AContact(Name/email/phone/fax/etc):" role="button">Get a Quote &raquo;</a></p>

<!--
	<div class="panel panel-default">
  <div class="panel-heading">Helmholtz Coils</div>
  <div class="panel-body">
    <p>Custom sizes or materials are also available. <a href="mailto:sales@woodruffscientific.com">Email us</a> for a consultation.</p>
  </div>

  <!-- Table --/>
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
</div> -->




    </div> <!-- /container -->
    </div> <!-- /wrap -->

	<?php
	$footer = file_get_contents('footer.html');
	echo $footer;	
	?>	   
  </body>
</html>
