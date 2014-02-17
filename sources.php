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
  		<li class="active">Plasma Sources</li>
	</ol>
	<h1>Plasma Sources</h1>
		  	<ul class="left">
				<li><a href="#">Magnetized</a>
					<ul>
						<li><a href="planarcoax">Planar Coaxial</a></li>
						<li><a href="coaxshort">Coaxial Short</a></li>
						<li><a href="coaxlong">Coaxial long (Marshall Gun)</a></li>
						<li><a href="conicaltheta">Conical Theta-Pinch</a></li>
						<li><a href="radialform">Radial Formation (Electrostatic)</a></li>
					</ul>
				</li>
        			<li><a href="#">Inductive</a>
					<ul>
						<li><a href="radialimplosion">Radial Implosion</a></li>
						<li><a href="radialformation">Radial Formation</a></li>
					</ul>
				</li>
        			<li><a href="gashandling">Gas Handling</a></li>
        			
       			</ul>

	<p>We produce custom magnetized plasma sources designed for specific formation requirements in fusion energy sciences, requiring high field strengths, high currents, high voltages, often UH vacuum compatibility and to withstand large forces. Typical sources we have designed and tested have been used for a range of compact torus configurations. Offerings below can be tailored to specific requirements.</p>
	<p><a class="btn btn-lg btn-primary" href="mailto:sales@woodruffscientific.com" role="button">Get a Quote &raquo;</a></p><br />

    </div> <!-- /container -->
    </div> <!-- /wrap -->

	<?php
	$footer = file_get_contents('footer.html');
	echo $footer;	
	?>	   
  </body>
</html>
