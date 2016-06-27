<!DOCTYPE html>
<html lang="en">
  <head>
	<?php
	$head = file_get_contents('header.html');
	echo $head;	
	?>
	<meta name="description" content="Engineering design and analysis for fusion, plasma energy, and physics labs. WSI has engineered and built vacuum systems, pulsed power systems, and high field magnets. We can perform basic Thermal and Structural analysis with FEM software.">
  <title>Engineering | Woodruff Scientific, Inc.</title>
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
  		<li class="active">Engineering</li>
	</ol>

          <ul class="left">
            <li><a href="vacuumdesign">Vacuum System Design</a></li>
            <li><a href="pulsedpowerdesign">Pulsed Power Design</a></li>
            <li><a href="magnetdesign">High Field Magnet Design</a></li>
            <li><a href="straylight">Stray Light Analysis</a></li>
            <li><a href="fem">Thermal Analysis</a></li>
            <li><a href="fem">Structural Analysis</a></li>
          </ul>

	<h1>Engineering</h1>
	<p>We have amassed experience drafting new components from a basic idea, working with engineering firms, and with vacuum manufacturers. WSI has engineered and built vacuum systems, pulsed power systems, and high field magnets. We can perform basic Thermal and Structural analysis with FEM software.</p>
	<p>Let us assist with your lab's design and engineering needs.</p>

<p><a class="btn btn-lg btn-primary" href="mailto:sales@woodruffscientific.com" role="button">Get a Quote &raquo;</a></p>


    </div> <!-- /container -->
    </div> <!-- /wrap -->

	<?php
	$footer = file_get_contents('footer.html');
	echo $footer;	
	?>	   
  </body>
</html>
