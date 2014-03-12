<!DOCTYPE html>
<html lang="en">
  <head>
	<?php
	$head = file_get_contents('header.html');
	echo $head;	
	?>
		<meta name="description" content="Contact information for Woodruff Scientific, Inc.">
  <title>Contact | Woodruff Scientific, Inc.</title>
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
	<h1>Contact</h1>
<blockquote>4000 Aurora Ave (Suite 6)<br />
Seattle, WA 98103<br />
USA<br />

</blockquote>
<p>(206) 905 9477</p>
<p>Company Information: <a href="mailto:info@woodruffscientific.com">info@woodruffscientific.com</a> </p>
<p>Accounting and Payment inquiries: <a href="mailto:accounting@woodruffscientific.com">accounting@woodruffscientific.com</a></p>
<p>Job inquiries: <a href="mailto:hr@woodruffscientific.com">hr@woodruffscientific.com</a></p>
<p>Sales inquiries: <a href="mailto:sales@woodruffscientific.com">sales@woodruffscientific.com</a></p>

    </div> <!-- /container -->
    </div> <!-- /wrap -->

	<?php
	$footer = file_get_contents('footer.html');
	echo $footer;	
	?>	   
  </body>
</html>
