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
 	 	<li><a href="products.php">Products</a></li>
 	 	<li><a href="codac.php">CODAC</a></li>
  		<li class="active">Fiber-optic Relay Controls</li>
	</ol>
	<h1>Fiber-Optic Relay Controls</h1>
	<p>Paragraph</p>

    </div> <!-- /container -->
    </div> <!-- /wrap -->

	<?php
	$footer = file_get_contents('footer.html');
	echo $footer;	
	?>	   
  </body>
</html>
