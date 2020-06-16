<!DOCTYPE html>
<html lang="en">
  <head>
	<?php
	$head = file_get_contents('header.html');
	echo $head;
	?>
	<meta name="description" content="Optical Modeling & Ray-Tracing for fusion, plasma energy, and physics labs.">
  <title>Optical Modeling &amp; Ray-Tracing | Woodruff Scientific, Inc.</title>
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
  		<li class="breadcrumb-item"><a href="index">Home</a></li>
 	 	<li class="breadcrumb-item"><a href="physics">Physics</a></li>
  		<li class="breadcrumb-item active">Optical Modeling &amp; Ray-Tracing</li>
	</ol>




	<h1>Optical Modeling and Ray-Tracing</h1>


     <div class="col-md-6">
    <p><a href="img/iterchamber.png"><img src="img/iterchamber.png" alt="ITER Chamber" width="300"/></a><br/>
    <span class="text-muted">Inside view of ITER chamber</span></p>
  </div>
    <div class="col-md-6">
      <p><a href="img/LT-ITER.png"><img src="img/LT-ITER.png" alt="LT" width="300"/></a><br/>
    <span class="text-muted">Wall Reflections of Plasma inside ITER chamber</span></p>
    </div>

      <p>WSI worked with ITER to analyze the effects of stray light on optical diagnostics. Use of beryllium
   walls meant that wall reflections could be bright enough to influence diagnostics. The ray-tracing software LightTools was used. SOLPS data of ITER scrape off layer was converted to light sources in LightTools, and wall reflectivity properties were modeled.</p>

    <p><a class="btn btn-lg btn-primary" href="mailto:sales@woodruffscientific.com" role="button">Get a Quote &raquo;</a></p>

<div class="col-md-8">
    				<style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;}
.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
.tg .tg-yw4l{vertical-align:top}
</style>
<table class="tg">
  <tr>
    <td class="tg-yw4l"><strong>Software</strong></td>
    <td class="tg-yw4l"><strong>Spec Sheet</strong></td>
    <td class="tg-yw4l"><strong>References</strong></td>
    <th class="tg-yw4l"></th>
  </tr>
  <tr>
    <th class="tg-yw4l">LightTools</th>
    <th class="tg-yw4l"><a href="mailto:sales@woodruffscientific.com?subject=OpticalModeling">Request spec sheet</a></th>
    <th class="tg-yw4l"><a href="https://optics.synopsys.com/lighttools/">LightTools</a></th>
    <th class="tg-yw4l"><a class="btn btn-lg btn-primary" href="mailto:sales@woodruffscientific.com?subject=Optical Modeling Quote" role="button">Get a Quote &raquo;</a></th>
  </tr>
  <tr>
    <th class="tg-yw4l">Optica</th>
    <th class="tg-yw4l"><a href="mailto:sales@woodruffscientific.com?subject=OpticalModeling">Request spec sheet</a></th>
    <th class="tg-yw4l"><a href="http://www.opticasoftware.com/">Optica</a></th>
    <th class="tg-yw4l"><a class="btn btn-lg btn-primary" href="mailto:sales@woodruffscientific.com?subject=Optical Modeling Quote" role="button">Get a Quote &raquo;</a></th>
  </tr>
  <tr>
    <th class="tg-yw4l">Zemax</th>
    <th class="tg-yw4l"><a href="mailto:sales@woodruffscientific.com?subject=OpticalModeling">Request spec sheet</a></th>
    <th class="tg-yw4l"><a href="http://www.zemax.com/">Zemax</a></th>
    <th class="tg-yw4l"><a class="btn btn-lg btn-primary" href="mailto:sales@woodruffscientific.com?subject=Optical Modeling Quote" role="button">Get a Quote &raquo;</a></th>
  </tr>
  </table>





    </div> <!-- /container -->
    </div> <!-- /wrap -->

	<?php
	$footer = file_get_contents('footer.html');
	echo $footer;
	?>
  </body>
</html>
