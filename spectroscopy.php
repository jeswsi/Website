<!DOCTYPE html>
<html lang="en">
  <head>
	<?php
	$head = file_get_contents('header.html');
	echo $head;	
	?>
		<meta name="description" content="Spectroscopic diagnostics for fusion, plasma energy, and physics labs. Useful references for Soft X-ray Diode imaging, bolometers, VUV spectrometers, and Visible spectrometers.">
  <title>Spectroscopic | Woodruff Scientific, Inc.</title>
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
		<li><a href="diagnostics">Diagnostics</a></li>
  		<li class="active">Spectroscopic</li>
	</ol>

	       <ul class="left">
            <li><a href="#soft">Soft X-Ray Diode Imaging</a></li>
            <li><a href="#bol">Bolometer</a></li>
            <li><a href="#vuv">VUV Spectrometer</a></li>
            <li><a href="#vis">Visible Spectrometer</a></li>
            <li><a href="#ids">Ion Doppler Spectrometer</a></li>
          </ul>
	<h1>Spectroscopic</h1>
	<p>Line radiation from the plasma due to bound state transitions of the
	electrons can yield information about the power losses and impurity
	concentrations, and also about the velocities of impurities.  An
	excellent secondary reference summarizing the physics is Hutchinson's
	<a href="http://www.amazon.com/Principles-Plasma-Diagnostics-I-Hutchinson/dp/052167574X">Principles of Plasma Diagnostics 2nd Edition</a>
	</p>

<a id="soft"></a>
	<h3>Soft X-Ray Diode Imaging</h3>
				<blockquote><a href="softxray.html">Soft X-Ray References</a></blockquote>

<a id="bol"></a>
	<h3>Bolometer</h3>
				<blockquote><a href="bolometers.html">Bolometer References</a></blockquote>

<a id="vuv"></a>
	<h3>VUV Spectrometer</h3>
				<blockquote><a href="vuv.html">VUV Spectrometer References</a></blockquote>

<a id="vis"></a>
	<h3>Visible Spectrometer</h3>
				<blockquote><a href="visible.html">Visible Spectrometer References</a></blockquote>

<a id="ids"></a>
	<h3>Ion Doppler Spectrometer</h3>
				<blockquote><a href="doppler.html">Ion Doppler Spectrometer References</a></blockquote>



	<p><a class="btn btn-lg btn-primary" href="mailto: sales@woodruffscientific.com?subject=Spectrometer RFQ&#038;body=How%20many:%0D%0A%0D%0ANumber%20of%20chords:%0D%0A%0D%0AShort%20description%20of%20the%20application:%0D%0A%0D%0APlease%20find%20attached%20a%20sketch/engineering%20drawing%20of%20the%20application.%0D%0A%0D%0AContact(Name/email/phone/fax/etc):%0D%0A%0D%0ANeeded%20by(Date):" role="button">Get a Quote &raquo;</a></p>


    </div> <!-- /container -->
    </div> <!-- /wrap -->

	<?php
	$footer = file_get_contents('footer.html');
	echo $footer;	
	?>	   
  </body>
</html>
