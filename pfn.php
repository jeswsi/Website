<!DOCTYPE html>
<html lang="en">
  <head>
	<?php
	$head = file_get_contents('header.html');
	echo $head;	
	?>
	<meta name="description" content="Pulse forming networks for fusion, pulsed power, plasma energy, and physics labs. We can design and construct custom capacitor banks.">
  <title>Pulse Forming Networks | Woodruff Scientific, Inc.</title>
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
  		<li><a href="pulsedpower">Pulsed Power</a></li>
  		<li class="active">Pulse Forming Networks</li>

	</ol>

    <h1>Pulsed Forming Networks</h1>
	
<h3>References</h3>
	<blockquote><a href="pfns.html">Pulse Forming Network References</a></blockquote>
	<blockquote><a href="dcfilters.html">DC Filter References</a></blockquote>
	<blockquote><a href="invertors.html">Invertor Refernces</a></blockquote>
	<blockquote><a href="snubbers.html">Snubber References</a></blockquote>
	<blockquote><a href="marx.html">Marx Generator References</a></blockquote>
	<blockquote><a href="pulsegen.html">Pulse Generator References</a></blockquote>
	<blockquote><a href="blumlein.html">Blumlein References</a></blockquote>

	<div class="col-md-6">
		
	</div>
	<div class="col-md-6">

	</div>
	<p><a class="btn btn-lg btn-primary" href="mailto:sales@woodruffscientific.com" role="button">Get a Quote &raquo;</a></p>
    </div> <!-- /container -->
    </div> <!-- /wrap -->

	<?php
	$footer = file_get_contents('footer.html');
	echo $footer;	
	?>	   
  </body>
</html>
