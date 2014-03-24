<!DOCTYPE html>
<html lang="en">
  <head>
	<?php
	$head = file_get_contents('header.html');
	echo $head;	
	?>
	<meta name="description" content="Non-Circular magnetic coils for fusion, plasma energy, and physics labs.">
  <title>Non-Circular Coils | Woodruff Scientific, Inc.</title>
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
  		<li class="active">Non-Circular Coils</li>
	</ol>
	<h1>Non-Circular Coils</h1>
	<p>Custom configurations available.</p>
	<p><a href="img/Non-circular.jpg"><img src="img/Non-circular-small.jpg"></a></p>
	<p><a class="btn btn-lg btn-primary" href="mailto:sales@woodruffscientific.com?subject=Non-circular Coil RFQ &amp;body=L:%0D%0A%0D%0APeak%20current%20:%0D%0A%0D%0AOD:%0D%0A%0D%0AID:%0D%0A%0D%0AVacuum-compatible?(yes/no):%0D%0A%0D%0AShort%20description%20of%20the%20application:%0D%0A%0D%0APlease%20find%20attached%20a%20sketch/engineering%20drawing%20of%20the%20application.%0D%0A%0D%0ANeeded%20by(Date):%0D%0A%0D%0AContact(Name/email/phone/fax/etc):" role="button">Get a Quote &raquo;</a></p>


    </div> <!-- /container -->
    </div> <!-- /wrap -->

	<?php
	$footer = file_get_contents('footer.html');
	echo $footer;	
	?>	   
  </body>
</html>
