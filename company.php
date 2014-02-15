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
  		<li class="active">Company</li>
	</ol>

	<h1>Woodruff Scientific, Inc.</h1>
		<ul class="right">
		  <li><a href="contact.php">Contact</a></li>
                  <li><a href="scientific.php">Scientific Team</a></li>
                  <li><a href="business.php">Business Team</a></li>
                  <li><a href="careers.php">Careers</a></li>
                  <li><a href="terms.php">Terms and Conditions</a></li>
		</ul>
<p>Nuclear fusion powers our sun and all the stars in the night sky; if harnessed on earth, it could be the ultimate energy source: safe, clean, and with plentiful fuel. Commercial fusion energy will ultimately provide energy independence, national security, and new jobs in the emerging clean-tech market sector.</p>
<p>For the last decade, Woodruff Scientific has sought to accelerate the development of commercial fusion by tackling critical scientific problems in the <a href="http://science.energy.gov/fes/">US DOE Fusion Energy Sciences program</a>.  What we&#8217;ve built, we can now offer as <a href="products.php">products.</a> What we&#8217;ve learned to do, we offer as <a href="services.php">services</a>.</p>
<p>Woodruff Scientific Incorporated (WSInc) is a C-Corp established in 2005 in Seattle, Washington, USA.  WSInc performs research under contract to private and public institutions, as well as through awards from the U.S. Department of Energy.   Offices and electronics workshop are located in Wallingford.</p>
<p>Woodruff Scientific Limited (WSLtd) is a fully-owned subsidiary of WSInc established in 2006 in Guildford, UK. WSLtd exists to serve EU-based customers.  Office is located in Guildford, Surrey.</p>


    </div> <!-- /container -->
    </div> <!-- /wrap -->

	<?php
	$footer = file_get_contents('footer.html');
	echo $footer;	
	?>	   
  </body>
</html>
