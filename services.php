<!DOCTYPE html>
<html lang="en">
  <head>
	<?php
	$head = file_get_contents('header.html');
	echo $head;	
	?>
		<meta name="description" content="Services WSI can provide for all stages of fusion, plasma energy, and physics labs.">
  <title>Services | Woodruff Scientific, Inc.</title>
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
  		<li class="active">Services</li>
	</ol>

		<ul class="left">
                  <li><a href="physics">Physics</a></li>
                  <li><a href="engineering">Engineering</a></li>
                  <li><a href="purchase">Purchase</a></li>
                  <li><a href="fabrication">Fabrication / Integration</a></li>
                  <li><a href="installation">Installation / Testing</a></li>
		</ul>
<h1>Services</h1>
<p>We offer assistance with all stages of innovation: concept design, engineering design, procurement, fabrication, installation, testing, and operations. We can offer support packages to suit your application and budget.</p>


<p>
The aim of the design review process is to efficiently turn conceptual
solutions into physically workable ones.  The process draws on the
combined knowledge base of the group, and so expediently resolves issues
that may not have been clear in the first instance.  The intention of
the design review process is to deliver a single design for purchase
fabrication and testing.
</p>
<p class="center"><img src="img/services.jpg" style="width:100%;"></p>

<p>
	There are five stages to the design review process at WSI:
</p>
<ol>
	<li>Concept design –  after the informal discussions, an idea will be
sketched out (physics scripted, diagram or schematic drawn).  Dominant
physical constraints for the system are discussed.  Usually the concept
design is presented formally in a Design Review.  Sketches should be in
engineering format, outlines of physics should be coded into scripts to
show sensitivity to various control parameters, and to understand costs.
In response to the concept review, participants will generate a series
of questions before the concept gets passed to the engineering phase
(see review response form below).</li>
	<li>Engineering design: (schedule and costing review) by this point, the
concept is fully fleshed out, and specific details of how to connect all
the components of the system will be known, and vendors engaged with
quotes.  A schedule and task list will be generated for completion of
the entire project.</li>
	<li>Purchase: for all projects Purchasing is often the most critical
aspect of the development: tracking orders, managing vendors, and
ensuring that items are delivered in a timely manner so that project
time-line is not impacted. We have a decade of experience sourcing both
used and new quality components, nationally and internationally. WSI can
manage your purchasing while you focus on your project.</li>
	<li>Fabrication: after more than a decade of machining prototypes,
working with state-of-the-art fabrication techniques (laser cutting, CNC
mills/lathes, and now: additive manufacturing) we now offer fabrication
services. For components fabricated elsewere, we offer integration
services (we will put it together for you and ship completed systems).
Let us know what you need fabricated or assembled.</li>
	<li>Testing: for systems shipped to your location, we offer installation
and testing services – we will arrive onsite with our own equipment and
get your system / subsystem functional. An experienced team will ensure
safe operation, train your staff in safety protocols and ensure that all
systems are working to specifications.</li>
</ol>
<p>See also Hales and Gooch '<a href="http://www.amazon.com/Managing-Engineering-Design-Crispin-Hales/dp/1852338032">Managing Engineering Design</a>' Springer 2nd Ed
2004


    </div> <!-- /container -->
    </div> <!-- /wrap -->

	<?php
	$footer = file_get_contents('footer.html');
	echo $footer;	
	?>	   
  </body>
</html>
