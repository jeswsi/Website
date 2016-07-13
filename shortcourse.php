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
<?php $googleTagManager = file_get_contents('googleTagManager.html'); echo $googleTagManager; ?>
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
	<blockquote>September 19-23, 2016<br/>
		Location to be announced (Seattle Area)
		</blockquote>

	<p>An introduction to some of the scientific computing tools that plasma physicists use regularly in addressing some of today's most pressing challenges. Intended audience: undergraduate students with at least some computing familiarity, energy, and an interest in pursuing high performance computing in their careers.</p>

	<p><em>Intended audience:</em> undergraduate students with at least some computing familiarity, energy, and an
interest in pursuing high performance computing in their careers.</p>

	<p><em>Anticipated topics:</em>
		<ul>
			<li>Grand challenges in computational plasma physics</li>
			<li>Overall process of computational simulation</li>
			<li>Introduction to plasma physics research &amp; development codes</li>
			<li>Compiling and debugging, including Make and FORTRAN</li>
			<li>High performance computing and best practices</li>
			<li>Visualization and post-processing tools, including Octave and Python</li>
			<li>The finite element method</li>
			<li>Verification and validation in scientific computing</li>
			<li>Contemporary issues</li>
			<li>Exascale computing</li>
		</ul>
	</p>


	<p>For additional inforamtion, please e-mail <em><a href="mailto:info@woodruffscientific.com"> info@woodruffscientific.com</a></em></p>

	<blockquote>"Attending the Scientific Computing Bootcamp at Woodruff Scientific was an incredible learning experience, and tons of fun! I was able to connect with industry experts and learn many fundamentals of scientific computing – as well as their respective applications. Even if you have no prior knowledge of plasma physics or nuclear fusion, I highly recommend applying to this opportunity!” - Hannah Misenar</blockquote>

	<blockquote>“Woodruff Scientific Computing Bootcamp was a safe and inviting place to learn about scientific computing basics, plasma physics, and broader applications of the two. Expect to broaden your understanding with in-depth tutorials, great speakers, diverse content, and a lot of fun!” – Danielle Lemmon, BSc Physics, University of Washington</blockquote>

	<blockquote>“It was a lot of fun and you guys did a great job of exposing the problems in the field and giving us an appreciation for the scale that all of that happens at, from the cost to the temperature, to computing resources, it takes a lot of time. As a CSE student the intro to parallelization was really cool and the basic intro to using a unix terminal served me well. I have definitely recommended the camp to friends and would recommend it to anyone in an interest in physics, applied math, or CSE.” – Ben Gardon, BSc CSE University of Washington</blockquote>


	<br>

<!-- 	<h4>This year's course was a great success, thanks to all the students, guest speakers, and instructors. Look to this page for future bootcamps.</h4>
 -->	<h4><a href="files/2015-Bootcamp-Summary.pdf">2015 Bootcamp Summary (pdf)</a></h4>

<p class="center"><a class="btn btn-lg btn-primary" href="apply" role="button">Apply Now &raquo;</a></p><br />
<p class="center"><big>Applications accepted through <strong>Friday, June 24</strong></big></p>
    </div> <!-- /container -->
    </div> <!-- /wrap -->

	<?php
	$footer = file_get_contents('footer.html');
	echo $footer;	
	?>	   
  </body>
</html>

