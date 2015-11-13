<!DOCTYPE html>
<html lang="en">
  <head>
	<?php
    $head = file_get_contents('header.html');
    echo $head;
	?>
	<meta name="description" content="Magnetic probes and diagnostics for fusion, plasma energy, and physics labs. Custom sizing, materials, and configurations available. Useful magnetics references.">
  <title>Magnetic Field | Woodruff Scientific, Inc.</title>
  </head>

  <body>
    <div id="wrap">
    <div class="container">

	<?php
	$navbar = file_get_contents('navbar.html');
	echo $navbar;
	?>
	<ol class="breadcrumb">
  		<li><a href="index">Home</a></li>
 	 	<li><a href="products">Products</a></li>
		<li><a href="diagnostics">Diagnostics</a></li>
  		<li class="active">Magnetic Field</li>
	</ol>

	<ul class="left">
		<li><a href="#bdot">Magnetic Field Coils</a></li>
		<li><a href="#rogowski">Rogowski Coils</a></li>
		<li><a href="#array">Linear Array of Magnetic Coils</a></li>
		<li><a href="#calibration">Calibration Jigs</a></li>
	</ul>




	<h1>Magnetic Probes</h1>

		<p>
    For magnetic fusion energy (MFE) systems, measurements of the magnetic
    field and associated current are the primary diagnostic interest. Faraday's
    law states that a time-varying magnetic field, <b>B(t)</b>, will induce an
    electric field, <b>E(t)</b>, in a loop of wire: &nabla;&times;<b>E</b> =
    -d<b>B</b>/dt. For <i>n</i> loops of wire with cross-sectional area,
    <i>A</i>, the resulting electric potential is <i>&phi;(t) = nAdB/dt</i>
    (where <i>B</i> is the component of <b>B</b> along the axis of the loops).
    Measuring the voltage produced by such a coil will therefore give the time-
    variation of <i>B</i>, which after integration (numerical or passive) will
    yield <i>B(t)</i>. Magnetic probes typically comprise many loops of magnet
    wire wound around a plastic form. These coils are commonly mounted around
    the perimeter of an experiment and designed either to measure either the
    slow or fast variations in <i>B</i> (so-called equilibrium coils or
    fluctuation coils). Coils can also be wound to be sensitive to multiple
    orthogonal components of <b>B</b>, measuring all at the same time. A similar
    type of probe called a Rogowski coil measures the time-variation of the
    current passing through it, which is integrated to find <i>I(t)</i>. We have
    engineered various ultra-high vacuum (UHV) compatible magnetic probes for
    various purposes, including single coils and arrays. We have also developed
    Helmholtz coil arrays used to calibrate these coils either in-situ or on a
    bench. A good reference for magnetic probes and other diagnostics is
    <a href="http://www.amazon.com/Principles-Plasma-Diagnostics-I-Hutchinson/dp/052167574X">Hutchinson</a>.
    References for specific applications can be found in
    <a href="magnetics.html">Magnetics References</a>.
    </p>

    When requesting a quote for a magnetic diagnostic, please consider the
    following:
    <ul>
      <li>Expected magnitude of the measured quantity and digitizer dynamic
          range. These determine the minimum and maximum <i>nA</i> of the coil.
          </li>
      <li>Frequency response. What is the frequency (or range of frequencies)
          that need to be measured? This determines the required inductance,
          <i>L</i>, and resistance, <i>R</i>, of the coil.</li>
      <li>Vacuum environment. Is the probe intended to be used in air or vacuum?
          High vacuum (HV, 10<sup>-3</sup> - 10<sup>-9</sup> torr) or ultra-high
          vacuum (UHV, 10<sup>-9</sup> - 10<sup>-12</sup> torr)? This helps us
          determine the materials that can be used for your application.</li>
      <li>Thermal environment. Will the probe experience high heat loads (for
          example, behind first wall tiles) or low heat loads? Will it
          experience thermal cycling? Will it be used at a high or low ambient
          temperature (will the chamber be baked)? This information also places
          restrictions on the materials that can be used.</li>
      <li>Mounting interface. Will the probe be mounted to a vacuum flange, a
          custom mounting structure on the chamber wall, or something else?</li>
      <li>Size constraints. Width of gap behind wall tiles, diameter of
          port through which the coil must be inserted, perturbation to the
          plasma, et cetera.</li>
    </ul>

<a id="bdot"></a>
	<h3>Magnetic Field Coils (B-dot)</h3>
		<div class="col-md-6">
			<p class="center"><a href="files\diagnostics\SingleCoilRender.bmp"><img src="files\diagnostics\SingleCoilRender.bmp"></a><br />
			<a href="files/1MagneticFieldCoil.rar">Download this coil</a> for 3D-Printing (.stp file)</p>
		</div>
		<div class="col-md-6">
			<p class="center"><a href="img/1magneticfieldcoil2.jpg"><img src="img/1magneticfieldcoil2-small.jpg"></a><br /><br />
			</p>
		</div>
    <p><a href="files\diagnostics\Diagnostics-Magnetics-Single.pdf">Magnetic Field Coil Spec Sheet</a></p>
		<p><a class="btn btn-lg btn-primary" href="mailto:sales@woodruffscientific.com?subject=Magnetic field coil RFQ &#038;body=How%20many:%0D%0A%0D%0AFrequency%20response:%0D%0A%0D%0AOD:%0D%0A%0D%0AVacuum%20rating%20(e.g.%20UHV,%20air):%0D%0A%0D%0AHarnessing%20length:%0D%0A%0D%0ACladding%20(e.g.%20BN,%20ss):%0D%0A%0D%0AShort%20description%20of%20the%20application:%0D%0A%0D%0APlease%20find%20attached%20a%20sketch/engineering%20drawing%20of%20the%20application.%0D%0A%0D%0AContact(Name/email/phone/fax/etc):%0D%0A%0D%0ANeeded%20by(Date):">Get a Quote &raquo;</a></p>




<!-- 	--download for CNC milling V1 V2 V3
 -->	<div class="clearfix"></div>
<a id="rogowski"></a>
	<h3>Rogowski Coils</h3>

<!--
--download coil form for 3D printing ID of 10cm, 20cm 30cm
--download coil casing for 3D printing for coil of ID 10cm, etc
 -->

	<div class="col-md-6">
		<p class="center"><a href="files\diagnostics\M1-R-C render of coil behind tile SS case.jpg"><img src="files\diagnostics\M1-R-C render of coil behind tile SS case.jpg"></a><br />
		</p>
	</div>
	<div class="col-md-6">
		<p class="center"><a href="files\diagnostics\M1-R-P full render.jpg"><img src="files\diagnostics\M1-R-P full render.jpg"></a><br />
		</p>
	</div>
	<div class="col-md-6">
		<br />Download Coil Form for CNC Milling: <a href="files/rogowskiform.stp">Coil Form</a>
		<br />Download Coil Case for CNC Milling: <a href="files/rogowskilower.stp">Case (lower)</a>, <a href="files/Rogowskiupper.stp">Case (upper)</a></p>
	</div>
      <p><a href="files\diagnostics\M1-R-C spec sheet.pdf">Rogowski Coil Spec Sheet</a></p>
      <p><a href="files\diagnostics\M1-R-P spec sheet.pdf">Rogowski Coil Probe Spec Sheet</a></p>
      <p><a class="btn btn-lg btn-primary" href="mailto:sales@woodruffscientific.com?subject=Magnetic field coil RFQ &#038;body=How%20many:%0D%0A%0D%0AFrequency%20response:%0D%0A%0D%0AOD:%0D%0A%0D%0AVacuum%20rating%20(e.g.%20UHV,%20air):%0D%0A%0D%0AHarnessing%20length:%0D%0A%0D%0ACladding%20(e.g.%20BN,%20ss):%0D%0A%0D%0AShort%20description%20of%20the%20application:%0D%0A%0D%0APlease%20find%20attached%20a%20sketch/engineering%20drawing%20of%20the%20application.%0D%0A%0D%0AContact(Name/email/phone/fax/etc):%0D%0A%0D%0ANeeded%20by(Date):">Get a Quote &raquo;</a></p>

<!--
--download coil form for CNC milling
--download coil case for CNC milling -->

	<div class="clearfix"></div>

	<a id="array"></a>
	<h3>Linear Array of Magnetic Coils</h3>
	<div class="col-md-6">
		<p class="center"><a href="img/LinearArrays1.jpg"><img src="img/LinearArrays1-small.jpg"></a><br />
		</p>
	</div>
	<div class="col-md-6">
		<p class="center"><a href="img/LinearArrays3.jpg"><img src="img/LinearArrays3-small.jpg"></a><br />
		</p>
	</div>
      <p><a href="files\diagnostics\Diagnostics-Magnetics-Arrays.pdf">Magnetic Coil Array Spec Sheet</a></p>
      <p><a class="btn btn-lg btn-primary" href="mailto:sales@woodruffscientific.com?subject=Magnetic field coil RFQ &#038;body=How%20many:%0D%0A%0D%0AFrequency%20response:%0D%0A%0D%0AOD:%0D%0A%0D%0AVacuum%20rating%20(e.g.%20UHV,%20air):%0D%0A%0D%0AHarnessing%20length:%0D%0A%0D%0ACladding%20(e.g.%20BN,%20ss):%0D%0A%0D%0AShort%20description%20of%20the%20application:%0D%0A%0D%0APlease%20find%20attached%20a%20sketch/engineering%20drawing%20of%20the%20application.%0D%0A%0D%0AContact(Name/email/phone/fax/etc):%0D%0A%0D%0ANeeded%20by(Date):">Get a Quote &raquo;</a></p>


<!-- --download triple coil (Br, Bz, Bt) 5 coil, 10 coil, 15 coil sets for 3D
printing -->
	<div class="clearfix"></div>

	<a id="calibration"></a>
	<h3>Calibration Jigs</h3>

	 <div class="col-md-6">

    <p class="center"><a href="img/HHcoil2.jpg"><img alt="Coil1" src="img/HHcoil2.jpg" width="300" height="129" /></a>
    </p>
  </div>

  <div class="col-md-6">
    <p class="center"><a href="img/HHcoil3.jpg"><img alt="Coil2" src="img/HHcoil3.jpg" width="300" height="129" /></a>
    </p>

  </div>
    <div class="col-md-6">
    <p class="center"><a href="img/HHcoil4.jpg"><img alt="Coil4" src="img/HHcoil4.jpg" width="300" height="129" /></a>
    </p>

  </div>
  <div class="clearfix"></div>
  		<p><a class="btn btn-lg btn-primary" href="mailto:sales@woodruffscientific.com?subject=Magnetic field coil RFQ &#038;body=How%20many:%0D%0A%0D%0AFrequency%20response:%0D%0A%0D%0AOD:%0D%0A%0D%0AVacuum%20rating%20(e.g.%20UHV,%20air):%0D%0A%0D%0AHarnessing%20length:%0D%0A%0D%0ACladding%20(e.g.%20BN,%20ss):%0D%0A%0D%0AShort%20description%20of%20the%20application:%0D%0A%0D%0APlease%20find%20attached%20a%20sketch/engineering%20drawing%20of%20the%20application.%0D%0A%0D%0AContact(Name/email/phone/fax/etc):%0D%0A%0D%0ANeeded%20by(Date):">Get a Quote &raquo;</a></p>

<!-- FIGURES OF CALIBRATION JIGS

--in-situ jig to calibrate coils mounted in a conducting wall at three
frequencies
--bench-top HH coils for calibration of coils. -->



    </div> <!-- /container -->
    </div> <!-- /wrap -->

	<?php
	$footer = file_get_contents('footer.html');
	echo $footer;
	?>
  </body>
</html>
