<!DOCTYPE html>
<html lang="en">
  <head>
	<?php $head = file_get_contents('header.html'); echo $head;	?>
	<meta name="description" content="Bank Design Points">
  <title>Bank Design Points | Woodruff Scientific, Inc.</title>
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
  		<li class="active">Bank Design Points</li>
	</ol>


	<h1>Bank Design Points</h1>

				<ul class="left">
							<li><a href="pdf/Charge_spec_Rev2A.pdf">Specification for the Charge Supplies Capacitor Charge/Discharge Power Supply (CCDPS) for FLARE</a></li>
							<li><a href="pdf/DAQ_spec_Rev1A.pdf">Specification for the CCDPS DAQ/Control Capacitor Charge/Discharge Power Supply (CCDPS) for FLARE</a></li>
							<li><a href="pdf/DC_spec_Rev2A.pdf">Specification for the Driver Coil Modules Capacitor Charge/Discharge Power Supply (CCDPS) for FLARE</a></li>
							<li><a href="pdf/EF_spec_day1_Rev1A.pdf">Specification for the External Field Bank Module DAY 1 Capacitor Charge/Discharge Power Supply (CCDPS) for FLARE</a></li>
							<li><a href="pdf/EF_spec_Rev2A.pdf">Specification for the External Field Bank Module Capacitor Charge/Discharge Power Supply (CCDPS) for FLARE</a></li>
							<li><a href="pdf/GF_spec_day1_Rev1A">Specification for the Guide Field Bank Module DAY 1 Capacitor Charge/Discharge Power Supply (CCDPS) for FLARE</a></li>
							<li><a href="pdf/GF_spec_Rev2A">Specification for the Guide Field Bank Modules Capacitor Charge/Discharge Power Supply (CCDPS) for FLARE</a></li>
							<li><a href="pdf/OH_spec_Rev2A.pdf">Specification for the Ohmic Heating Module Capacitor Charge/Discharge Power Supply (CCDPS) for FLARE</a></li>
							<li><a href="pdf/PF_spec_day1_Rev1A.pdf">Specification for the Poloidal Field Bank Modules DAY 1 Capacitor Charge/Discharge Power Supply (CCDPS) for FLARE</a></li>
							<li><a href="pdf/PF_spec_Rev3A.pdf">Specification for the Poloidal Field Bank Modules Capacitor Charge/Discharge Power Supply (CCDPS) for FLARE</a></li>
							<li><a href="pdf/TF_Modelsheet.pdf">TF Modelsheet</a></li>
							<li><a href="pdf/TF_spec_day1_Rev1A.pdf">Specification for the Toroidal Field Bank Modules DAY 1 Capacitor Charge/Discharge Power Supply (CCDPS) for FLARE</a></li>
							<li><a href="pdf/TF_spec_Rev2A.pdf">Specification for the Toroidal Field Bank Modules Capacitor Charge/Discharge Power Supply (CCDPS) for FLARE</a></li>
							<li><a href="pdf/IEEE Poster 2016.pdf">IEEE Poster 2016</a></li>
				</ul>
     

  

	<p>Need help with your bank design points? WSI can get your lab up and running.</p>
	<p><a class="btn btn-lg btn-primary" href="mailto:sales@woodruffscientific.com" role="button">Get a Quote &raquo;</a></p>



    </div> <!-- /container -->
    </div> <!-- /wrap -->

	<?php
	$footer = file_get_contents('footer.html');
	echo $footer;	
	?>	   
  </body>
</html>
