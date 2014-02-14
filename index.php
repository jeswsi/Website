
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

      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
        <h2>Products and Services for Plasma Physics and Pulsed Power</h2>
        <p>Woodruff Scientific inc. can help your lab get up and running quickly and at low cost</p>

      </div>
	<div class="col-md-6">
		<h2>Products</h2>
		<ul>
		<li><a href="prod/circuit"> Pulsed power</a></li>
		<li><a href="prod/magnets"> Magnets</a></li>
		<li><a href="prod/chambers"> Confinement chambers</a></li>
		<li><a href="prod/coda"> CODAC</a></li>
		<li><a href="prod/diagnostics"> Diagnostics </a></li>
		<li><a href="prod/device"> Devices</a></li>
		<li><a href="prod/hpc"> Computers</a></li>
		</ul>
	</div>
	<div class="col-md-6">
		<h2>Services</h2>
		<ul>
		<li><a href="http://woodruffscientific.com/wp/serv/physic">Physics</a></li>
		<li><a href="http://woodruffscientific.com/wp/serv/engineering">Engineering</a></li>
		<li><a href="http://woodruffscientific.com/wp/serv/purchase">Purchase</a></li>
		<li><a href="http://woodruffscientific.com/wp/serv/fabtes">Fabrication / Integration</a></li>
		<li><a href="http://woodruffscientific.com/wp/serv/installation-testing">Installation / Testing</a></li>
		</ul>
	</div>
	<div class="col-md-12 center">
	<h2>Our Mission</h2>
	<p>
Nuclear fusion powers our sun and all the stars in the night sky; if harnessed on earth, it could be the ultimate energy source: safe, clean, and with plentiful fuel. Commercial fusion energy will ultimately provide energy independence, national security, and new jobs in the emerging clean-tech market sector.  For the last decade, Woodruff Scientific has sought to accelerate the development of commercial fusion by tackling critical scientific problems in the <a href="http://science.energy.gov/fes/">US DOE Fusion Energy Sciences program</a>.  What we&#8217;ve built, we can now offer as <a href="prod">products.</a> What we&#8217;ve learned to do, we offer as <a href="serv">services</a>.
	</p>
	</div>
    </div> <!-- /container -->
    </div> <!-- /wrap -->
	<?php
	$footer = file_get_contents('footer.html');
	echo $footer;	
	?>	
  </body>
</html>

