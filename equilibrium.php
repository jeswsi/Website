<!DOCTYPE html>
<html lang="en">
  <head>
	<?php
	$head = file_get_contents('header.html');
	echo $head;
	?>
  <meta name="description" content="">
  <title>Equilibrium | Woodruff Scientific, Inc.</title>
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
	<li class="breadcrumb-item active">Equilibrium</li>
	</ol>


	<h1>Equilibrium</h1>


    <p>Several tools are in use at WSI for exploring equilibria in magnetic
fusion systems.  Primarily we use CORSICA for most of the major systems
under study, however sometimes it is easier to set up an initial
condition for MHD simulations with NIMEQ.  For the development of new
magnetic configurations (say we are designing a tokamak from the ground
up), then we use both FIESTA and CORSICA at the same time, in part to
give a check of the configuration, and in part because FIESTA is so easy
to use.  We also got involved with other equilibrium solvers over time,
so have a small library of Matlab and FORTAN based models (such as
Leuers EQLFE) which come in handy occasionally when coding up something
straightforward.</p>


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
  </tr>
  <tr>
    <th class="tg-yw4l"><a href="#corsica">CORSICA</a></th>
    <th class="tg-yw4l"><a href="mailto:sales@woodruffscientific.com?subject=CORSICA">Request spec sheet</a></th>
    <th class="tg-yw4l"><a href="http://woodruffscientific.com/corsica.html">CORSICA</a></th>
    <th class="tg-yw4l"><a class="btn btn-lg btn-primary" href="mailto:sales@woodruffscientific.com?subject=CORSICA" role="button">Get a Quote &raquo;</a></th>
  </tr>
  <tr>
    <th class="tg-yw4l"><a href="#DCON">DCON</a></th>
    <th class="tg-yw4l"><a href="mailto:sales@woodruffscientific.com?subject=DCON">Request spec sheet</a></th>
    <th class="tg-yw4l"><a href="http://aip.scitation.org/doi/abs/10.1063/1.4958328?journalCode=php">Glasser 2016</a></th>
    <th class="tg-yw4l"><a class="btn btn-lg btn-primary" href="mailto:sales@woodruffscientific.com?subject=DCON" role="button">Get a Quote &raquo;</a></th>
  </tr>
  <tr>
    <th class="tg-yw4l"><a href="#fiesta">Fiesta</a></th>
    <th class="tg-yw4l"><a href="mailto:sales@woodruffscientific.com?subject=Fiesta">Request spec sheet</a></th>
    <th class="tg-yw4l"></th>
    <th class="tg-yw4l"><a class="btn btn-lg btn-primary" href="mailto:sales@woodruffscientific.com?subject=Fiesta" role="button">Get a Quote &raquo;</a></th>
  </tr>
  <tr>
    <th class="tg-yw4l"><a href="#NIMEQ">NIMEQ</a></th>
    <th class="tg-yw4l"><a href="mailto:sales@woodruffscientific.com?subject=NIMEQ">Request spec sheet</a></th>
    <th class="tg-yw4l"><a href="http://woodruffscientific.com/files/ech_aps08_poster.pdf">Poster</a></th>
    <th class="tg-yw4l"><a class="btn btn-lg btn-primary" href="mailto:sales@woodruffscientific.com?subject=NIMEQ" role="button">Get a Quote &raquo;</a></th>
  </tr>
  <tr>
    <th class="tg-yw4l"><a href="#EQLFE">EQLFE</a></th>
    <th class="tg-yw4l"><a href="mailto:sales@woodruffscientific.com?subject=EQLFE">Request spec sheet</a></th>
    <th class="tg-yw4l"></th>
    <th class="tg-yw4l"><a class="btn btn-lg btn-primary" href="mailto:sales@woodruffscientific.com?subject=EQLFE" role="button">Get a Quote &raquo;</a></th>
  </tr>
</table>


<a name="corsica"></a>
<h3>CORSICA</h3>
<p>The LLNL CORSICA code provides a comprehensive predictive capability for
axisymmetric toroidal plasmas.  It has been applied successfully to many
tokamaks, to the SSPX spheromak, and to the reversed-field pinches MST
and RFX.  At the heart of CORSICA is a 1.5-D, time-dependent plasma
simulation code which solves the Grad-Hogan problem: self-consistent
evolution of free-boundary plasma equilibria and internal profiles,
including external conductors and magnetic diffusion, with a variety of
available transport models.
</p>
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
   <blockquote><a href="wiki">CORSICA Wiki</a></blockquote>
  <blockquote><a href="corsica.html">CORSICA References</a>
</blockquote>

<p><a class="btn btn-lg btn-primary" href="mailto:sales@woodruffscientific.com?subject=CORSICA Equilibrium Problem&body=Deadstart? Please submit basic parameters (R, a, Ip, etc):%0D%0A%0D%0AEFIT start? Please attach EFIT file:%0D%0A%0D%0APlease describe problem:%0D%0A%0D%0A" role="button">Submit Problem &raquo;</a></p>


<a name="DCON"></a>
<h3>DCON</h3>
<p> We examine the stability of plasmas with the DCON code (A. H. Glasser Physics of Plasmas 23, 072505 (2016) ).  Shown are: left) Geometry variation for the tilt stability study and right) energies computed by DCON, showing a transition to stable at 14cm. DCON finds all modes stable for nn = 1 up to a stabilizing plate height of 14cm.</p>


 <div class="col-md-12">
      <p><a href="img/Simulations/DCONfig1.png"><img src="img/Simulations/DCONfig1.png" alt="itersob" width="300" height="228" /></a><br />
        DCON</p>
    </div>

<p><a class="btn btn-lg btn-primary" href="mailto:sales@woodruffscientific.com?subject=CORSICA Equilibrium Problem&body=Deadstart? Please submit basic parameters (R, a, Ip, etc):%0D%0A%0D%0AEFIT start? Please attach EFIT file:%0D%0A%0D%0APlease describe problem:%0D%0A%0D%0A" role="button">Submit Problem &raquo;</a></p>


<a name="fiesta"></a>
<h3>Fiesta</h3>
<p>Fiesta started life as a simple forward equilibrium solver, but since
then has been expanded into a toolbox for dealing with many equilibrium
related problems. It can do the forward problem with a range of control
methods, as well as the inverse (efit) problem, also with considerable
flexibility. Once an equilibrium has been calculated, there are
extensive facilities for calculating things like the q profile, global
quantities (beta, li etc), signals from a range of sensors, field line
following, and so on. Extra facilities now include the CRPP RZIp
algorithm for control system design, a time domain model for the passive
structure, and a full time domain plasma model is under development. It
is also fairly simple to link up with the vector3/magint package to
calculate error fields and such like.</p>
<p><a href="img/fiesta.png"><img src="img/fiesta.png"></a></p>
<p><a class="btn btn-lg btn-primary" href="mailto:sales@woodruffscientific.com?subject=Fiesta Equilibrium Problem&body=Deadstart? Please submit basic parameters (R, a, Ip, etc):%0D%0A%0D%0AEFIT start? Please attach EFIT file:%0D%0A%0D%0APlease describe problem:%0D%0A%0D%0A" role="button">Submit Problem &raquo;</a></p>

<a name="NIMEQ"></a>
<h3>NIMEQ</h3>
<p>A Grad-Shafranov equilibrium solver is developed within the NIMROD
framework to create plasma profiles for realistic geometry. The
traditional Grad- Shafranov operator is converted to a pure divergence
allowing the use of standard regularity conditions for the quantity
Psi/R^2 in simply connected domains. The resulting equation is solved in
the weak form using a finite element representation. A Picard scheme is
used to advance the nonlinear iteration.</p>
<blockquote><a href="files/ech_aps08_poster.pdf">Download Eric Howell's APS Presentation on NIMEQ (pdf)</a></blockquote>
<p><a class="btn btn-lg btn-primary" href="mailto:sales@woodruffscientific.com?subject=NIMEQ Equilibrium Problem&body=Deadstart? Please submit basic parameters (R, a, Ip, etc):%0D%0A%0D%0AEFIT start? Please attach EFIT file:%0D%0A%0D%0APlease describe problem:%0D%0A%0D%0A" role="button">Submit Problem &raquo;</a></p>

<a name="EQLFE"></a>
<h3>EQLFE</h3>
<p>EQLFE is a set of Matlab scripts to solve the Grad-Shafranov equation
for compact torus (CT, no hole through the middle) plasmas, written by
Jim Leuer and Mike Schaffer at GA. The equations (essentially their
signs) are written for a conventional right-handed cylindrical
coordinate system (R, toroidal angle, Z).  Units are SI (mksA). The
magnetic separatrix is free  and is found self-consistently by
iteration. Pressure and poloidal current (B_toroidal) profiles can be
specified with some degree of flexibility. FRCs, spheromaks, mixtures,
doublets and other CT configurations can be made at present. The user
can write and use custom profile routines.</p>
<p><a class="btn btn-lg btn-primary" href="mailto:sales@woodruffscientific.com?subject=EQLFE Equilibrium Problem&body=Deadstart? Please submit basic parameters (R, a, Ip, etc):%0D%0A%0D%0AEFIT start? Please attach EFIT file:%0D%0A%0D%0APlease describe problem:%0D%0A%0D%0A" role="button">Submit Problem &raquo;</a></p>


    </div> <!-- /container -->
    </div> <!-- /wrap -->

	<?php
	$footer = file_get_contents('footer.html');
	echo $footer;
	?>
  </body>
</html>
