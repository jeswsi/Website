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

			<div class="col-md-12">
				<ul class="left">
					<h4>Capacitor Charge/Discharge Power Supply (CCDPS) for FLARE:</h4>
							<li><a href="pdf/bankdesignpoints/Charge_spec_Rev2A.pdf">Specification for the Charge Supplies</a></li>
							<li><a href="pdf/bankdesignpoints/DAQ_spec_Rev1A.pdf">Specification for the CCDPS DAQ/Control</a></li>
							<li><a href="pdf/bankdesignpoints/DC_spec_Rev2A.pdf">Specification for the Driver Coil Modules</a></li>
							<li><a href="pdf/bankdesignpoints/EF_spec_day1_Rev1A.pdf">Specification for the External Field Bank Module DAY 1</a></li>
							<li><a href="pdf/bankdesignpoints/EF_spec_Rev2A.pdf">Specification for the External Field Bank Module</a></li>
							<li><a href="pdf/bankdesignpoints/GF_spec_day1_Rev1A">Specification for the Guide Field Bank Module DAY 1</a></li>
							<li><a href="pdf/bankdesignpoints/GF_spec_Rev2A">Specification for the Guide Field Bank Modules</a></li>
							<li><a href="pdf/bankdesignpoints/OH_spec_Rev2A.pdf">Specification for the Ohmic Heating Module</a></li>
							<li><a href="pdf/bankdesignpoints/PF_spec_day1_Rev1A.pdf">Specification for the Poloidal Field Bank Modules DAY 1</a></li>
							<li><a href="pdf/bankdesignpoints/PF_spec_Rev3A.pdf">Specification for the Poloidal Field Bank Modules</a></li>
							<li><a href="pdf/bankdesignpoints/TF_spec_day1_Rev1A.pdf">Specification for the Toroidal Field Bank Modules DAY 1</a></li>
							<li><a href="pdf/bankdesignpoints/TF_spec_Rev2A.pdf">Specification for the Toroidal Field Bank Modules</a></li>

							<p><li><a href="pdf/bankdesignpoints/IEEE Poster 2016.pdf">IEEE Poster 2016</a></li>
							<li><a href="pdf/bankdesignpoints/TF_Modelsheet.pdf">TF Modelsheet</a></li></p>
				</ul>
     		</div>

  
  
	<p>Need help with your bank design points? WSI can get your lab up and running.</p>
	<p><a class="btn btn-lg btn-primary" href="mailto:sales@woodruffscientific.com" role="button">Get a Quote &raquo;</a></p>
	</div>


    </div> <!-- /container -->
    </div> <!-- /wrap -->

	<?php
	$footer = file_get_contents('footer.html');
	echo $footer;	
	?>	   
  </body>
</html>
