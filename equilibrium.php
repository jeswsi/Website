<!DOCTYPE html>
<html lang="en">
  <head>
	<?php
	$head = file_get_contents('header.html');
	echo $head;	
	?>
  <meta name="description" content="">
  <title>Equilibrium | Woodruff Scientific, Inc.</title>
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
	<li class="active">Equilibrium</li>
	</ol>

	<h1>Equilibrium</h1>
    <div class="col-md-6">
      <p><a href="img/itersob.jpg"><img src="img/itersob-300x228.jpg" alt="itersob" width="300" height="228" /></a><br />
        ITER</p>
    </div>
    <div class="col-md-6">
      <p><a href="img/nstx.jpg"><img src="img/nstx-300x244.jpg" alt="nstx" width="300" height="244"  /></a><br />
        NSTX</p>
    </div>
    <div class="col-md-6">
      <p><a href="img/diiid.jpg"><img src="img/diiid-300x255.jpg" alt="diiid" height="244" /></a><br />
        DIIID</p>
    </div>
    <div class="col-md-6">
      <p><a href="img/kstar.jpg"><img src="img/kstar-300x228.jpg" alt="kstar" height="244"/></a><br />
        KSTAR</p>
    </div>
    <div class="col-md-6">
      <p><a href="img/LTX.png"><img src="img/LTX-300x244.png" alt="LTX" height="233" /></a><br />
        LTX</p>
    </div>
    <div class="col-md-6">
      <p><a href="img/sspx.jpg"><img src="img/sspx-300x233.jpg" alt="sspx" width="300" height="233" /></a>
        <br />SSPX</p>
    </div>
    <div class="col-md-6">
      <p><a href="img/stpx.jpg"><img src="img/stpx-300x222.jpg" alt="stpx" width="300" height="222" /></a><br />STPX</p>
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
