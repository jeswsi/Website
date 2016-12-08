<!DOCTYPE html>
<html lang="en">
  <head>
	<?php
	$head = file_get_contents('header.html');
	echo $head;	
	?>
  <meta name="description" content="Physics analysis and computational physics which  WSI can provide for all stages of fusion, plasma energy, and physics labs.">
  <title>Physics | Woodruff Scientific, Inc.</title>
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
  		<li class="active">Physics</li>
	</ol>

          <ul class="left">
            <li><a href="equilibrium">Euilibrium, Stability & Transport</a></li>
            <li><a href="mhd">3D Resistive MHD</a></li>
            <li><a href="cfd">Computational Fluid Dynamics</a></li>
            <li><a href="systems">Fusion Systems Code</a></li>
            <li><a href="magnetdesign">High Field Magnet Design</a></li>
            <li><a href="straylight">Stray Light Analysis</a></li>
            <li><a href="fem">Thermal/Structural Analysis</a></li>
          </ul>

	<h1>Physics</h1>
	<p>We can provide equilibrium, time-dependent MHD simulations for most Magnetic Fusion Energy (MFE) systems, using various state-of-the-art numerical models. Accounts are available on our local cluster for pre-production runs (up to 32 processors). Support for compilation, pre-, and post-processing offered. We also run various FEM fluid codes and have a broad range of circuit modeling capabilities. Use our expertise to get the most out of your simulations.</p>

<p><a class="btn btn-lg btn-primary" href="mailto:sales@woodruffscientific.com?subject=Physics Problem&body=Geometry:%0D%0A%0D%0AInitial Conditions:%0D%0A%0D%0ABoundary Conditions:%0D%0A%0D%0ADescription of Problem:%0D%0A%0D%0A" role="button">Submit Problem &raquo;</a></p>

  <div class="clearfix"></div>
<!--
<a id="equil"></a>
    <h3>Equilibrium / Stability</h3>
    <div class="col-md-6">
      <p><a href="img/itersob.jpg"><img src="img/itersob-300x228.jpg" alt="itersob" width="300" height="228" /></a><br />
        ITER</p>
    </div>
    <div class="col-md-6">
      <p><a href="img/nstx.jpg"><img src="img/nstx-300x244.jpg" alt="nstx" width="300" height="244"  /></a><br />
        NSTX</p>
    </div>
    <div class="col-md-6">
      <p><a href="img/diiid.jpg"><img src="img/diiid-300x255.jpg" alt="diiid" height="244" /></a><br />
        DIIID</p>
    </div>
    <div class="col-md-6">
      <p><a href="img/kstar.jpg"><img src="img/kstar-300x228.jpg" alt="kstar" height="244"/></a><br />
        KSTAR</p>
    </div>
    <div class="col-md-6">
      <p><a href="img/LTX.png"><img src="img/LTX-300x244.png" alt="LTX" height="233" /></a><br />
        LTX</p>
    </div>
    <div class="col-md-6">
      <p><a href="img/sspx.jpg"><img src="img/sspx-300x233.jpg" alt="sspx" width="300" height="233" /></a>
        <br />SSPX</p>
    </div>
    <div class="col-md-6">
      <p><a href="img/stpx.jpg"><img src="img/stpx-300x222.jpg" alt="stpx" width="300" height="222" /></a><br />STPX</p>
    </div>
  <div class="clearfix"></div>

<a id="rmhd"></a>
    <h3>Resistive MHD</h3>
    <div class="col-md-6">
      <p><a href="img/iter.png"><img src="img/iter-300x184.png" alt="iter" width="300" height="184" /></a><br />
ITER</p>
    </div>
    <div class="col-md-6">
      <p><a href="img/diiid.png"><img src="img/diiid-300x185.png" alt="diiid" width="300" height="185" /></a><br />
DIII-D</p>
    </div>
    <div class="col-md-6">
      <p><a href="img/ltx.png"><img src="img/ltx-300x179.png" alt="ltx" width="300" height="179" /></a><br />
Small tokamaks</p>
    </div>
    <div class="col-md-6">
      <p><a href="img/SSPX.jpg"><img src="img/SSPX-300x187.jpg" alt="SSPX" width="300" height="187" /></a><br />
Spheromaks</p>
    </div>
    <div class="col-md-6">
      <p><a href="img/frc.png"><img src="img/frc-300x182.png" alt="frc" width="300" height="182" /></a><br />
FRCs</p>
    </div>
    <div class="col-md-6">
      <p><a href="img/stpx.png"><img src="img/stpx-300x158.png" alt="stpx" width="300" height="158" /></a><br />
STPX</p>
    </div>
  <div class="clearfix"></div>

<a id="hydro"></a>
    <h3>Hydrodynamics</h3>
<a href="img/anim.0144.jpg"><img src="img/anim.0144-300x177.jpg" alt="anim.0144" width="300" height="177" /></a><br />
Dam Break: <a href="img/output.avi">DamBreak.avi</a>, <a href="img/output.wmv">DamBreak.wmv</a></p>

<a id="multi"></a>
    <h3>Multiphysics</h3>
<a href="img/screenshot.png"><img src="img/screenshot-300x185.png" alt="screenshot" width="300" height="185" /></a></p>
<p>Raleigh instablitiy: <a href="img/raleigh.avi">Raleigh.avi</a>, <a href="img/raleigh.wmv">Raleigh.wmv</a></p>

<a id="electro"></a>
    <h3>Electrostatics</h3>

    <a href="img/COAXTEST00.png"><img src="img/COAXTEST00-300x190.png" alt="COAXTEST00" width="300" height="190" /></a></p>

<a id="rf"></a>
    <h3>RF</h3>
    <p><a href="img/QWAVE00.png"><img src="img/QWAVE00-300x190.png" alt="QWAVE00" width="300" height="190" class="aligncenter size-medium wp-image-2068" /></a></p>

<a id="systems"></a>
    <h3>Systems Analysis</h3>


<a id="hpc"></a>
    <h3>Pre-production HPC</h3>

<p><a class="btn btn-lg btn-primary" href="mailto:sales@woodruffscientific.com" role="button">Get a Quote &raquo;</a></p>
-->
    </div> <!-- /container -->
    </div> <!-- /wrap -->

	<?php
	$footer = file_get_contents('footer.html');
	echo $footer;	
	?>	   
  </body>
</html>
