<!DOCTYPE html>
<html lang="en">
  <head>
	<?php
	$head = file_get_contents('header.html');
	echo $head;	
	?>
  <meta name="description" content="">
  <title>PUBLICATIONS | Woodruff Scientific, Inc.</title>
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
 	 	<li><a href="#">Company</a></li>
  		<li class="active">Publications</li>
	</ol>
	
	<h2>APS 2016 Posters</h2>
	<p>Come checkout some of our research and discoveries! Please view list of posters below:</p>
	<ul>
		<li><a href="http://www.woodruffscientific.com/temp/APS2016/Rivera-APS-2016.pdf">Vacuum Compatibility of Laser-Sintered Metals</a></li>
		<li><a href="http://www.woodruffscientific.com/temp/APS2016/Sieck-APS-2016.pdf">Engineering Design Point for a 1MW Fusion Neutron Source</a></li>
		<li><a href="http://www.woodruffscientific.com/temp/APS2016/Woodruff-APS-2016.pdf">Physics Design Point for a 1MW Fusion Neutron Source</a></li>	
		<li><a href="http://www.woodruffscientific.com/temp/APS2016/Stuber-APS-2016.pdf">Optimized and Automated Design of Plasma Diagnostics for Additive Manufacture</a></li>
		<li><a href="http://www.woodruffscientific.com/temp/APS2016/OBryan-APS-2016.pdf">Numerical Investigation of Design and Operating Parameters on CHI Spheromak Performance</a></li>
		<li><a href="http://www.woodruffscientific.com/temp/APS2016/Quinley-APS-2016.pdf">Additive Manufacture (3D Printing) of Plasma Diagnotic Components and Assemblies for Fusion Experiments</a></li>
	</ul>

    </div> <!-- /container -->
    </div> <!-- /wrap -->

	<?php
	$footer = file_get_contents('footer.html');
	echo $footer;	
	?>	   
  </body>
</html>
