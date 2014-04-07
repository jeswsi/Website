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
	<p class="center"><a href="img/labview.png"><img src="img/labview-small.png"></a>&nbsp;<a href="img/codac-lite.png"><img src="img/codac-lite.png" height="200"></a></p>
	<p>WSI uses National Instruments <a href="http://www.ni.com/labview/">LabVIEW</a> for experiment control.
	<p>Our software includes:
		<ul>
			<li>Integration with <a href="safety">safety interlocks</a></li>
			<li>Control of charging &amp; firing of banks (PXI Star high-performance trigger signaling &lt;1ns inter-module delay)</li>
			<li>Read in of data channels and export of data (csv, MDS+, etc.)</li>
			<li>Real time abort</li>
			<li>Expandable, customizable, and compatible with NI equipment</li>
		</ul>
		Typical use is for charging of banks and timing of firing, acquiring data on diagnostic channels. All input controlled through front panel. See <a href="daq">Data Acquisition page</a> for example hardware setups for use with Experiment Management System.</p>
		<p>A basic version of the Experiment Management System is available free of charge:
	</p>
	<form action="files/labview_experiment_management_system.zip" onSubmit="if(document.getElementById('agree').checked) { return true; } else { alert('Please agree to the Terms &amp; Conditions'); return false; }">
	<input type="checkbox" name="checkbox" value="check" id="agree" /> By checking this box you agree to these <a onclick="$('#terms').toggle();">Terms &amp; Conditions</a>
	<br />
	<div id="terms">
		<pre>By downloading this software, you agree to the following terms:
		The software is provided 'as is', without warranty of any kind, express or implied, including but not limited to the warranties of merchantability, fitness for a particular purpose and noninfringement. In no event shall the authors or copyright holders be liable for any claim, damages or other liability, whether in an action of contract, tort or otherwise, arising from, out of or in connection with the software or the use or other dealings in the software.</pre>
	</div>
	<input type="submit" class="btn btn-lg btn-primary" value="Download Basic Experiment Management System &raquo;" />
<br />
	</form>
	<br />
	<p>If you need further assistance using or configuring the Experiment Management system, let us know. WSI can also modify the experiment management system to better suit your lab. Let us know what modifications you need.</p>
	<p><a class="btn btn-lg btn-primary" href="mailto: sales@woodruffscientific.com?subject=Experiment management system RFQ &#038;body=How%20many%20banks:%0D%0A%0D%0AHow%20many%20acquisition%20channels:%0D%0A%0D%0AShort%20description%20of%20the%20application:%0D%0A%0D%0ANeeded%20by(Date):%0D%0A%0D%0AContact(Name/email/phone/fax/etc):" role="button">Get a Quote &raquo;</a></p>


    </div> <!-- /container -->
    </div> <!-- /wrap -->

	<?php
	$footer = file_get_contents('footer.html');
	echo $footer;	
	?>	
	<script>
      //hide terms and conditions on load
    $('#terms').toggle();
    function agree()
    {
    	if(confirm("By downloading this software, you agree to the following terms:\n\nThe software is provided 'as is', without warranty of any kind, express or implied, including but not limited to the warranties of merchantability, fitness for a particular purpose and noninfringement. In no event shall the authors or copyright holders be liable for any claim, damages or other liability, whether in an action of contract, tort or otherwise, arising from, out of or in connection with the software or the use or other dealings in the software.")) {
    		window.location.href="files/labview_experiment_management_system.zip"
    	}

    }
    </script>   
  </body>
</html>
