<!DOCTYPE html>
<html lang="en">
  <head>
	<?php
	$head = file_get_contents('header.html');
	echo $head;
	?>
  <meta name="description" content="">
  <title>MCNP6 | Woodruff Scientific, Inc.</title>
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
	  <li class="active">MCNP6</li>
  </ol>








	<h1>MCNP6</h1>

    <p><a href="https://mcnp.lanl.gov/">MCNP</a> is a general-purpose Monte Carlo N-Particle code that can be used for neutron, photon, electron, or coupled neutron/photon/electron transport. Specific areas of application include, but are not limited to, radiation protection and dosimetry, radiation shielding, radiography, medical physics, nuclear criticality safety, Detector Design and analysis, nuclear oil well logging, Accelerator target design, Fission and fusion reactor design, decontamination and decommissioning. The code treats an arbitrary three-dimensional configuration of materials in geometric cells bounded by first- and second-degree surfaces and fourth-degree elliptical tori.</p>


  <div>
      <p><a href="img/m.png"><img src="img/m.png" alt="MCNP6" width="300" height="300" /></a><br />
</p>
<p>Thickness of stabilizing plates increased from 2mm to 8mm; 10M particles used
Get 94\% shine through at 2mm; With composite plates (8mm Be, 2-8mm Cu, 2mm W), get less shine through; Stabilizer needs to be latticed for exposure of sample to neutrons.</p>
    </div>

<blockquote><p><a href="https://www.researchgate.net/project/High-Power-Microwave-HPM-Source">View our current High Power Microwave Project on ResearchGate</a></p></blockquote>

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
    <td class="tg-yw4l"><strong>Spec Sheet</strong></td>
    <td class="tg-yw4l"><strong>References</strong></td>
    <th class="tg-yw4l"></th>
  </tr>
    <tr>
    <td class="tg-yw4l">MCNP6</td>
    <td class="tg-yw4l"><a href="mailto:sales@woodruffscientific.com?subject=MCNP6">Request spec sheet</a></td>
    <td class="tg-yw4l"></td>
    <th class="tg-yw4l"><a class="btn btn-lg btn-primary" href="mailto:sales@woodruffscientific.com?subject=MCNP6" role="button">Get a Quote &raquo;</a></th>
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
