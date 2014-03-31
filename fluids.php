<!DOCTYPE html>
<html lang="en">
  <head>
	<?php
	$head = file_get_contents('header.html');
	echo $head;	
	?>
  <meta name="description" content="">
  <title>Fluids | Woodruff Scientific, Inc.</title>
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
	  <li class="active">Fluids</li>
	</ol>
	<h1>Fluids</h1>
	<p>Our primary tools continue to be opensource R&amp;D codes, so we have picked
OpenFOAM and ElmerFEM.  The benefit of picking these codes is that we
have access to the underlying numerical methods, and can adapt code to
suit our purposes.  They are also really well supported, and have small
communities of scientists extending their applications all the time.</p>

<h3>OpenFOAM</h3>
<p>For more information visit <a href="http://www.openfoam.org/">OpenFOAM's website</a></p>
<p><a href="img/anim.0144.jpg"><img src="img/anim.0144-300x177.jpg" alt="anim.0144" width="300" height="177" /></a><br />
Dam Break: <a href="img/output.avi">DamBreak.avi</a>, <a href="img/output.wmv">DamBreak.wmv</a></p>

<h3>ElmerFEM</h3>
<p>For more information visit <a href="http://www.csc.fi/english/pages/elmer">ElmerFEM's website</a></p>
<p><a class="btn btn-lg btn-primary" href="mailto:sales@woodruffscientific.com" role="button">Get a Quote &raquo;</a></p>

<h3>References</h3>
<blockquote><a href="files/ChiaraMistrangeloSlidesOFW5.pdf">Mistrangelo, Simulation of MHD flows: electric potential
formulation
</blockquote>
<blockquote><a href="files/hcll2Report.pdf">Panchal, Study of liquid metal MHD flows using OpenFOAM
</blockquote>
<blockquote><a href="files/ElisabetMasDeLesValls.pdf">Mas de les Valls, OpenFOAM capabilities for MHD simulation under nuclear fusion technology conditions
</blockquote>



    </div> <!-- /container -->
    </div> <!-- /wrap -->

	<?php
	$footer = file_get_contents('footer.html');
	echo $footer;	
	?>	   
  </body>
</html>
