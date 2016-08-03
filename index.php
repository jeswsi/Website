
<!DOCTYPE html>
<html lang="en">
  <head>
	<?php
	$head = file_get_contents('header.html');
	echo $head;	
	?>
  <meta name="description" content="Products and Services for Plasma Physics, Fusion, and Pulsed Power">
  <title>Woodruff Scientific, Inc. | Accelerating the development of commericial fusion energy systems since 2005</title>
  </head>

  <body>
<?php $googleTagManager = file_get_contents('googleTagManager.html'); echo $googleTagManager; ?>
    <div id="wrap">
    <div class="container">

	<?php
	$navbar = file_get_contents('navbar.html');
	echo $navbar;	
	?>	

    <!-- Carousel -->
	<div id="myCarousel" class="carousel slide col-md-4" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
        <li data-target="#myCarousel" data-slide-to="4"></li>
        <li data-target="#myCarousel" data-slide-to="5"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <img src="img/STPX-carousel.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
            	<p><a class="white" href="devices">STPX Plasma Experiment</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="img/work_coil-carousel.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <p><a class="white" href="magnets">Helmholtz Coil for Aerospace</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="img/stpx_banks_carousel.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
      			<p><a class="white" href="pulsedpower">STPX Capacitor Banks</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="img/LANLcoils-carousel.jpg" alt="Fourth slide">
          <div class="container">
            <div class="carousel-caption">
            	<p><a class="white" href="magnets">Helmholtz Coils for LANL's PLX</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="img/LTX-carousel.png" alt="Fifth slide">
          <div class="container">
            <div class="carousel-caption">
              <p><a class="" href="physics">LTX Equilibrium</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="img/iter-carousel.png" alt="Sixth slide">
          <div class="container">
            <div class="carousel-caption">
              <p><a class="white" href="physics">ITER MHD</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->

      <div class="jumbotron col-md-8">
        <h2>Outsource your plasma R&amp;D quickly and inexpensively to Woodruff Scientific's experienced team</h2>
        <p>Woodruff Scientific offers assistance with all stages of innovation: concept design,
engineering design, procurement, fabrication, installation, testing, and
operations. We can offer support packages to suit your application and
budget.</p>
    </div>
    <div class="clearfix"></div>

	<!--<div class="col-md-6">
		
    <a class="black" href="products"><h2>Products</h2></a>
		<ul>
		<li><a href="pulsedpower">Pulsed power</a></li>
		<li><a href="magnets">Magnets</a></li>
		<li><a href="sources">Plasma Sources</a></li>
    <li><a href="chambers">Plasma-Material Interface</a></li>
		<li><a href="codac">CODAC</a></li>
		<li><a href="diagnostics">Diagnostics</a></li>
		<li><a href="devices">Devices</a></li>
		<li><a href="computers">High Performance Computing</a></li>
		</ul>
	</div> -->



<h2>Our Mission</h2>
  <p>
Nuclear fusion powers our sun and all the stars in the night sky; if harnessed on earth, it could be the ultimate energy source: safe, clean, and with plentiful fuel. Commercial fusion energy will ultimately provide energy independence, national security, and new jobs in the emerging clean-tech market sector.  For the last decade, Woodruff Scientific has sought to accelerate the development of commercial fusion by tackling critical scientific problems in the <a href="http://science.energy.gov/fes/">US DOE Fusion Energy Sciences program</a>.  What we&#8217;ve built, we can now offer as <a href="products">products.</a> What we&#8217;ve learned to do, we offer as <a href="services">services</a>.
  </p>


	<div class="col-md-6">
		<a class="black" href="services"><h1>Services</h1></a>
		<ul>
		<li><a href="physics">Physics</a></li>
		<li><a href="engineering">Engineering</a></li>
		<li><a href="purchase">Purchase</a></li>
		<li><a href="fabrication">Fabrication / Integration</a></li>
		<li><a href="installation">Installation / Testing</a></li>
		</ul>
	</div>
	<div class="col-md-12 center">



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


	</div>
    </div> <!-- /container -->
    </div> <!-- /wrap -->
	<?php
	$footer = file_get_contents('footer.html');
	echo $footer;	
	?>	
  </body>
</html>

