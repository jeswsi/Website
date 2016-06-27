<!DOCTYPE html>
<html lang="en">
  <head>
	<?php
	$head = file_get_contents('header.html');
	echo $head;	
	?>
	<meta name="description" content="Products we offer for all stages of fusion, plasma energy, and physics labs.">
  <title>Products | Woodruff Scientific, Inc.</title>
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
  		<li class="active">Products</li>
	</ol>

		<ul class="left">
		  <li><a href="pulsedpower">Pulsed Power</a></li>
                  <li><a href="magnets">Magnets</a></li>
                  <li><a href="sources">Plasma Sources</a></li>
                  <li><a href="chambers">Plasma-Material Interface</a></li>
                  <li><a href="codac">CODAC</a></li>
                  <li><a href="diagnostics">Diagnostics</a></li>
                  <li><a href="devices">Devices</a></li>
                  <li><a href="computers">Computers</a></li>
		</ul>
	<h1>Products</h1>
	<p>Woodruff Scientific offers products that can be tailored to suit specific pulsed power and plasma physics applications, with the philosophy of providing all subsystems necessary for fusion energy development and research. </p>

    </div> <!-- /container -->
    </div> <!-- /wrap -->

	<?php
	$footer = file_get_contents('footer.html');
	echo $footer;	
	?>	   
  </body>
</html>
