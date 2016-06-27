<!DOCTYPE html>
<html lang="en">
  <head>
	<?php
	$head = file_get_contents('header.html');
	echo $head;	
	?>
	<meta name="description" content="Low Inductance High Current magnets for fusion, plasma energy, and physics labs.">
  <title>Low L High Current Magnets | Woodruff Scientific, Inc.</title>
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
		<li><a href="products">Products</a></li>
 	 	<li><a href="magnets">Magnets</a></li>
  		<li class="active">Low L High Current</li>
	</ol>
	<h1>Low L High Current</h1>
	<p>Coils with low inductance. Custom configurations available.</p>

	<div class="col-md-6">
		<p><a href="img/Coil5.jpg"><img alt="Coil3" src="img/Coil5-small.jpg" width="300" height="159" /></a><br />
<a href="img/Coil51.jpg">Flux plot</a><br />
Circuit (<a href="pdf/Coil5.1-2mF-74uO-3.2uH.pdf">schematic</a>, <a href="pdf/Coil5.1-2mF-74uO-3.2uHt.pdf">analysis</a>)</p>
	</div>

	<div class="col-md-6">
		<p><a href="img/Coil61.jpg"><img alt="Coil4" src="img/Coil61-small.jpg" width="300" height="159" /></a><br />
<a href="img/Coil62.jpg">Flux plot</a><br />
Circuit (<a href="pdf/Coil6.1-2mF-0.7mO-1.9uH.pdf">schematic</a>, <a href="pdf/Coil6.1-2mF-0.7mO-1.9uHt.pdf">analysis</a>)</p>
	</div>
	<div class="col-md-6">
		<p><a href="img/Coil7.jpg"><img alt="Coil3" src="img/Coil7-small.jpg" width="300" height="159" /></a><br />
<a href="img/Coil7-flux.jpg">Flux plot</a><br />
Circuit (<a href="pdf/Coil7.1-2mF-25uO-0.39uH.pdf">schematic</a>, <a href="pdf/Coil7.1-2mF-25uO-0.39uHt.pdf">analysis</a>)</p>
	</div>

	<div class="col-md-6">
	</div>

	<div class="clearfix"></div>

	<p><a class="btn btn-lg btn-primary" href="mailto:sales@woodruffscientific.com?subject=LowL Coil RFQ &amp;body=L:%0D%0A%0D%0APeak%20current%20:%0D%0A%0D%0AOD:%0D%0A%0D%0AID:%0D%0A%0D%0AVacuum-compatible?(yes/no):%0D%0A%0D%0AShort%20description%20of%20the%20application:%0D%0A%0D%0APlease%20find%20attached%20a%20sketch/engineering%20drawing%20of%20the%20application.%0D%0A%0D%0ANeeded%20by(Date):%0D%0A%0D%0AContact(Name/email/phone/fax/etc):" role="button">Get a Quote &raquo;</a></p>


    </div> <!-- /container -->
    </div> <!-- /wrap -->

	<?php
	$footer = file_get_contents('footer.html');
	echo $footer;	
	?>	   
  </body>
</html>
