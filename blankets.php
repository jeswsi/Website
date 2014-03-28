<!DOCTYPE html>
<html lang="en">
  <head>
	<?php
	$head = file_get_contents('header.html');
	echo $head;	
	?>
  <meta name="description" content="Blankets for vacuum compatible confinement chambers">
  <title>Blankets | Woodruff Scientific, Inc.</title>
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
  		<li class="active">Blankets</li>
	</ol>
	<h1>Blankets</h1>
	<p>For fusion power production or for waste transmutation, either solid or
flowing blankets are considered.  These are also a subject of R&amp;D, and
so we are keen to collaborate on blanket options.  We are going to
investigate a first wall option, hopefully in the context of the SBIR
program. Knowledge gained from modeling flowing metals will be applied
to this subject area in the coming years.
</p>
	<p><a class="btn btn-lg btn-primary" href="mailto:sales@woodruffscientific.com" role="button">Get a Quote &raquo;</a></p><br />

<blockquote><a href="blankets.html">Blanket References</blockquote>

    </div> <!-- /container -->
    </div> <!-- /wrap -->

	<?php
	$footer = file_get_contents('footer.html');
	echo $footer;	
	?>	   
  </body>
</html>
