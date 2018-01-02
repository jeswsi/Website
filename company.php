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

		<p>Woodruff Scientific Limited (WSLtd) is a separate company established in 2006 in Guildford, UK. WSLtd exists to serve EU-based customers.  Office is located at the Culham Innovation Centre in Abingdon, UK.</p>

		<p><a href="http://compactfusionsystems.com/">Compact Fusion Systems, Inc</a> (CFSI) and <a href="http://uhv3d.com/">Ultra High Vacuum 3D, Inc</a> (UHV3D) are separate companies that have recently been established.</p>


<!-- Begin MailChimp Signup Form -->
<link href="//cdn-images.mailchimp.com/embedcode/slim-10_7.css" rel="stylesheet" type="text/css">
<style type="text/css">
	#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
	/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>
<div id="mc_embed_signup" class="col-md-7">
<form action="https://woodruffscientific.us10.list-manage.com/subscribe/post?u=f4b64a3a93dfc6088f685111d&amp;id=92569d866b" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
	<label for="mce-EMAIL">Check out what we're doing at WSI! Subscribe to our monthly newsletter:</label>
	<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_f4b64a3a93dfc6088f685111d_92569d866b" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
    </div>
</form>
</div>

<!--End mc_embed_signup-->
    </div> <!-- /container -->
    </div> <!-- /wrap --> 

	<?php
	$footer = file_get_contents('footer.html');
	echo $footer;	
	?>	   
  </body>
</html>
