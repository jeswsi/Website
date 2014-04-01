<!DOCTYPE html>
<html lang="en">
  <head>
	<?php
	$head = file_get_contents('header.html');
	echo $head;	
	?>
  <meta name="description" content="First Wall for vacuum compatible confinement chambers.">
  <title>First Wall | Woodruff Scientific, Inc.</title>
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
  		<li class="active">First Wall</li>
	</ol>
	<h1>First Wall</h1>
	<p>First wall solutions are currently not many in number, since the power
loading on first wall components will be large.  Use of molybdenum is being
planned for use in ITER first wall components, and tungsten in the
divertor region.  The subject is a live area of R&amp;D, which we hope to
weigh in on with a SBIR proposal in collaboration with PPPL.</p>



<p>First wall solutions require many subsystems. WSI has experience designing and constructing <a href="pulsedpower">banks</a>, <a href="magnets">coils</a>, <a href="vacuumboundary">vacuum chambers</a>, <a href="sources#gashandling">gas handling</a>, and <a href="fluids">fluids simulations</a>.</p>	

<p><a class="btn btn-lg btn-primary" href="mailto:sales@woodruffscientific.com" role="button">Get a Quote &raquo;</a></p><br />

<h3>References</h3>
<blockquote><a href="liquidlithium.html">Liquid Lithium First Wall References</blockquote>
<blockquote><a href="files/ChiaraMistrangeloSlidesOFW5.pdf">Mistrangelo, Simulation of MHD flows: electric potential
formulation
</blockquote>
<blockquote><a href="files/MorleyPresentation.pdf">Morley, Magnetohydrodynamic Effects in Liquid Flows</blockquote>


    </div> <!-- /container -->
    </div> <!-- /wrap -->

	<?php
	$footer = file_get_contents('footer.html');
	echo $footer;	
	?>	   
  </body>
</html>
