<!DOCTYPE html>
<html lang="en">
  <head>
	<?php
	$head = file_get_contents('header.html');
	echo $head;	
	?>
		<meta name="description" content="Conical Theta-Pinch magnetized plasma source for fusion, plasma energy, and physics labs.">
  <title>Conical Theta-Pinch | Woodruff Scientific, Inc.</title>
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
 	 	<li><a href="plasmasources">Plasma Sources</a></li>
 	 	<li><a href="magnetized">Magnetized</a></li>
  		<li class="active">Conical Theta-Pinch</li>
	</ol>
	<h1>Conical Theta-Pinch</h1>
	<p>Paragraph</p>

    </div> <!-- /container -->
    </div> <!-- /wrap -->

	<?php
	$footer = file_get_contents('footer.html');
	echo $footer;	
	?>	   
  </body>
</html>
