<!DOCTYPE html>
<html lang="en">
  <head>
	<?php
	$head = file_get_contents('header.html');
	echo $head;	
	?>
  <meta name="description" content="">
  <title>RF | Woodruff Scientific, Inc.</title>
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
      		  <li><a href="physics">Physics</a></li>
  		<li class="active">RF</li>
	</ol>
	<h1>RF</h1>
    <p><a href="img/QWAVE00.png"><img src="img/QWAVE00-300x190.png" alt="QWAVE00" width="300" height="190" class="aligncenter size-medium wp-image-2068" /></a></p>

    <p><a class="btn btn-lg btn-primary" href="mailto:sales@woodruffscientific.com" role="button">Get a Quote &raquo;</a></p>


    </div> <!-- /container -->
    </div> <!-- /wrap -->

	<?php
	$footer = file_get_contents('footer.html');
	echo $footer;	
	?>	   
  </body>
</html>
