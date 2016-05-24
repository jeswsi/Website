<!DOCTYPE html>
<html lang="en">
  <head>
	<?php
	$head = file_get_contents('header.html');
	echo $head;	
	?>
  <meta name="description" content="Maxwell coils for fusion, plasma energy, and physics labs. Custom sizing and materials available.">
  <title>Maxwell Coils | Woodruff Scientific, Inc.</title>
  <script type="text/javascript" src="scripts/js/formcalculations.js"></script>
  <link href="scripts/styles/coilform.css" rel="stylesheet" type="text/css" />
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
  		<li class="active">Maxwell Coils</li>
	</ol>
	
	<h1>Maxwell Coils</h1>
	  <p class="center">
    <img src="img/maxwell.png">
    <img src="img/maxwell_layout.jpg" height='300px'>
    <img src="img/maxwell_B.jpg" width='300px'>

    <br />
    <span class="text-muted">Maxwell Coil Configuration</span></p>

    <p>WSI can custom design Maxwell coils to suit your application. In-air, in-vacuum, water-cooled options available.</p>
      Copper wire and Stainless Steel or Aluminum wire-forms standard. Custom sizing, wire insulation and materials available.
    </p>

  <div class="clearfix">
  </div>
  <p><a class="btn btn-lg btn-primary" href="mailto: sales@woodruffscientific.com?subject=Maxwell RFQ &amp;body=L:%0D%0A%0D%0APeak%20current%20:%0D%0A%0D%0AOD:%0D%0A%0D%0AID:%0D%0A%0D%0AVacuum-compatible?(yes/no):%0D%0A%0D%0AShort%20description%20of%20the%20application:%0D%0A%0D%0APlease%20find%20attached%20a%20sketch/engineering%20drawing%20of%20the%20application.%0D%0A%0D%0ANeeded%20by(Date):%0D%0A%0D%0AContact(Name/email/phone/fax/etc):" role="button">Get a Quote &raquo;</a></p>


  
 
  




    </div> <!-- /container -->
    </div> <!-- /wrap -->

	<?php
	$footer = file_get_contents('footer.html');
	echo $footer;	
	?>	   
  </body>
</html>
