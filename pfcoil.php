<!DOCTYPE html>
<html lang="en">
  <head>
	<?php
	$head = file_get_contents('header.html');
	echo $head;	
	?>
	<meta name="description" content="Poloidal field coils for fusion, plasma energy, and physics labs.">
  <title>Poloidal Field Coil | Woodruff Scientific, Inc.</title>
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
 	 	<li><a href="magnets">Magnets</a></li>
  		<li class="active">PF Coils</li>
	</ol>
	<h1>Poloidal Field Coils</h1>
	<p>Custom sizing and materials available.</p>
	<p><a href="img/Coilset3.jpg"><img alt="Coilset3" src="img/Coilset3-300x157.jpg" width="300" height="157" /></a><br />
<a href="img/g349380.png">Flux plot</a><br />
Circuits (schematics (<a href="pdf/Coilset1PF1andPF5.pdf">PF1&#038;5</a>, <a href="pdf/Coilset1PF2andPF61.pdf">PF2&#038;6</a>, <a href="pdf/Coilset1PF3andPF7.pdf">PF3&#038;7</a>, <a href="pdf/Coilset1PF4andPF8.pdf">PF4&#038;8</a>), analysis (<a href="pdf/Coilset1PF1andPF5t.pdf">PF1&#038;5</a>, <a href="pdf/Coilset1PF2andPF6t.pdf">PF2&#038;6</a>, <a href="pdf/Coilset1PF3andPF7t.pdf">PF3&#038;7</a>, <a href="pdf/Coilset1PF4andPF8t.pdf">PF4&#038;8</a>))</p>

<p><a href="img/Coilset2.jpg"><img alt="Coilset2" src="img/Coilset2-300x157.jpg" width="300" height="157" /></a><br />
<a href="img/g349369.png">Flux plot</a><br />
Circuits (schematics (<a href="pdf/Coilset2PF1andPF4.pdf">PF1&#038;4</a>, <a href="pdf/Coilset2PF2andPF3.pdf">PF2&#038;3</a>), analysis (<a href="pdf/Coilset2PF1andPF4t.pdf">PF1&#038;4</a>, <a href="pdf/Coilset2PF2andPF3t.pdf">PF2&#038;3</a>))</p>

<p><a href="img/pop3.jpg"><img alt="pop3" src="img/pop3-300x157.jpg" width="300" height="157" /></a><br />
<a href="img/g365891.png">Flux plot</a><br />
Circuits (schematics (<a href="pdf/Coilset3PF1andPF6.pdf">PF1&#038;6</a>, <a href="pdf/Coilset3PF2andPF7.pdf">PF2&#038;7</a>, <a href="pdf/Coilset3PF3andPF8.pdf">PF3&#038;8</a>, <a href="pdf/Coilset3PF4andPF9.pdf">PF4&#038;9</a>, <a href="pdf/Coilset3PF5andPF10.pdf">PF5&#038;10</a>), analysis (<a href="pdf/Coilset3PF1andPF6t.pdf">PF1&#038;6</a>, <a href="pdf/Coilset3PF2andPF7t.pdf">PF2&#038;7</a>, <a href="pdf/Coilset3PF3andPF8t.pdf">PF3&#038;8</a>, <a href="pdf/Coilset3PF4andPF9t.pdf">PF4&#038;9</a>, <a href="pdf/Coilset3PF5andPF10t.pdf">PF5&#038;10</a>))</p>
</p>

	<p><a class="btn btn-lg btn-primary" href="mailto:sales@woodruffscientific.com?subject=PF Coil RFQ &amp;body=L:%0D%0A%0D%0APeak%20current%20:%0D%0A%0D%0AOD:%0D%0A%0D%0AID:%0D%0A%0D%0AVacuum-compatible?(yes/no):%0D%0A%0D%0AShort%20description%20of%20the%20application:%0D%0A%0D%0APlease%20find%20attached%20a%20sketch/engineering%20drawing%20of%20the%20application.%0D%0A%0D%0ANeeded%20by(Date):%0D%0A%0D%0AContact(Name/email/phone/fax/etc):" role="button">Get a Quote &raquo;</a></p>

<h3>References</h3>
	<blockquote><a href="PFcoils.html">PF Coil References</a></blockquote>


    </div> <!-- /container -->
    </div> <!-- /wrap -->

	<?php
	$footer = file_get_contents('footer.html');
	echo $footer;	
	?>	   
  </body>
</html>
