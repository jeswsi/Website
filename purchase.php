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
 	 	<li><a href="services.php">Services</a></li>
  		<li class="active">Purchase</li>
	</ol>
	<h1>Purchase</h1>
	<p>For all projects Purchasing is often the most critical aspect of the development: tracking orders, managing vendors, and ensuring that items are delivered in a timely manner so that project time-line is not impacted. We have a decade of experience sourcing both used and new quality components, nationally and internationally. WSI can manage your purchasing while you focus on your project.</p>
<p><a class="btn btn-lg btn-primary" href="mailto:sales@woodruffscientific.com" role="button">Get a Quote &raquo;</a></p>

    </div> <!-- /container -->
    </div> <!-- /wrap -->

	<?php
	$footer = file_get_contents('footer.html');
	echo $footer;	
	?>	   
  </body>
</html>
