<!DOCTYPE html>
<html lang="en">
  <head>
	<?php
	$head = file_get_contents('header.html');
	echo $head;	
	?>
	<meta name="description" content="Pulsed Power capacitor banks, Module type A, for fusion, pulsed power, plasma energy, and physics labs. We can design and construct custom capacitor banks.">
  <title>Module A Capacitor Banks | Woodruff Scientific, Inc.</title>
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
  		<li><a href="pulsedpower">Pulsed Power</a></li>
  		<li class="active">Module A</li>
	</ol>

    <h1>Module A <small>(based on 4uF, 12kV, 300J caps)</small></h1>
	

		<p class="center"><a href="img/AC64-4.jpg"><img src="img/AC64-4-small.jpg"></a><br />
		Module AC64</p>

	<div class="clearfix"></div>
	<blockquote><a href="files/BankModule-AC-1.pdf">Module A Technical Specifications (pdf)</a></blockquote>


	<p><a class="btn btn-lg btn-primary" href="mailto:sales@woodruffscientific.com" role="button">Get a Quote &raquo;</a></p>

<h3>Safety</h3>
Safety must be the number one priority in all labs. The high-voltage used in our banks is inherently dangerous; WSI takes all measures to ensure operator safety. A proper safety protocol needs to be followed. Banks should always be kept in an isolated room equipped with <a href="safety">safety interlocks</a>. Our bank dumps are double or triple redundant, default to a safe position in case of power outage or other failure, and are controled via door interlocks and from the control room. WSI can work with your lab to setup a safe testing environment.



    </div> <!-- /container -->
    </div> <!-- /wrap -->

	<?php
	$footer = file_get_contents('footer.html');
	echo $footer;	
	?>	   
  </body>
</html>
