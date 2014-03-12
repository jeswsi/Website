<!DOCTYPE html>
<html lang="en">
  <head>
	<?php
	$head = file_get_contents('header.html');
	echo $head;	
	?>
	<meta name="description" content="LabVIEW experiment management system for fusion, plasma energy, and physics labs.">
  <title>LabVIEW Experiment Management System | Woodruff Scientific, Inc.</title>
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
 	 	<li><a href="codac">CODAC</a></li>
  		<li class="active">LabVIEW Experiment Management System</li>
	</ol>
	<h1>LabVIEW Experiment Management System</h1>
	<p class="center"><a href="img/labview.png"><img src="img/labview-small.png"></a></p>
	<p>WSI uses National Instruments <a href="http://www.ni.com/labview/">LabVIEW</a> for experiment control.
	<p>Our software includes:
		<ul>
			<li>Integration with <a href="safety">saftey interlocks</a></li>
			<li>Control of charging &amp; firing of banks</li>
			<li>Read in of data channels and export of data</li>
			<li>Real time abort</li>
			<li>Expandable, customizable, and compatible with NI equipment</li>
		</ul>
		Typical use is for charging of banks and timing of firing, acquiring data on diagnostic channels. All input controlled through front panel.
	</p>
	<p><a class="btn btn-lg btn-primary" href="mailto: sales@woodruffscientific.com?subject=Experiment management system RFQ &#038;body=How%20many%20banks:%0D%0A%0D%0AHow%20many%20acquisition%20channels:%0D%0A%0D%0AShort%20description%20of%20the%20application:%0D%0A%0D%0ANeeded%20by(Date):%0D%0A%0D%0AContact(Name/email/phone/fax/etc):" role="button">Get a Quote &raquo;</a></p>


    </div> <!-- /container -->
    </div> <!-- /wrap -->

	<?php
	$footer = file_get_contents('footer.html');
	echo $footer;	
	?>	   
  </body>
</html>
