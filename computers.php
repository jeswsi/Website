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
  		<li><a href="index">Home</a></li>
 	 	<li><a href="products">Products</a></li>
  		<li class="active">Computers</li>
	</ol>
	<h1>Computers</h1>
	<p>Most of our computing is performed at <a href="http://www.nersc.gov/">NERSC</a> (on <a href="http://www.nersc.gov/systems/hopper-cray-xe6/">Hopper</a>, currently 24th in the <a href="http://www.top500.org/list/2013/06/">top 500</a>), however for pre-production runs and private contracts we perform jobs in-house on a small cluster.  Periodically we update our 2U 19&#8243; rack-mountable cluster (or debug node), with the latest architecture (see Fig. 1) and operating systems, libraries and applications and so could build to order.  Capable &#8216;thin clients&#8217; are then used to connect to centralized scientific computing resources on the cluster. (Accounts are available on our cluster currently only through our Associates Program).</p>

<p>WSI can assemble and configure computing clusters and thin-clients (linux based) for your needs.</p>
<p><a class="btn btn-lg btn-primary" href="mailto:sales@woodruffscientific.com" role="button">Get a Quote &raquo;</a></p>
    </div> <!-- /container -->
    </div> <!-- /wrap -->

	<?php
	$footer = file_get_contents('footer.html');
	echo $footer;	
	?>	   
  </body>
</html>
