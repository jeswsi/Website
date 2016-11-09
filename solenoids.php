pul<!DOCTYPE html>
<html lang="en">
  <head>
	<?php
	$head = file_get_contents('header.html');
	echo $head;	
	?>
		<meta name="description" content="Solenoid Magnets for fusion, plasma energy, and physics labs. Custom and stock sizes and materials available.">
  <title>Solenoids | Woodruff Scientific, Inc.</title>
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
 	 	<li><a href="magnets">Magnets</a></li>
  		<li class="active">Solenoids</li>
	</ol>
	<h1>Solenoids</h1>

	<p>
		Copper wire and Stainless Steel wire-forms. Custom sizing and materials available.
	</p>
	<div class="col-md-6">
		
		<p><a href="img/Coil1.jpg"><img alt="Coil1" src="img/Coil1-300x129.jpg" width="300" height="129" /></a><br />
		<a href="img/Coil1.jpg">Flux plot</a><br />
		Circuit (<a href="pdf/Coil1.1-8mF-5O-0.3089H.pdf">schematic</a>, <a href="pdf/Coil1.1-8mF-5O-0.3089Ht.pdf">analysis</a>)</p>
	</div>

	<div class="col-md-6">
		<p><a href="img/Coil2.jpg"><img alt="Coil2" src="img/Coil2-300x129.jpg" width="300" height="129" /></a><br />
		<a href="img/Coil21.jpg">Flux plot</a><br />
		Circuit (<a href="pdf/Coil2.1-2mF-32mO-0.021mH.pdf">schematic</a>, <a href="pdf/Coil2.1-2mF-32mO-21mHt.pdf">analysis</a>)</p>	
		
	</div>

	<div class="col-md-6">
		<p><a href="img/Coil3.jpg"><img alt="Coil3" src="img/Coil3-300x159.jpg" width="300" height="159" /></a><br />
<a href="img/Coil31.jpg">Flux plot</a><br />
Circuit (<a href="pdf/Coil3.1-2mF-0.3mO-3uH.pdf">schematic</a>, <a href="pdf/Coil3.1-2mF-0.3mO-3uHt.pdf">analysis</a>)</p>
	</div>

	<div class="col-md-6">
		<p><a href="img/Coil41.jpg"><img alt="Coil4" src="img/Coil41-300x159.jpg" width="300" height="159" /></a><br />
<a href="img/Coil4.jpg">Flux plot</a><br />
Circuit (<a href="pdf/Coil4.1-2mF-0.16O-9.3mH1.pdf">schematic</a>, <a href="pdf/Coil4.1-2mF-0.16O-9.3mHt.pdf">analysis</a>)</p>
	</div>

	<p><a class="btn btn-lg btn-primary" href="mailto: sales@woodruffscientific.com?subject=Solenoid RFQ &amp;body=L:%0D%0A%0D%0APeak%20current%20:%0D%0A%0D%0AOD:%0D%0A%0D%0AID:%0D%0A%0D%0AVacuum-compatible?(yes/no):%0D%0A%0D%0AShort%20description%20of%20the%20application:%0D%0A%0D%0APlease%20find%20attached%20a%20sketch/engineering%20drawing%20of%20the%20application.%0D%0A%0D%0ANeeded%20by(Date):%0D%0A%0D%0AContact(Name/email/phone/fax/etc):" role="button">Get a Quote &raquo;</a></p>


    </div> <!-- /container -->
    </div> <!-- /wrap -->

	<?php
	$footer = file_get_contents('footer.html');
	echo $footer;	
	?>	   
  </body>
</html>
