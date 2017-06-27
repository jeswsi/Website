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
          
 <div class="col-md-6">
      <p><a href="img/Simulations/PICfig.png"><img src="img/Simulations/PICfig.png" alt="iter" width="300" height="184" /></a></p>
    </div>
    <div class="col-md-6">
      <p><a href="img/Simulations/PICfig2.png"><img src="img/Simulations/PICfig2.png" alt="diiid" width="300" height="185" /></a></p>
    </div>

          

	<h1>PIC Simulations</h1>

   <div class="col-md-8">
            <style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;}
.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
.tg .tg-yw4l{vertical-align:top}
</style>
<table class="tg">
  <tr>
    <td class="tg-yw4l"><strong>Product</strong></td>
    <td class="tg-yw4l"><strong>Spec Sheet</strong></td>
    <td class="tg-yw4l"><strong>References</strong></td>
    <th class="tg-yw4l"></th>
  </tr>
    <tr>
    <td class="tg-yw4l">PIC Simulations</td>
    <td class="tg-yw4l"><a href="mailto:sales@woodruffscientific.com?subject=PIC Simulations">Request spec sheet</a></td>
    <td class="tg-yw4l"><a href="http://www.orbitalatk.com/magic/FormsPDF/MagicManual.pdf">PIC References</a></td>
    <th class="tg-yw4l"><a class="btn btn-lg btn-primary" href="mailto:sales@woodruffscientific.com?subject=PIC Simulations Quote" role="button">Get a Quote &raquo;</a></th>
  </tr>
</table>
  <p>We have started simulations of microwave sources using MAGIC.  MAGIC is electromagnetic particle-in-cell finite-difference, time-domain (EM PIC FDTD) software for simulating plasma physics processes, i.e., those processes that involve interactions between space charge, electromagnetic fields, and background gaseous media.</p>

    
  

  </div> <!-- /container -->
    </div> <!-- /wrap -->

	<?php
	$footer = file_get_contents('footer.html');
	echo $footer;	
	?>	   
  </body>
</html>
