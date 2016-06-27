<!DOCTYPE html>
<html lang="en">
  <head>
	<?php
	$head = file_get_contents('header.html');
	echo $head;	
	?>
	<meta name="description" content="Pulsed power design for fusion, plasma energy, and physics labs. WSI has engineered and built vacuum systems, pulsed power systems, and high field magnets. We can perform basic Thermal and Structural analysis with FEM software.">
  <title>Pulsed Power Design | Woodruff Scientific, Inc.</title>
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
 	 	<li><a href="engineering">Engineering</a></li>

  		<li class="active">Pulsed Power Design</li>
	</ol>


<a id="pulsed"></a>
	<h3>Pulsed Power Design</h3>

	<p>WSI can design custom pulsed power circuits and capacitor banks for your coils or other loads. Browse our <a href="pulsedpower">pulsed power products</a> for example configurations.</p>

    <div class="col-md-6">
    	<p><a href="img/BL480.png"><img src="img/BL480.png" width="300" alt="Capacitor Bank Engineering Drawing"></a></p>
    </div>
    <div class="col-md-6">
		<p>
		<a href="img/stpx_banks.jpg"><img src="img/stpx_banks_small.jpg" alt="STPX Capacitor Banks"></a><br />
		<span class="text-muted">Pulsed banks, dumps and ancil hardware for FAMU STPX.</span></p>
	</div>


    <p><a class="btn btn-lg btn-primary" href="mailto:sales@woodruffscientific.com" role="button">Get a Quote &raquo;</a></p>


    </div> <!-- /container -->
    </div> <!-- /wrap -->

	<?php
	$footer = file_get_contents('footer.html');
	echo $footer;	
	?>	   
  </body>
</html>
