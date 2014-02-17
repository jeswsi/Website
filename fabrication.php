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
  		<li><a href="index">Home</a></li>
 	 	<li><a href="services">Services</a></li>
  		<li class="active">Fabrication &amp; Integration</li>
	</ol>
	<h1>Fabrication &amp; Integration</h1>
	<p>After more than a decade of machining prototypes, working with state-of-the-art fabrication techniques (laser cutting, CNC mills/lathes, and now: additive manufacturing) we now offer fabrication services. For components fabricated elsewere, we offer integration services (we will put it together for you and ship completed systems). Let us know what you need fabricated or assembled.</p>
<p><a class="btn btn-lg btn-primary" href="mailto:sales@woodruffscientific.com" role="button">Get a Quote &raquo;</a></p>


    </div> <!-- /container -->
    </div> <!-- /wrap -->

	<?php
	$footer = file_get_contents('footer.html');
	echo $footer;	
	?>	   
  </body>
</html>
