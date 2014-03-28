<!DOCTYPE html>
<html lang="en">
  <head>
	<?php
	$head = file_get_contents('header.html');
	echo $head;	
	?>
		<meta name="description" content="Field Reversed Configuration (FRC) devices for fusion, plasma energy, and physics labs. WSI has built complete devices for clients such as Florida A&M (STPX)">
  <title>Field Reversed Configurations | Woodruff Scientific, Inc.</title>
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
 	 	<li><a href="devices">Devices</a></li>
  		<li class="active">Field Reversed Configurations</li>
	</ol>
	<h1>Field Reversed Configurations</h1>
		<blockquote><a href="frcs.html">Field Reversed Configurations References</a></blockquote>


<p><a class="btn btn-lg btn-primary" href="mailto:sales@woodruffscientific.com" role="button">Get a Quote &raquo;</a></p><br />

    </div> <!-- /container -->
    </div> <!-- /wrap -->

	<?php
	$footer = file_get_contents('footer.html');
	echo $footer;	
	?>	   
  </body>
</html>
