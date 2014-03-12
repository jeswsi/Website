<!DOCTYPE html>
<html lang="en">
  <head>
	<?php
	$head = file_get_contents('header.html');
	echo $head;	
	?>
  <meta name="description" content="Careers, internship and job opportunities at Woodruff Scientific">
  <title>Careers | Woodruff Scientific, Inc.</title>
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
 	 	<li><a href="company">Company</a></li>
  		<li class="active">Careers</li>
	</ol>
	<h1>Careers</h1>
			<p>We are looking to grow the company during the next year.  If you look through our products and services as see where you can add value or assist us in fulfilling contracts, we would like to hear from you.</p>
<p>The ideal candidate for a technical position at Woodruff Scientific has a passion for physics, a strong work ethic, a creative spirit, and relevant research experience in Fusion Energy Sciences.  You may submit a resume and cover letter at any time, or &#8216;get in the loop&#8217; through our Associates Program.  Please contact human resources at <a href="mailto:hr@woodruffscientific.com">hr@woodruffscientific.com</a>.</p>
<p>Woodruff Scientific is a small company. As such, individual employees have great impact on the atmosphere, research, and success.  Woodruff Scientific an equal opportunity employer and will not discriminate against any employee or applicant on the basis of age, color, disability, gender, national origin, race, religion, sexual orientation, veteran status, or any classification protected by federal, state, or local law.</p>
<p>Woodruff Scientific offers a competitive benefits package (e.g. Fidelity retirement investments).</p>
<p>We are located in <a href="http://www.visitseattle.org/Home.aspx">Seattle</a> in the Pacific Northwest of mainland USA.  Offices are 5 minutes drive north of downtown, 5 minutes west of the University of Washington, and 2 minutes north of Seattle Pacific University, inbetween laid-back communities of <a href="http://www.wallyhood.org/">Wallingford</a> and <a href="http://www.fremontuniverse.com/">Fremont</a>.</p>
<h2> Students </h2>
<p>Woodruff Scientific is committed to student education. WSI interns are mentored by staff scientists and challenged with a range of tasks in computational and experimental research.  </p>

<h4>Space Grant</h4>
<p>For the last 6 years, WSI has participated in the <a href="http://www.waspacegrant.org/for_students/student_internships/wsgc_internships/">Washington NASA Space Grant Program organized by the University of Washington</a>. Recent interns at Woodruff Scientific have worked on projects such as magnetic coil calibration, analytic modeling of the compression of a plasma, and computer simulations of a plasma. Announcements are usually made in January, and application deadlines are usually set for mid-march.  We are always keen to hear from interested interns outside of this program, too.</p>
<h4>BOOTCAMP</h4>
<p>During the summer recess, we hold a one week introductory course on scientific computing.  The agenda is quite intense, but it is aimed as a refresher for those with some computing experience, and benefits from a trip to the Paul Allen <a href="http://www.livingcomputermuseum.org/">Living Computer Museum.</a>  The first agenda can be found <a href="http://woodruffscientific.com/wp/wp-content/uploads/2010/06/bootcamp.pdf">here</a>.</p>

<h2> Associates </h2>
<p>Associates Program is for prior employees of Woodruff Scientific (and those who wish to be kept &#8216;in the loop&#8217;), who are kept posted with quarterly research updates and opportunity announcements/schedules.   Every quarter we send out a summary of opportunities to Associates, and a schedule for writing to meet deadlines &#8211; DOE opportunities (mainline and SBIR), DOD (AFRL, NRL), etc are included, as well as others that may not be so directly proposal-oriented.  We will hold a conference call to discuss the opportunity and how we might respond.  As an Associate we can give you access to our centralized scientific computing resources &#8211; basically: a small cluster onsite that we run/debug our codes on, replete with open source applications, libraries and tools.  We list associates bios on the website.</p>
<p> Please send an application (including a 3 line bio), stating interest in computing resources to  <a href="mailto:hr@woodruffscientific.com">hr@woodruffscientific.com</a>.</p>

    </div> <!-- /container -->
    </div> <!-- /wrap -->

	<?php
	$footer = file_get_contents('footer.html');
	echo $footer;	
	?>	   
  </body>
</html>
