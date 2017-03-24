<!DOCTYPE html>
<html lang="en">
  <head>
	<?php
	$head = file_get_contents('header.html');
	echo $head;	
	?>
  <meta name="description" content="Systems analysis and costing for fusion systems.">
  <title>Systems Analysis | Woodruff Scientific, Inc.</title>
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
      	  <li><a href="services">Services</a></li>
      	  <li><a href="physics">Physics</a></li>
	  <li class="active">Fusion Systems Code</li>
	</ol>
	
	<h1>Fusion Systems Code</h1>
	<p><a href="img/Simulations/Costing.JPG"><img src="img/Simulations/Costing.JPG" alt="cost" width="350" height="425" ALIGN="Left" Hspace="10"></a></p>
	<p>During the last 5 years, WSI has developed a costing model in collaboration with Decysive Systems and most recently with Bechtel for the costing of most of the major fusion subsystems.  We have worked under contract with ARPA-E to produce the cost analysis for 4 of the ALPHA program fusion concepts.  Report will be released June 1 2017, and otherwise please contact us for more information</p>


 

		<h3>Systems Analysis Papers by Woodruff Scientific</h3>

			
		<p><a href="http://www.sciencedirect.com/science/article/pii/S0920379614005997">Fusion Engineering and Design: Cost sensitivity analysis for a 100 MWe modular power plant and fusion neutron source</a></p>

		<p><a href="http://link.springer.com/article/10.1007/s10894-010-9303-1">Journal of Fusion Energy: Why Compact Tori for Fusion?</a></p>

		<p><a href="http://link.springer.com/article/10.1007%2Fs10894-011-9472-6">Journal of Fusion Energy: Path to Market for Compact Modular Fusion Power Cores</a></p>

		<p><a href="https://www.burningplasma.org/web/ReNeW/whitepapers/5-32%20ThemeIV+CT.pdf">Burning Plasma Org: Harnessing fusion power: how does CT research contribute to this discussion?</a></p>

		<p><a href="http://fire.pppl.gov/FESAC_WP_CT_market_Woodruff.pdf">FESAC: The Path to Market for Compact Modular Fusion Power Cores</a></p>


		<blockquote><a href="costing.html">Costing References</a></blockquote>


    </div> <!-- /container -->
    </div> <!-- /wrap -->

	<?php
	$footer = file_get_contents('footer.html');
	echo $footer;	
	?>	   
  </body>
</html>
