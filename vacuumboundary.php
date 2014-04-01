<!DOCTYPE html>
<html lang="en">
  <head>
	<?php
	$head = file_get_contents('header.html');
	echo $head;	
	?>
  <meta name="description" content="Vacuum boundary confinement chambers for fusion and plasma systems.">
  <title>Vacuum Boundary | Woodruff Scientific, Inc.</title>
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
 	 	<li><a href="chambers">Plasma-Material Interface</a></li>
  		<li class="active">Vacuum Boundary</li>
	</ol>
	<h1>Vacuum Boundary</h1>
		<h3>Vacuum Boundary</h3>
		<p>To provide UHV conditions, the design of the vacuum boundary is
critical.  Design techniques are mature, and are written into various
seminal texts, including <a href="http://www.amazon.com/A-Users-Guide-Vacuum-Technology/dp/0471270520">A User's Guide to Vacuum Technology</a> by John
O'Halon.</p>

<div class="col-md-6">
	<p><a href="img/Chamber1-1.jpg"><img src="img/Chamber1-1-small.jpg"></a></p>
	<p><a href="img/Chamber4-1.jpg"><img src="img/Chamber4-1-small.jpg"></a></p>
	<p><a href="img/sbirchamber.jpg"><img src="img/sbirchamber-small.jpg"></a></p>
</div>
<div class="col-md-6">
	<p><a href="img/Chamber2-1.jpg"><img src="img/Chamber2-1-small.jpg"></a></p>
	<p><a href="img/Chamber4-4.jpg"><img src="img/Chamber4-4-small.jpg"></a></p>
	<p><a href="img/STPX.jpg"><img src="img/STPX-300x199.jpg"></a></p>

</div>
<p>
		Chambers we have designed in concert with manufacturers such as
Atlas UHV, MDC Vacuum and Kurt J. Lesker.</p>
<div class="clearfix"></div>
	<p><a class="btn btn-lg btn-primary" href="mailto:sales@woodruffscientific.com" role="button">Get a Quote &raquo;</a></p><br />

<blockquote><a href="vacuum.html">Vacuum Boundary References</blockquote>

    </div> <!-- /container -->
    </div> <!-- /wrap -->

	<?php
	$footer = file_get_contents('footer.html');
	echo $footer;	
	?>	   
  </body>
</html>
