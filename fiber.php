<!DOCTYPE html>
<html lang="en">
  <head>
	<?php
	$head = file_get_contents('header.html');
	echo $head;	
	?>
	<meta name="description" content="Fiber-Optic relay controls for fusion, plasma energy, and physics labs. Fiber optic emitters and receivers can be used to control and isolate dangerous high-voltage banks.">
  <title>Fiber-Optic Relays | Woodruff Scientific, Inc.</title>
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
 	 	<li><a href="products">Products</a></li>
 	 	<li><a href="codac">CODAC</a></li>
  		<li class="active">Fiber-optic Relay Controls</li>
	</ol>
	<h1>Fiber-Optic Relay Controls</h1>
		<div class="col-md-6">
		<p class="center"><a href="img/board3.jpg"><img src="img/board3-small.jpg"></a><br />
		Emitter Board</p>
	</div>
	<div class="col-md-6">
		<p class="center"><a href="img/board2.jpg"><img src="img/board2-small.jpg"></a><br />
		Receiver Board</p><br />
	</div>
	<p>Fiber-Optic Control relays:
		<ul>
			<li>For charge, dump, any signaling within an enclosure</li>
			<li>Emitter boards connect to NI equipment</li>
			<li>Boards can be enclosed in 1U rack-mountable units, or any custom enclosure</li>
			<li>Fully customizable to spec</li>
		</ul>
	</p>
	<p><a class="btn btn-lg btn-primary" href="mailto:sales@woodruffscientific.com?subject=Optical relay controls RFQ &#038;body=How%20many:%0D%0A%0D%0AIntegrate%20with%20which%20system(NI/CAMAC/etc):%0D%0A%0D%0AShort%20description%20of%20the%20application:%0D%0A%0D%0APlease%20find%20attached%20a%20sketch/engineering%20drawing%20of%20the%20application.%0D%0A%0D%0ANeeded%20by(Date):%0D%0A%0D%0AContact(Name/email/phone/fax/etc):" role="button">Get a Quote &raquo;</a></p>


    </div> <!-- /container -->
    </div> <!-- /wrap -->

	<?php
	$footer = file_get_contents('footer.html');
	echo $footer;	
	?>	   
  </body>
</html>
