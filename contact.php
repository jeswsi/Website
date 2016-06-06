<!DOCTYPE html>
<html lang="en">
  <head>
	<?php
	$head = file_get_contents('header.html');
	echo $head;	
	?>
		<meta name="description" content="Contact information for Woodruff Scientific, Inc.">
 <title>Contact | Woodruff Scientific, Inc.</title> 
     <!-- <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script>
    //   function initialize() {
    //     var myLatlng = new google.maps.LatLng(47.655500,-122.346776);
    //     var map_canvas = document.getElementById('map_canvas');
    //     var map_options = {
    //       center: myLatlng,
    //       zoom: 16,
    //       mapTypeId: google.maps.MapTypeId.ROADMAP
    //     }
    //     var map = new google.maps.Map(map_canvas, map_options)
    //       var marker = new google.maps.Marker({
    //  	 position: myLatlng,
    //  	 map: map,
 		 // });
    //   }
    //   google.maps.event.addDomListener(window, 'load', initialize);
    // </script>-->
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
  		<li class="active">Contact</li>
	</ol>
	<div class="col-md-5">
		<h1>Seattle Office</h1>
		<blockquote>4000 Aurora Ave (Suite 6)<br />
		Seattle, WA 98103<br />
		USA<br />
		</blockquote>
		<p>(206) 905 9477</p>
		<p>Company Information: <a href="mailto:info@woodruffscientific.com">info@woodruffscientific.com</a> </p>
		<p>Accounting and Payment inquiries: <a href="mailto:accounting@woodruffscientific.com">accounting@woodruffscientific.com</a></p>
		<p>Job inquiries: <a href="mailto:hr@woodruffscientific.com">hr@woodruffscientific.com</a></p>
		<p>Sales inquiries: <a href="mailto:sales@woodruffscientific.com">sales@woodruffscientific.com</a></p>
	</div>

	<div class="col-md-7">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2687.4805077180263!2d-122.34897134841707!3d47.65566109247786!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x549015aad468708d%3A0xafdf68330916b3be!2s4000+Aurora+Ave+N%2C+Seattle%2C+WA+98103!5e0!3m2!1sen!2sus!4v1465236780988" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>

	<div class="clearfix"></div>

	<div class="col-md-5">
		<h1>San Diego Office</h1>
		<blockquote>7950 Silverton Ave, Suite 207<br />
		San Diego, CA 92121<br />
		USA<br />
		</blockquote>
		<p>(206) 905 9477</p>
	</div>

	<div class="col-md-7">
		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d837.5646660789685!2d-117.1501653!3d32.8913287!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80dbf8b62777bd7b%3A0x4e96da6f4a2fb60a!2s7950+Silverton+Ave+%23207%2C+San+Diego%2C+CA+92126!5e0!3m2!1sen!2sus!4v1465236645031" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>

	<div class="clearfix"></div>


	<div class="col-md-5">
		<h1>UK Office</h1>
		<blockquote>D5 Culham Science Center<br />
		Abingdon, OX14 3DB<br />
		UK<br />
		</blockquote>
		<p>01865 52 2665</p>
	</div>

	<div class="col-md-7">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2475.109102099549!2d-1.2342306483241903!3d51.657838807413!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4876bf484ff7a29d%3A0xb69429213e887e1!2sCulham+Science+Centre%2C+Abingdon%2C+Oxfordshire+OX14+3EB%2C+UK!5e0!3m2!1sen!2sus!4v1465236819750" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>





    </div> <!-- /container -->
    </div> <!-- /wrap -->

	<?php
	$footer = file_get_contents('footer.html');
	echo $footer;	
	?>	   
  </body>
</html>
