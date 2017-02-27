<!-- SHTML Wrapper - 404 Not Found -->
<!DOCTYPE html>
<html lang="en">
  <head>
	<?php
	$head = file_get_contents('header.html');
	echo $head;	
	?>
  <meta name="description" content="404 File Not Found">
  <title>404 | Woodruff Scientific, Inc.</title>
  </head>

  <body>
<?php $googleTagManager = file_get_contents('googleTagManager.html'); echo $googleTagManager; ?>
    <div id="wrap">
    <div class="container">

	<?php
	$navbar = file_get_contents('navbar.html');
	echo $navbar;	
	?>	
	<div class="jumbotron">
	<h1>404 Error File Not Found</h1>
	<p class="center">The page you are looking for might have been removed, 
had its name changed, or is temporarily unavailable.</p>
	<p class="center"><a href="http://www.woodruffscientific.com">Go back to the main page</a></p>
	</div>
    </div> <!-- /container -->
    </div> <!-- /wrap -->

	<?php
	$footer = file_get_contents('footer.html');
	echo $footer;	
	?>	   
  </body>
</html>
