<!DOCTYPE html>
<html lang="en">
  <head>
	<?php
	$head = file_get_contents('header.html');
	echo $head;	
	?>
	<meta name="description" content="Plasma-materials interface. Vacuum compatible confinement chambers for fusion and plasma systems.">
  <title>Plasma-Material Interface | Woodruff Scientific, Inc.</title>
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
  		<li class="active">Plasma-Material Interface</li>
	</ol>

	<ul class="left">
		            <li><a href="vacuumboundary">Vacuum Boundary</a></li>
                    <li><a href="firstwall">First Wall</a></li>
                    <li><a href="blankets">Blankets</a></li>     
                    <li><a href="stabilization">Stabilization</a></li>
                    <li><a href="integration">Integration</a></li>
    </ul>

        <!--<ul class="left">
            <li><a href="chambers/vacuumboundary">Vacuum Boundary</a></li>
            <li><a href="chambers/firstwall">First Wall & Blankets</a></li>
            <li><a href="chambers/stabilization">Stabilization</a></li>
            <li><a href="chambers/integration">Integration</a></li>
        </ul>-->

	<h1>Plasma-Material Interface</h1>
	<p class="center">
	<a href="img/Chamber-layers.jpg"><img src="img/Chamber-layers-small.jpg"></a><br />
	<span class="text-muted">Fig. 1. Blanket layers typical of fusion confinement chambers. From the inside out: First wall; Blanket I; Blanket II; High temperature shield; Vacuum vessel.</span></p>
	<p>The plasma-materials interface includes the first wall components,
blankets, divertor and vacuum vessel.  In fusion energy systems that
will handle very high power loadings, these subsystems are distinct (see
e.g. <a href="https://www.iter.org/mach/blanket">ITER blanket</a>), requiring an integrated
design approach.  In research devices, power loadings are not generally
a concern (though need some consideration), and sometimes PMI subsystems
can be integrated into a whole (for example combining the vacuum
boundary with the first wall and passive stabilization). <a href="pdf/CT.pdf">Our thoughts on confinement chambers were published as a white paper</a> as proceedings to the ReNeW workshops.</p></p>

<h3>References</h3>
<blockquote><a href="vacuum.html">Vacuum Boundary References</blockquote>
<blockquote><a href="liquidlithium.html">Liquid Lithium First Wall References</blockquote>
<blockquote><a href="blankets.html">Blanket References</blockquote>


<!--
	<p class="center">
	<a href="img/Chamber-layers.jpg"><img src="img/Chamber-layers-small.jpg"></a><br />
	<span class="text-muted">Fig. 1. Blanket layers typical of fusion confinement chambers. From the inside out: First wall; Blanket I; Blanket II; High temperature shield; Vacuum vessel.</span></p>
	<p>Confinement chambers for fusion systems entail all of the components from the outer vacuum vessel through the blanket sections to the first wall. At the CE and POP stage, these layers are often integrated together, but at the BPX stage, these will be separate subsystems (see e.g. ITER’s <a href="http://www.iter.org/mach/blanket">blankets</a>). <a href="pdf/CT.pdf">Our thoughts on confinement chambers were published as a white paper</a> as proceedings to the ReNeW workshops.</p>
	<p>Fusion systems require attention to vacuum cleanliness. All of our designs entail highest quality vacuum compatible materials. Feedthrough ports are industry standard, entailing either metal seals or differentially pumped o-ring seals. First wall components typically are required to withstand very high heat loadings, so we engineer only with state-of-the-art materials. Chamber design typically requires the integration of various subsystems, including: Sources, Diagnostics, CODAC and Magnetics. We typically provide an EDR working with industrial partners for the complete design before purchase and fab. WSI can work with you to design and manufacture a vacuum chamber for your lab's needs.</p>
	<p><a class="btn btn-lg btn-primary" href="mailto:sales@woodruffscientific.com" role="button">Get a Quote &raquo;</a></p><br />
<h3>Simply-Connected Vacuum Chambers</h3>
<div class="col-md-6">
	<p><a href="img/Chamber1-1.jpg"><img src="img/Chamber1-1-small.jpg"></a></p>
	<p><a href="img/Chamber4-1.jpg"><img src="img/Chamber4-1-small.jpg"></a></p>
</div>
<div class="col-md-6">
	<p><a href="img/Chamber2-1.jpg"><img src="img/Chamber2-1-small.jpg"></a></p>
	<p><a href="img/Chamber4-4.jpg"><img src="img/Chamber4-4-small.jpg"></a></p>
</div>
	<p><a class="btn btn-lg btn-primary" href="mailto:sales@woodruffscientific.com" role="button">Get a Quote &raquo;</a></p><br />-->

    </div> <!-- /container -->
    </div> <!-- /wrap -->

	<?php
	$footer = file_get_contents('footer.html');
	echo $footer;	
	?>	   
  </body>
</html>

