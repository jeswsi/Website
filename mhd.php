<!DOCTYPE html>
<html lang="en">
  <head>
	<?php
	$head = file_get_contents('header.html');
	echo $head;
	?>
  <meta name="description" content="">
  <title>MHD | Woodruff Scientific, Inc.</title>
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
	  <li class="breadcrumb-item active">MHD</li>
  </ol>


	<h1>MHD</h1>

  <p>Our main tools for MHD simulations are NIMROD, HiFi and to a lesser
extent BOUT++. We have served several contracts with the NIMROD code,
and we are exploring the use of HiFi for 3D geometries, particularly for
the W7X stellarator. BOUT++ is running, and cross-code verification
activities are planned.  We added OpenFOAM recently to the list of MHD
code we run, primarily because of interest in incompressible MHD for
fluid flows in blankets.  BOUT++ is written with C++, whereas NIMROD and
HiFi are written in FORTRAN.</p>

  <style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;}
.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
.tg .tg-yw4l{vertical-align:top}
</style>
<table class="tg">
  <tr>
    <td class="tg-yw4l"><strong>Products</strong></td>
    <td class="tg-yw4l"><strong>Spec Sheet</strong></td>
    <td class="tg-yw4l"><strong>References</strong></td>
    <th class="tg-yw4l"></th>
<tr>
    <th class="tg-yw4l"><a href="#nimrod">NIMROD</a></th>
    <th class="tg-yw4l"><a href="mailto:sales@woodruffscientific.com?subject=NIMROD">Request spec sheet</a></th>
    <th class="tg-yw4l"><a href="https://nimrodteam.org/index.html">NIMROD References</a></th>
    <th class="tg-yw4l"><a class="btn btn-lg btn-primary" href="mailto:sales@woodruffscientific.com?subject=NIMROD" role="button">Get a Quote &raquo;</a></th>
  </tr>
  <tr>
    <th class="tg-yw4l"><a href="#hifi">HiFi</a></th>
    <th class="tg-yw4l"><a href="mailto:sales@woodruffscientific.com?subject=HiFi">Request spec sheet</a></th>
    <th class="tg-yw4l"><a href="http://www.woodruffscientific.com/wiki/doku.php?id=hifi">HiFi References</a></th>
    <th class="tg-yw4l"><a class="btn btn-lg btn-primary" href="mailto:sales@woodruffscientific.com?subject=HiFi" role="button">Get a Quote &raquo;</a></th>
  </tr>
  <tr>
    <th class="tg-yw4l"><a href="#bout">BOUT++</a></th>
    <th class="tg-yw4l"><a href="mailto:sales@woodruffscientific.com?subject=BOUT++">Request spec sheet</a></th>
    <th class="tg-yw4l"><a href="http://www-users.york.ac.uk/~bd512/bout/">BOUT++ References</a></th>
    <th class="tg-yw4l"><a class="btn btn-lg btn-primary" href="mailto:sales@woodruffscientific.com?subject=BOUT++" role="button">Get a Quote &raquo;</a></th>
  </tr>
  <tr>
    <th class="tg-yw4l"><a href="#openfoam">OpenFOAM</a></th>
    <th class="tg-yw4l"><a href="mailto:sales@woodruffscientific.com?subject=OpenFOAM">Request spec sheet</a></th>
    <th class="tg-yw4l"><a href="https://openfoam.org/">OpenFOAM References</a></th>
    <th class="tg-yw4l"><a class="btn btn-lg btn-primary" href="mailto:sales@woodruffscientific.com?subject=OpenFOAM" role="button">Get a Quote &raquo;</a></th>
  </tr>
</table>





<a name="nimrod"></a>
  <h3>NIMROD</h3>
  <p> Spectral finite element discretization in two dimensions,
    Finite Fourier series in the third dimension,
    Semi-implicit and implicit temporal discretization for the range of temporal scales found in fusion experiments,
    Simulation particles for kinetic effects from a minority species of
    energetic ions, and Integro-differential methods for kinetic effects from
    free-streaming.</p>
  <p>
   For more information on the code, visit the <a href="https://nimrodteam.org/index.html">NIMROD Team website.</a>
  </p>


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


<ul>
  <li>Movies of <a href="http://www.woodruffscientific.com/temp/APS2015/APSMovies/">spheromaks compressing</a></li>
  <li>Movies of <a href="http://www.woodruffscientific.com/temp/APS2016/Movies/">spheromaks accelerating and compressing</a></li>
  <li>Movies of <a href="http://www.woodruffscientific.com/temp/frcs/">field reversed configurations</a></li>
  <li>Movies of <a href="http://www.woodruffscientific.com/temp/ITER/">ITER undergoing violent VDE event</a></li>
</ul>


<p> 3D resistive MHD code NIMROD provides insight into the ARPA-E supported plasma compression experiment at Swarthmore college.  Shown are contour plots of B_toroidal and density at 5 time points for a compact torus that is peristaltically accelerated by a compression coil.  </p>

<div class="col-md-12">
      <p><a href="img/Simulations/3DMHDsimulations.png"><img src="img/Simulations/3DMHDsimulations.png" alt="stpx" width="600" height="158" /></a><br/></p>
    </div>

<p></p>

<p><a class="btn btn-lg btn-primary" href="mailto:sales@woodruffscientific.com?subject=Nimrod Physics Problem&body=Geometry:%0D%0A%0D%0AInitial Conditions:%0D%0A%0D%0ABoundary Conditions:%0D%0A%0D%0ADescription of Problem:%0D%0A%0D%0A" role="button">Submit Problem &raquo;</a></p>

<a name="hifi"></a>
<h3>HiFi</h3>
<p>
 The distinguishing capabilities of the HiFi code include adaptive
spectral element spatial representation with flexible 3D geometry,
highly parallelizable implicit time advance, and general flux-source
form of the partial differential equations and boundary conditions that
can be implemented in its framework. Early algorithm development and
extensive verification studies of the two-dimensional version of the
code have been previously described [A.H. Glasser &amp; X.Z. Tang, Comp.
Phys. Comm., 164 (2004); V.S. Lukin, Ph.D. thesis, Princeton University
(2008)]. </p>
<p>For more information see <a href="http://hifi-framework.webnode.com/hifi-framework/">HiFi's website</a></p>
<p><a class="btn btn-lg btn-primary" href="mailto:sales@woodruffscientific.com?subject=HiFi Physics Problem&body=Geometry:%0D%0A%0D%0AInitial Conditions:%0D%0A%0D%0ABoundary Conditions:%0D%0A%0D%0ADescription of Problem:%0D%0A%0D%0A" role="button">Submit Problem &raquo;</a></p>

<a name="bout"></a>
<h3>BOUT++</h3>
<p>BOUT++ is a 3D plasma fluid simulation code which has been developed at
York in collaboration with the MFE group at LLNL and the MCS division at
ANL. Key features are:
<ul>
  <li>Finite difference in non-orthogonal coordinate systems. Can handle
complicated topologies such as the x-point region in tokamaks</li>
  <li>Written in C++ in a modular way. One section of the code (e.g.
differencing methods, or output format) can be changed with minimal
alterations to the rest of the code</li>
  <li>Can solve an arbitrary number of scalar and vector fluid equations</li>
  <li>Range of time integration schemes available, including fully
implicit (BDF, backwards Euler, Crank-Nicholson,...) and explicit
schemes (Euler, RK4, Karniadakis, Adams ...), which can be chosen at
run-time based on input options</li>
  <li>High-order differencing schemes are implemented, including a
3rd-order WENO scheme for advection and MUSCL schemes. These result in
lower numerical dissipation and better handling of shocks. These can
also be changed at run-time.</li>
</ul>
</p>
<p>For more information see <a href="http://www-users.york.ac.uk/~bd512/bout/">Ben Dudson's pages</a></p>
<p><a class="btn btn-lg btn-primary" href="mailto:sales@woodruffscientific.com?subject=BOUT Physics Problem&body=Geometry:%0D%0A%0D%0AInitial Conditions:%0D%0A%0D%0ABoundary Conditions:%0D%0A%0D%0ADescription of Problem:%0D%0A%0D%0A" role="button">Submit Problem &raquo;</a></p>

<a name="openfoam"></a>
<h3>OpenFOAM</h3>
<p>The OpenFOAM®  (Open Field Operation and Manipulation) CFD Toolbox is a free, open source CFD software package which has a large user base across most areas of engineering and science, from both commercial and academic organisations. The package includes an MHD solver: mhdFoam</p>
<p>The mhdFoam solver is currently an incompressible magnetohydrodynamic
equation solver. It solves the coupled Maxwell-Navier-Stokes equations
for an incompressible fluid. The fluid electrical conductivity is
presumed constant.</p>
<p>For more information visit <a href="http://www.openfoam.org/">OpenFOAM's website</a></p>

<p class="center"><a href="img/plot_vs_reference.png"><img src="img/plot_vs_reference.png" width="300"></a> <a href="img/shercliff.png"><img src="img/shercliff.png" width="300"></a><br />
Velocity of conducting fluids in pipe under transverse magnetic field (Shercliff), OpenFoam solution and <a href="https://code.google.com/p/mhdflow/source/browse/shercliff.m">analytical solution</a></p>
<p><a class="btn btn-lg btn-primary" href="mailto:sales@woodruffscientific.com?subject=OpenFOAM Physics Problem&body=Geometry:%0D%0A%0D%0AInitial Conditions:%0D%0A%0D%0ABoundary Conditions:%0D%0A%0D%0ADescription of Problem:%0D%0A%0D%0A" role="button">Submit Problem &raquo;</a></p>

<blockquote><a href="files/ChiaraMistrangeloSlidesOFW5.pdf">Mistrangelo, Simulation of MHD flows: electric potential
formulation</a>
</blockquote>
<blockquote><a href="files/hcll2Report.pdf">Panchal, Study of liquid metal MHD flows using OpenFOAM</a>
</blockquote>
<blockquote><a href="files/ElisabetMasDeLesValls.pdf">Mas de les Valls, OpenFOAM capabilities for MHD simulation under nuclear fusion technology conditions</a>
</blockquote>





  </div> <!-- /container -->
    </div> <!-- /wrap -->

	<?php
	$footer = file_get_contents('footer.html');
	echo $footer;
	?>
  </body>
</html>
