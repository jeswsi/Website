<!DOCTYPE html>
<html lang="en">
  <head>
	<?php
	$head = file_get_contents('header.html');
	echo $head;	
	?>
	<meta name="description" content="Neutral particle diagnostics for fusion, plasma energy, and physics labs. Useful Neutral Particle references.">
  <title>Neutral Particles | Woodruff Scientific, Inc.</title>
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
  		<li class="active">Neutral Particles</li>
	</ol>
	<h1>Neutral Particles</h1>
	<p>Neutral particles are able to escape the confining magnetic field since
	they are not charged.  It is also possible to use neutral particles as
	probes, which then relies on radiation of some other sort from the
	plasma for diagnosis.  An excellent resource for neutral particle
	analysis is Hutchinson's <a href="http://www.amazon.com/Principles-Plasma-Diagnostics-I-Hutchinson/dp/052167574X">Principles of Plasma Diagnostics 2nd Edition
	</a></p>

	<h3>Neutral Particle Analyzer</h3>
					<blockquote><a href="npa.html">Neutral Particle Analyzer References</a></blockquote>


<!-- FIGURE of neutral particle analyzer
 -->
	<p><a class="btn btn-lg btn-primary" href="mailto: sales@woodruffscientific.com?subject=NPA RFQ &#038;body=Short%20description%20of%20the%20application:%0D%0A%0D%0APlease%20find%20attached%20a%20sketch/engineering%20drawing%20of%20the%20application.%0D%0A%0D%0AContact(Name/email/phone/fax/etc):%0D%0A%0D%0ANeeded%20by(Date):" role="button">Get a Quote &raquo;</a></p>


    </div> <!-- /container -->
    </div> <!-- /wrap -->

	<?php
	$footer = file_get_contents('footer.html');
	echo $footer;	
	?>	   
  </body>
</html>
