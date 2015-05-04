<!DOCTYPE html>
<html lang="en">
  <head>
	<?php
	$head = file_get_contents('header.html');
	echo $head;	
	?>
  <meta name="description" content="">
  <title>Scientific Computing Bootcamp | Woodruff Scientific, Inc.</title>
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
 	 	<li><a href="#">Company</a></li>
  		<li class="active">Scientific Computing Bootcamp</li>
	</ol>
	<h1>Scientific Computing Bootcamp<br/>
		<small>with emphasis on application to plasma physics and nuclear fusion</small></h1>
	<blockquote>September 14-18, 2015<br/>4000 Aurora Ave N. Suites 5 &amp; 6<br />
		Seattle, WA 98103</blockquote>

	<p>Be introduced to the tools that plasma physics simulationists use regularly in addressing contemporary 
issues in scientific computing and some of today's most pressing challenges. Relevant materials will be provided.</p>

	<p><em>Intended audience:</em> undergraduate students with at least some computing familiarity, energy, and an
interest in pursuing high performance computing in their careers.</p>

	<p><em>Anticipated topics:</em>
		<ul>
			<li>Grand challenges in computational plasma physics</li>
			<li>Overall process of computational simulation</li>
			<li>Historical context</li>
			<li>Introduction to plasma physics research &amp; development codes</li>
			<li>Compiling and debugging, including Make, C++, and FORTRAN</li>
			<li>High performance computing and best practices</li>
			<li>Visualization and post-processing tools, including Octave and Python</li>
			<li>Partial differential equations, the finite element method</li>
			<li>Verification and validation in scientific computing</li>
			<li>Contemporary issues</li>
			<li>Exascale computing</li>
		</ul>
	</p>

<p class="center"><a class="btn btn-lg btn-primary" href="apply" role="button">Apply Now &raquo;</a></p><br />
<p class="center"><big>Applications accepted through <strong>Friday, June 19</strong></big></p>
    </div> <!-- /container -->
    </div> <!-- /wrap -->

	<?php
	$footer = file_get_contents('footer.html');
	echo $footer;	
	?>	   
  </body>
</html>

