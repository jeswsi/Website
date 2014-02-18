<!DOCTYPE html>
<html lang="en">
  <head>
	<?php
	$head = file_get_contents('header.html');
	echo $head;	
	?>
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
  		<li class="active">Safety Interlocks</li>
	</ol>
	<h1>Safety Interlocks</h1>
	<p class="center"><a href="img/safety.png"><img width="400px" src="img/safety.png"></a></p>
	<p>Safety interlocks along with a proper safety plan can help reduce the chance of lab injury. Our interlock system can be integrated with the <a href="labview">experiment control system</a>. WSI can work with your lab to develop room layouts, safety interlocks, and safe operations procedures.</p>
	<p><a class="btn btn-lg btn-primary" href="mailto:sales@woodruffscientific.com?subject=Safety interlocks RFQ &#038;body=How%20many%20interlocks:%0D%0A%0D%0ANumber%20of%20access%20control%20doors:%0D%0A%0D%0AIntegration%20with%20Labview%20experiment%20management:%0D%0A%0D%0AShort%20description%20of%20the%20application:%0D%0A%0D%0APlease%20find%20attached%20a%20sketch/engineering%20drawing%20of%20the%20application.%0D%0A%0D%0ANeeded%20by(Date):%0D%0A%0D%0AContact(Name/email/phone/fax/etc):" role="button">Get a Quote &raquo;</a></p>


    </div> <!-- /container -->
    </div> <!-- /wrap -->

	<?php
	$footer = file_get_contents('footer.html');
	echo $footer;	
	?>	   
  </body>
</html>
