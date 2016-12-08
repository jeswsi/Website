<!DOCTYPE html>
<html lang="en">
  <head>
	<?php
	$head = file_get_contents('header.html');
	echo $head;	
	?>
		<meta name="description" content="Custom Data Acquisition setup, configuration, and installation for fusion, plasma energy, and physics labs.">
  <title>Data Acquisition and Control | Woodruff Scientific, Inc.</title>
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
 	 	<li><a href="codac">CODAC</a></li>
  		<li class="active">DAQ</li>
	</ol>
	<h1>Data Acquisition and Control</h1>
	<p>WSI uses <a href="http://www.ni.com/data-acquisition/">National Instruments</a> hardware for data acquisition. We can tailor hardware setups for your lab.</p>
	<div class="col-md-6">
		<p class="center"><img src="img/minDAQ.jpg"><br />
		Minimum data acquisition/controls for use with Experiment Management System: <a href="pdf/MinDAQ.pdf">MinDAQ</a>. Simple 24 channel 3MHz system.</p>
	</div>
	<div class="col-md-6">
		<p class="center"><img height="200" src="img/CEDAQ.jpg"><br />
		Concept Exploration data acquisition and controls for use with our Experiment Management System: <a href="pdf/CEDAQ.pdf">CEDAQ</a>. 80 channels of 3MHz with 8 of 60MHz.</p><br />
	</div>
	<div class="clearfix"></div>
	<div class="col-md-12">
		<p class="center"><img height="200" src="img/CEDAQ.jpg"><img height="200" src="img/POPDAQ.jpg"><br />
		Minimalist-looking Proof of Principal data acquisition and controls for use with our Experiment Management System: <a href="pdf/CEDAQ.pdf">CEDAQ base</a> and <a href="pdf/POPDAQ.pdf">extra data channels for POP level system</a>. In total there are 176 channels of 3MHz and 24 of 60MHz.</p>
	</div>
	<div class="clearfix"></div>



	<p><a class="btn btn-lg btn-primary" href="mailto:sales@woodruffscientific.com?subject=DAQ RFQ &#038;body=How%20many%20banks:%0D%0A%0D%0AHow%20many%20acquisition%20channels:%0D%0A%0D%0AShort%20description%20of%20the%20application:%0D%0A%0D%0ANeeded%20by(Date):%0D%0A%0D%0AContact(Name/email/phone/fax/etc):" role="button">Get a Quote &raquo;</a></p>


    </div> <!-- /container -->
    </div> <!-- /wrap -->

	<?php
	$footer = file_get_contents('footer.html');
	echo $footer;	
	?>	   
  </body>
</html>
