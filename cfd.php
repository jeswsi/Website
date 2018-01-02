<!DOCTYPE html>
<html lang="en">
  <head>
	<?php
	$head = file_get_contents('header.html');
	echo $head;
	?>
  <meta name="description" content="Computational Fluid Dynamics (CFD) Services for scientific labs">
  <title>Computational Fluid Dynamics | Woodruff Scientific, Inc.</title>
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
	  <li class="active">Computational Fluid Dyanmics</li>
	</ol>






	<h1>Computational Fluid Dynamics</h1>


  <p><a href="img/anim.0144.jpg"><img src="img/anim.0144-300x177.jpg" alt="anim.0144" width="300" height="177" /></a><br />
Dam Break: <a href="img/output.avi">DamBreak.avi</a>, <a href="img/output.wmv">DamBreak.wmv</a></p>

  <p>Our primary tools continue to be opensource R&amp;D codes, so we have picked
OpenFOAM and ElmerFEM.  The benefit of picking these codes is that we
have access to the underlying numerical methods, and can adapt code to
suit our purposes.  They are also really well supported, and have small
communities of scientists extending their applications all the time.</p>

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
<tr>
    <th class="tg-yw4l"><a href="#openfoam">OpenFOAM</a></th>
    <th class="tg-yw4l"><a href="mailto:sales@woodruffscientific.com?subject=OpenFOAM">Request spec sheet</a></th>
    <th class="tg-yw4l"><a href="https://openfoam.org/">OpenFOAM Referecnces</a></th>
    <th class="tg-yw4l"><a class="btn btn-lg btn-primary" href="mailto:sales@woodruffscientific.com?subject=OpenFOAM" role="button">Get a Quote &raquo;</a></th>
  </tr>
  <tr>
    <th class="tg-yw4l"><a href="#elmerfem">ElmerFEM</a></th>
    <th class="tg-yw4l"><a href="mailto:sales@woodruffscientific.com?subject=ElmerFEM">Request spec sheet</a></th>
    <th class="tg-yw4l"><a href="https://www.csc.fi/web/elmer">ElmerFEM References</a></th>
    <th class="tg-yw4l"><a class="btn btn-lg btn-primary" href="mailto:sales@woodruffscientific.com?subject=OpenFOAM" role="button">Get a Quote &raquo;</a></th>
  </tr>
</table>





<h3>OpenFOAM</h3>
<a name="openfoam"></a>
<p>The OpenFOAM®  (Open Field Operation and Manipulation) CFD Toolbox is a free, open source CFD software package which has a large user base across most areas of engineering and science, from both commercial and academic organisations.
For more information visit <a href="http://www.openfoam.org/">OpenFOAM's website</a></p>


<h3>ElmerFEM</h3>
<a name="elmerfem"></a>
<p>Elmer is an open source multiphysical simulation software. Elmer includes physical models of fluid dynamics, structural mechanics, electromagnetics, heat transfer and acoustics, for example. These are described by partial differential equations which Elmer solves by the Finite Element Method (FEM). For more information visit <a href="http://www.csc.fi/english/pages/elmer">ElmerFEM's website</a></p>
<p><a class="btn btn-lg btn-primary" href="mailto:sales@woodruffscientific.com?subject=CFD Problem&body=Geometry:%0D%0A%0D%0AInitial Conditions:%0D%0A%0D%0ABoundary Conditions:%0D%0A%0D%0ADescription of Problem:%0D%0A%0D%0A" role="button">Submit Problem &raquo;</a></p>





    </div> <!-- /container -->
    </div> <!-- /wrap -->

	<?php
	$footer = file_get_contents('footer.html');
	echo $footer;
	?>
  </body>
</html>
