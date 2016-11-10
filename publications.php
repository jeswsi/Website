<!DOCTYPE html>
<html lang="en">
  <head>
	<?php
	$head = file_get_contents('header.html');
	echo $head;	
	?>
  <meta name="description" content="">
  <title>TITLE | Woodruff Scientific, Inc.</title>

  <title>Publications | Woodruff Scientific, Inc.</title>
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
 	 	<li><a href="#">Subsection</a></li>
  		<li class="active">Current Page</li>
	</ol>

	<h1>Title</h1>
	<p>Paragraph</p>


	<h1>Publications</h1>
	<p>we're awesome!</p>
	<ul>
		<li><a href="files/ech_aps08_poster.pdf">Link to cool file</a></li>
	<ul>


    </div> <!-- /container -->
    </div> <!-- /wrap -->

	<?php
	$footer = file_get_contents('footer.html');
	echo $footer;	
	?>	   
  </body>
</html>
