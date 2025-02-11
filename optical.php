<!DOCTYPE html>
<html lang="en">
  <head>
	<?php
	$head = file_get_contents('header.html');
	echo $head;
	?>
	<meta name="description" content="Optical Diagnostics for fusion, plasma energy, and physics labs. HeNe Interferometers, CO2 Interferometers, Polarimeters, and more.">
  <title>Refractive-Index Measurements | Woodruff Scientific, Inc.</title>
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
 	 	<li class="breadcrumb-item"><a href="services">Services</a></li>
		<li class="breadcrumb-item"><a href="diagnostics">Diagnostics</a></li>
  		<li class="breadcrumb-item active">Refractive-Index Measurements</li>
	</ol>


 <h1>Refractive-Index Measurements</h1>

    <p>
    The refractive index of a plasma is a robust indicator of the electron
    density. Interferometers are commonly used to take a chord-averaged
    measurement of the refractive index, thereby measuring the density along the
    beam line. An interferometer is favored for its non-perturbing measurement,
    at the expense of point resolution. Interferometers are often deployed in
    sets, sampling several chords to build up profile information for the target
    plasma. Woodruff Scientific provides interferometers in microwave, infrared
    (CO2), and visible (HeNe) wavelengths to meet your specifications for
    sensitivity range and vibration tolerance. Density profile information can
    also be recovered through additional refractive-index diagnostics such as
    reflectometry (in which the beam is reflected by a surface at the cutoff
    density) and refractometry (in which the deflection or spread of the
    transmitted beam is used to infer the density profile). Finally, one can
    also use the difference in refractive index between left and right
    circularly polarized waves in a polarimeter to achieve a chord-averaged
    measurement of the magnetic field component parallel to the beam. An
    excellent reference for refractive index diagnostics is Hutchinson's
    <a href="http://www.amazon.com/Principles-Plasma-Diagnostics-I-Hutchinson/dp/052167574X"
      > Principles of Plasma Diagnostics 2nd Edition</a>.
    </p>

	<h3>HeNe Interferometer</h3>

  <div class="col-md-6">
    <p class="center"><a href="img/diagnostics/R1-HeNe render.jpg"><img src="img/diagnostics/R1-HeNe render.jpg"></a><br /></p>
  </div>

  <div class="clearfix"></div>

  <blockquote>
    <p><a href="files/diagnostics/Diagnostics-Refractive-HeNe.pdf">HeNe Interferometer Spec Sheet</a></p>
  </blockquote>
<!--
--ZEMAX image
--Components for download: mirror mount, beamsplitter mount,
--Other HeNe interferometers -->

  <h3>Microwave Interferometer</h3>

  <div class="col-md-6">
    <p class="center"><a href="img/diagnostics/R1-M render.jpg"><img src="img/diagnostics/R1-M render.jpg"></a><br /></p>
  </div>

  <div class="clearfix"></div>

  <blockquote>
    <p><a href="files/diagnostics/Diagnostics-Refractive-Microwave.pdf">Microwave Interferometer Spec Sheet</a></p>
  </blockquote>

  <h3>Fiber-Coupled Interferometer</h3>

    <p>
      Fiber-coupled interferometers are very flexible and robust systems, often allowing for lines of sight to be quickly changed without the need for optical realignment.
    </p>

  <div class="col-md-6">
    <p class="center"><a href="img/diagnostics/R1-F render.jpg"><img src="img/diagnostics/R1-F render.jpg"></a><br /></p>
  </div>

  <div class="clearfix"></div>

  <blockquote>
    <p><a href="files/diagnostics/R1-F_Fiber-based_interferometer.pdf">Fiber-Coupled Interferometer Spec Sheet</a></p>
  </blockquote>

  <h3>Fiber-Coupled, Two-Color Interferometer</h3>

    <p>
      This two-color system provides vibration compensation in addition to the flexibility and robustness of fiber-coupled systems.
    </p>

  <div class="col-md-6">
    <p class="center"><a href="img/diagnostics/R1-F-2C render.png"><img src="img/diagnostics/R1-F-2C render.png"></a><br /></p>
  </div>

  <div class="clearfix"></div>

  <blockquote>
    <p><a href="files/diagnostics/R1-F-2C_Fiber-based_2-color_interferometer.pdf">Fiber-Coupled, Two-color Interferometer Spec Sheet</a></p>
  </blockquote>

  <h3>CO2 Interferometer</h3>
			<blockquote><a href="CO2.html">CO2 Interferometer References</a></blockquote>

<!-- 	--ZEMAX image
--components for download
--other CO2 interferometers
 -->
	<h3>Polarimeter</h3>
			<blockquote><a href="polarimeters.html">Polarimeter References</a></blockquote>

<!-- 	--ZEMAX image
--components for download
--other polarimeters in the world -->

	<p><a class="btn btn-lg btn-primary" href="mailto:sales@woodruffscientific.com?subject=Optical Diagnostics RFQ &#038;body=How%20many:%0D%0A%0D%0ANumber%20of%20chords:%0D%0A%0D%0AShort%20description%20of%20the%20application:%0D%0A%0D%0APlease%20find%20attached%20a%20sketch/engineering%20drawing%20of%20the%20application.%0D%0A%0D%0AContact(Name/email/phone/fax/etc):%0D%0A%0D%0ANeeded%20by(Date):" role="button">Get a Quote &raquo;</a></p>

	<h3>Optical Mount Components for 3D Printing</h3>
	<p>Over time, we plan to develop a whole range of mechanical components for
use in our diagnostics, passing on cost savings to customers in the
diagnostics.  It is also possible that we can design the entire optical
system as a single monolithic structure to be printed with alignment
built-in.  Check back in the coming months as we add more information
here, and to our <a href="http://www.thingiverse.com/woodruffscientific/collections">thingiverse pages</a>.

	<div class="col-md-6">
      <p><a href="img/mirrormount2.jpg"><img src="img/mirrormount2-small.jpg" alt="3D printed mirror mount" /></a><br />
        </p>
    </div>
    <div class="col-md-6">
      <p><a href="img/mirrormount1.jpg"><img src="img/mirrormount1-small.jpg" alt="3D printed mirror mount" /></a><br />
        </p>
    </div>
    <div class="clearfix"></div>

    <p>Download files ready for 3D-printing: <a href="files/opticalmount.stp">Optical Mount</a>, <a href="files/opticalmount-adjust.stp">Optical Mount Adjust</a>

	<div class="col-md-6">
      <p><a href="img/beamsplittermount2.jpg"><img src="img/beamsplittermount2-small.jpg" alt="3D printed beam splitter mount" /></a><br />
        </p>
    </div>
    <div class="col-md-6">
      <p><a href="img/beamsplittermount3.jpg"><img src="img/beamsplittermount3-small.jpg" alt="3D printed beam splitter mount" /></a><br />
        </p>
    </div>
    <div class="clearfix"></div>

    <p>Download files ready for 3D-printing: <a href="files/beamsplittermount.stp">Beam splitter Mount (for 40mm cube beam splitter)</a></p>

	<div class="col-md-6">
      <p><a href="img/lasermount4.jpg"><img src="img/lasermount4-small.jpg" alt="3D printed laser mount" /></a><br />
        </p>
    </div>
    <div class="col-md-6">
      <p><a href="img/lasermount5.jpg"><img src="img/lasermount5-small.jpg" alt="3D printed laser mount" /></a><br />
        </p>
    </div>

    <div class="clearfix"></div>
    <p>Download files ready for 3D-printing: <a href="files/lasermount.stp">Laser Mount (uses 1/4 20 nuts and screws)</a></p>
    </div> <!-- /container -->
    </div> <!-- /wrap -->

	<?php
	$footer = file_get_contents('footer.html');
	echo $footer;
	?>
  </body>
</html>
