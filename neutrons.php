<!DOCTYPE html>
<html lang="en">
  <head>
	<?php
	$head = file_get_contents('header.html');
	echo $head;	
	?>
	<meta name="description" content="Fast Ion (Scintillator type) diagnostics for fusion, plasma energy, and physics labs. Useful Scintillator References">
  <title>Neutrons | Woodruff Scientific, Inc.</title>
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
		<li><a href="diagnostics">Diagnostics</a></li>
  		<li class="active">Neutrons</li>
	</ol>
	<h1>Neutrons</h1>
	<p>Neutrons escape readily from fusion plasmas, generated in the fusion of
	deuterium and tritium.  Neutron diagnostics can provide information
	about the rate and also temperature of the fusion plasma.  Primary
	reference for neutron detection is Harvey and Hill's 1979 article
	<a href="http://www.sciencedirect.com/science/article/pii/0029554X79907304?via=ihub">Scintillation detectors for neutron physics research
	</a></p>

	<h3>Scintillator Type</h3>
					<blockquote><a href="scintillators.html">Scintillator References</a></blockquote>

<!-- 	Figure of scintillator with PMT
 -->	
	<p><a class="btn btn-lg btn-primary" href="mailto: sales@woodruffscientific.com?subject=Scintillator RFQ &#038;body=Short%20description%20of%20the%20application:%0D%0A%0D%0APlease%20find%20attached%20a%20sketch/engineering%20drawing%20of%20the%20application.%0D%0A%0D%0AContact(Name/email/phone/fax/etc):%0D%0A%0D%0ANeeded%20by(Date):" role="button">Get a Quote &raquo;</a></p>


    </div> <!-- /container -->
    </div> <!-- /wrap -->

	<?php
	$footer = file_get_contents('footer.html');
	echo $footer;	
	?>	   
  </body>
</html>
