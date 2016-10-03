<!DOCTYPE html>
<html lang="en">
  <head>
	<?php
	$head = file_get_contents('header.html');
	echo $head;	
	?>
	<meta name="description" content="Company information about Woodruff Scientific, Inc. WSI seeks to accelerate the development of commercial fusion">
  <title>Company | Woodruff Scientific, Inc.</title>
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
	  		<li class="active">Company</li>
		</ol>

		<h1>Woodruff Scientific, Inc.</h1>

		<img src="img/CompanyPhotos/Team.JPG" alt="Image of WSI Team" style="width:500px; height:350px"; " align="left" Hspace="10"></p>

		<p>Nuclear fusion powers our sun and all the stars in the night sky; if harnessed on earth, it could be the ultimate energy source: safe, clean, and with plentiful fuel. Commercial fusion energy will ultimately provide energy independence, national security, and new jobs in the emerging clean-tech market sector.</p>

		<p>For the last decade, Woodruff Scientific has sought to accelerate the development of commercial fusion by tackling critical scientific problems in the <a href="http://science.energy.gov/fes/">US DOE Fusion Energy Sciences program</a>.  What we&#8217;ve built, we can now offer as <a href="products">products.</a> What we&#8217;ve learned to do, we offer as <a href="services">services</a>.</p>

		<p>Woodruff Scientific Incorporated (WSInc) is a C-Corp established in 2005 in Seattle, Washington, USA.  WSInc performs research under contract to private and public institutions, as well as through awards from the U.S. Department of Energy.   Offices and electronics workshop are located in Wallingford. In 2015, WSI established a second office in San Diego.</p>

		<p>Woodruff Scientific Limited (WSLtd) is a seperate company established in 2006 in Guildford, UK. WSLtd exists to serve EU-based customers.  Office is located at the Culham Innovation Centre in Abingdon, UK.</p>

		<p><a href="http://compactfusionsystems.com/">Compact Fusion Systems, Inc</a> (CFSI) and <a href="http://uhv3d.com/">Ultra High Vacuum 3D, Inc</a> (UHV3D) are separate companies that have recently been established.</p>

    </div> <!-- /container -->
    </div> <!-- /wrap --> 

	<?php
	$footer = file_get_contents('footer.html');
	echo $footer;	
	?>	   
  </body>
</html>
