<!DOCTYPE html>
<html lang="en">
  <head>
	<?php
	$head = file_get_contents('header.html');
	echo $head;	
	?>
	<meta name="description" content="Testimonials from WSI's customers.">
  <title>Testimonials | Woodruff Scientific, Inc.</title>
  </head>

  <body>
<?php $googleTagManager = file_get_contents('googleTagManager.html'); echo $googleTagManager; ?>
    <div id="wrap">
    <div class="container">

	<?php
	$navbar = file_get_contents('navbar.html');
	echo $navbar;	
	?>	

	<h1>Testimonials</h1>
	<p>Woodruff Scientific has provided products and services to universities, national labs, and private companies. See what our customers are saying:</p>
	
	<h3>Pulsed Power Capacitor Bank Design</h3>
	<blockquote>“Princeton University contracted WSI to design the capacitor banks for the FLARE experiment that is being built at PPPL. In my role of power electronics control engineer I was the main technical point of contact at PPPL.The contract included circuit simulations, dimensioning of components, design of the control system, as well as the creation of the electrical and mechanical design for all capacitor banks.  Throughout the contract the collaboration with WSI was extremely fruitful. Throughout the work WSI provided creative and useful solutions for design challenges clearly showing that they had a deep understanding of the problem space and experience in providing solutions. Everybody at WSI was very committed to keep the project moving forward and on schedule, even though that meant a number a long days (and nights). I will definitely keep WSI in mind for other projects that require prototype/first article design and development.”
<footer>Frank Hoffmann, Princeton University Plasma Physics Laboratory</footer></blockquote>


	<h3>Vacuum compatible Helmholtz Coil</h3>
	<blockquote>“Woodruff Scientific designed and manufactured an in-vacuum Helmholtz coil and mounting structure to our specifications. We will be using the coils to generate an applied magnetic field for basic plasma physics and fusion-energy-science related experiments. Simon and his team were highly responsive to our needs and remained engaged and helpful even after the coils were delivered. Thank you very much!”
<footer>Dr. Scott Hsu, P 24 Plasma Physics Group, Los Alamos National Laboratory</footer></blockquote>

	<h3>Control and Data Aquisition System</h3>
	<blockquote>“Woodruff Scientific have made an excellent complete control and data acquisition system for our Laboratory Astrophysical Jet experiment. The system was expertly tailored to our needs with COTS National Instruments and proprietary custom hardware, operated by a full set of LabView interfaces coded to best practise design patterns. The hardware and services provided by Woodruff Scientific are among the most cost-effective in the industry. Highly recommended.”
<footer>Prof. Sett You and Jens Von der Linden, University of Washington, 2013</footer></blockquote>

	<h3>Pulsed Power Plasma Experiment</h3>
	<blockquote>“Woodruff Scientific Inc. constructed the Florida A&M University (FAMU)/Center for Plasma Science and Technology (CePaST) STPX (Spheromak Turbulent Plasma Experiment) under a subcontract funded by the U.S. Department of Energy… The STPX achieved plasma during the first attempt and CePaST is very pleased with the work performed by Woodruff Scientific Inc.” <a href="pdf/Woodruff-Testimonial.pdf">Full Testimonial (pdf)</a>
	<footer>Charles A. Weatherford, Professor of Physics and Director of the Florida A&M University Center for Plasma Science and Technology 2013</footer></blockquote>

	<!-- Begin MailChimp Signup Form -->
<link href="//cdn-images.mailchimp.com/embedcode/slim-10_7.css" rel="stylesheet" type="text/css">
<style type="text/css">
	#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
	/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>
<div id="mc_embed_signup" class="col-md-5">
<form action="https://woodruffscientific.us10.list-manage.com/subscribe/post?u=f4b64a3a93dfc6088f685111d&amp;id=92569d866b" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
	<label for="mce-EMAIL">Check out what we're doing at WSI! Subscribe to our monthly newsletter:</label>
	<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_f4b64a3a93dfc6088f685111d_92569d866b" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
    </div>
</form>
</div>

<!--End mc_embed_signup-->

    </div> <!-- /container -->
    </div> <!-- /wrap -->

	<?php
	$footer = file_get_contents('footer.html');
	echo $footer;	
	?>	   
  </body>
</html>

