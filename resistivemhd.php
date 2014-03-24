<!DOCTYPE html>
<html lang="en">
  <head>
	<?php
	$head = file_get_contents('header.html');
	echo $head;	
	?>
  <meta name="description" content="">
  <title>Resistive MHD | Woodruff Scientific, Inc.</title>
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
	  <li class="active">Resistive MHD</li>
	</ol>
	<h1>Resistive MHD</h1>


    <div class="col-md-6">
      <p><a href="img/iter.png"><img src="img/iter-300x184.png" alt="iter" width="300" height="184" /></a><br />
ITER</p>
    </div>
    <div class="col-md-6">
      <p><a href="img/diiid.png"><img src="img/diiid-300x185.png" alt="diiid" width="300" height="185" /></a><br />
DIII-D</p>
    </div>
    <div class="col-md-6">
      <p><a href="img/ltx.png"><img src="img/ltx-300x179.png" alt="ltx" width="300" height="179" /></a><br />
Small tokamaks</p>
    </div>
    <div class="col-md-6">
      <p><a href="img/SSPX.jpg"><img src="img/SSPX-300x187.jpg" alt="SSPX" width="300" height="187" /></a><br />
Spheromaks</p>
    </div>
    <div class="col-md-6">
      <p><a href="img/frc.png"><img src="img/frc-300x182.png" alt="frc" width="300" height="182" /></a><br />
FRCs</p>
    </div>
    <div class="col-md-6">
      <p><a href="img/stpx.png"><img src="img/stpx-300x158.png" alt="stpx" width="300" height="158" /></a><br />
STPX</p>
    </div>
  <div class="clearfix"></div>

<p><a class="btn btn-lg btn-primary" href="mailto:sales@woodruffscientific.com" role="button">Get a Quote &raquo;</a></p>

  </div> <!-- /container -->
    </div> <!-- /wrap -->

	<?php
	$footer = file_get_contents('footer.html');
	echo $footer;	
	?>	   
  </body>
</html>
