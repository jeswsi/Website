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
  		<li class="breadcrumb-item"><a href="index">Home</a></li>
  		<li class="breadcrumb-item active">Physics</li>
  </ol>
  
  <div class="row">
  <div class="col-md-3">
  <?php
  $navbar = file_get_contents('physics-catalog-nav.html');
  echo $navbar;
  ?>
  </div>


	<div class="col-md-9">



	<h1>Physics Simulations</h1>

<img src="img/Simulations/3DMHDsimulations.png" width="400">
<img src="img/itersob.jpg" width="300">

</div>
</div><!-- row -->
<div class="clearfix">
  </div>

  <br>

	<p>Since 2005 we have performed simulations using some of the world's fastest supercomputers (using resources at the National Energy Research Scientific Computing Center).  We have also developed R&amp;D codes for specific applications.  We train students to run these large codes in our Scientific Computing Bootcamps.  Our customers for advanced simulations are at National Laboratories, universities and also in the private sector.  We are always keen to take on new simulation challenges, and would be keen to discuss your application.  For proprietary work we use our in-house cluster. We have expertise in problem formulation, pre-processing and post-processing with a small team collectively with over 100 years of experience in physics modeling. For less demanding problems, we also do a lot of analytic work with Matlab, Mathematica and also Excel!</p>

<h4><a href="newsletters/WSI_2pager_Simulations.pdf">Download our Latest Simulations Newsletter</a> (pdf)</h4>
  <p>View our <a href="https://www.researchgate.net/profile/Simon_Woodruff">most recent publications on ResearchGate</a>.</p>

<p><a class="btn btn-lg btn-primary" href="mailto:sales@woodruffscientific.com?subject=Physics Problem&body=Geometry:%0D%0A%0D%0AInitial Conditions:%0D%0A%0D%0ABoundary Conditions:%0D%0A%0D%0ADescription of Problem:%0D%0A%0D%0A" role="button">Email Us &raquo;</a></p>

<p><a href="mailto:sales@woodruffscientific.com">Email us for more information</a>, call one of our scientists at 505 349 5811, or look through our pages on the left for examples of our body of work.</p>

<blockquote>
"From plasma physics to high power microwave devices, Woodruff Scientific not only can
do simulations, but also builds hardware at a reasonable cost and in a short schedule. I
highly recommend Woodruff Scientific for practical and affordable results from PIC codes
such as MAGIC."<br>
Paul Finman, PhDEE<br>
Technical Director<br>
LCF Enterprises<br>
</blockquote>

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
