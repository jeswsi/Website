<!DOCTYPE html>
<html lang="en">
  <head>
	<?php
	$head = file_get_contents('header.html');
	echo $head;	
	?>
	<meta name="description" content="Fabrication, Testing and Purchase">
  <title>Project Management | Woodruff Scientific, Inc.</title>
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
  		<li class="active">Project Management</li>
	</ol>


	 <ul class="left">
            <li><a href="#purchase">Purchase</a></li>
            <li><a href="#manufacturing">Manufacturing</a></li>
            <li><a href="#instalation">Installation</a></li>
          </ul>


	
	<a id="purchase"></a>
	<h3>Purchase</h3>
	<p>For all projects Purchasing is often the most critical aspect of the development: tracking orders, managing vendors, and ensuring that items are delivered in a timely manner so that project time-line is not impacted. We have a decade of experience sourcing both used and new quality components, nationally and internationally. WSI can manage your purchasing while you focus on your project.</p>

	<a id="manufacturing"></a>
	<h3>Manufacturing</h3>
	<p>After more than a decade of machining prototypes, working with state-of-the-art fabrication techniques (laser cutting, CNC mills/lathes, and now: additive manufacturing) we now offer fabrication services. For components fabricated elsewere, we offer integration services (we will put it together for you and ship completed systems). Let us know what you need fabricated or assembled.</p>

	<a id="installation"></a>
	<h3>Installation</h3>
	<p>For systems shipped to your location, we offer installation and testing services – we will arrive onsite with our own equipment and get your system / subsystem functional. An experienced team will ensure safe operation, train your staff in safety protocols and ensure that all systems are working to specifications.</p>
	</ul>

	
	<p><a class="btn btn-lg btn-primary" href="mailto:sales@woodruffscientific.com" role="button">Get a Quote &raquo;</a></p>




    </div> <!-- /container -->
    </div> <!-- /wrap -->

	<?php
	$footer = file_get_contents('footer.html');
	echo $footer;	
	?>	   
  </body>
</html>
