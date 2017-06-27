<!DOCTYPE html>
<html lang="en">
  <head>
	<?php
	$head = file_get_contents('header.html');
	echo $head;	
	?>
	<meta name="description" content="Stray light analysis for fusion, plasma energy, and physics labs. WSI has engineered and built vacuum systems, pulsed power systems, and high field magnets. We can perform basic Thermal and Structural analysis with FEM software.">
  <title>Stray Light Analysis | Woodruff Scientific, Inc.</title>
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
  		<li class="active">Stray Light Analysis</li>
	</ol>



   <div class="col-md-6">
    <p><a href="img/iterchamber.png"><img src="img/iterchamber.png" alt="ITER Chamber" width="300"/></a><br/>
    <span class="text-muted">Inside view of ITER chamber</span></p>
  </div>
    <div class="col-md-6">
      <p><a href="img/LT-ITER.png"><img src="img/LT-ITER.png" alt="LT" width="300"/></a><br/>
    <span class="text-muted">Wall Reflections of Plasma inside ITER chamber</span></p>
    </div>
    

	<h1>Stray Light Analysis</h1>

<div class="col-md-8">
    				<style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;}
.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
.tg .tg-yw4l{vertical-align:top}
</style>
<table class="tg">
  <tr>
    <td class="tg-yw4l"><strong>Product</strong></td>
    <td class="tg-yw4l"><strong>Model Number</strong></td>
    <td class="tg-yw4l"><strong>Spec Sheet</strong></td>
    <td class="tg-yw4l"><strong>References</strong></td>
    <th class="tg-yw4l"></th>
  </tr>
    <tr>
    <th class="tg-yw4l">Stray Light Analysis</th>
    <th class="tg-yw4l"></th>
    <th class="tg-yw4l"><a href="mailto:sales@woodruffscientific.com?subject=Voltage monitors">Request spec sheet</a></th>
    <th class="tg-yw4l"></th>
    <th class="tg-yw4l"><a class="btn btn-lg btn-primary" href="mailto:sales@woodruffscientific.com?subject=Neutral Particle Analyzer Quote" role="button">Get a Quote &raquo;</a></th>
  </tr>
  </table>


	<p>WSI worked with ITER to analyze the effects of stray light on optical diagnostics. Use of beryllium 
	 walls meant that wall reflections could be bright enough to influence diagnostics. The ray-tracing software LightTools was used. SOLPS data of ITER scrape off layer was converted to light sources in LightTools, and wall reflectivity properties were modeled.
	
    

    <p><a class="btn btn-lg btn-primary" href="mailto:sales@woodruffscientific.com" role="button">Get a Quote &raquo;</a></p>


    </div> <!-- /container -->
    </div> <!-- /wrap -->

	<?php
	$footer = file_get_contents('footer.html');
	echo $footer;	
	?>	   
  </body>
</html>
