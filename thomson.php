<!DOCTYPE html>
<html lang="en">
  <head>
	<?php
	$head = file_get_contents('header.html');
	echo $head;	
	?>
  <meta name="description" content="Thomson Scattering diagnostics for fusion, plasma energy, and physics labs.">
  <title>Scattering | Woodruff Scientific, Inc.</title>
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
  		<li class="active">Scattering</li>
	</ol>
	<h1>Scattering</h1>
	<p>Scattering of electromagnetic radiation from the plasma is a
	non-perturbing method of determining detailed information about the
	electron distribution function, and sometimes of the ions.  Excellent
	references for Thomson scattering include Sheffield's <a href="http://www.sciencedirect.com/science/book/9780123748775">Plasma Scattering
	of Electromagnetic Radiation 2nd Edition</a></p>

	<h3>Thomson Scattering</h3>

<!-- 	FIGURE of thomson from John's textbook.
 -->

	<p><a href="http://www.rp-photonics.com/bg/buy_yag_lasers.html?s=vbox">YAG laser resources</a>

	<p><a class="btn btn-lg btn-primary" href="mailto: sales@woodruffscientific.com?subject=Thomson scattering RFQ &#038;body=How%20many%20time%20points:%0D%0A%0D%0ANumber%20of%20radial%20measurements:%0D%0A%0D%0AShort%20description%20of%20the%20application:%0D%0A%0D%0APlease%20find%20attached%20a%20sketch/engineering%20drawing%20of%20the%20application.%0D%0A%0D%0AContact(Name/email/phone/fax/etc):%0D%0A%0D%0ANeeded%20by(Date):" role="button">Get a Quote &raquo;</a></p>


    </div> <!-- /container -->
    </div> <!-- /wrap -->

	<?php
	$footer = file_get_contents('footer.html');
	echo $footer;	
	?>	   
  </body>
</html>
