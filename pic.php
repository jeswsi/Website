<!DOCTYPE html>
<html lang="en">
  <head>
	<?php
	$head = file_get_contents('header.html');
	echo $head;	
	?>
  <meta name="description" content="">
  <title>PIC Simulations | Woodruff Scientific, Inc.</title>
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
      	  <li><a href="services">Services</a></li>
      	  <li><a href="physics">Physics</a></li>
	  <li class="active">PIC Simulations</li>
  </ol>
          <ul class="left">
            <li><a href="#nimrod">NIMROD</a></li>
            <li><a href="#hifi">HiFi</a></li>
            <li><a href="#bout">BOUT++</a></li>
            <li><a href="#openfoam">OpenFOAM</a></li>
          </ul>

	<h1>PIC Simulations</h1>
  <p>We have started simulations of microwave sources using MAGIC.  MAGIC is electromagnetic particle-in-cell finite-difference, time-domain (EM PIC FDTD) software for simulating plasma physics processes, i.e., those processes that involve interactions between space charge, electromagnetic fields, and background gaseous media.</p>



    <div class="col-md-6">
      <p><a href="img/Simulations/PICfig.png"><img src="img/Simulations/PICfig.png" alt="iter" width="300" height="184" /></a><br />
ITER</p>
    </div>
    <div class="col-md-6">
      <p><a href="img/Simulations/PICfig2.png"><img src="img/Simulations/PICfig2.png" alt="diiid" width="300" height="185" /></a><br />
DIII-D</p>
    </div>
    
  

  </div> <!-- /container -->
    </div> <!-- /wrap -->

	<?php
	$footer = file_get_contents('footer.html');
	echo $footer;	
	?>	   
  </body>
</html>
