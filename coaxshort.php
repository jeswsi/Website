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
 	 	<li><a href="plasmasources.php">Plasma Sources</a></li>
 	 	<li><a href="magnetized.php">Magnetized</a></li>
  		<li class="active">Coaxial Short</li>
	</ol>
	<h1>Coaxial Short</h1>
	<p>Paragraph</p>

    </div> <!-- /container -->
    </div> <!-- /wrap -->

	<?php
	$footer = file_get_contents('footer.html');
	echo $footer;	
	?>	   
  </body>
</html>
