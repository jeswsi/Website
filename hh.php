<!DOCTYPE html>
<html lang="en">
  <head>
	<?php
	$head = file_get_contents('header.html');
	echo $head;	
	?>
  <meta name="description" content="Helmholtz coils for fusion, plasma energy, and physics labs. Custom sizing and materials available.">
  <title>Helmholtz Coils | Woodruff Scientific, Inc.</title>
  <script type="text/javascript" src="scripts/js/formcalculations.js"></script>
  <link href="scripts/styles/coilform.css" rel="stylesheet" type="text/css" />
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
		<li><a href="products">Products</a></li>
 	 	<li><a href="magnets">Magnets</a></li>
  		<li class="active">Helmholtz Coils</li>
	</ol>
	
	<h1>Helmholtz Coils</h1>
	  <p class="center">
      <a href="img/LANLcoils.jpg"><img src="img/LANLcoils.jpg" width="224" height="300"></a>
      
    
      <a href="img/HH_coil.jpg"><img src="img/HH_coil.jpg" width="224" height="300"></a><br />
      <span class="text-muted">Fig 1. Vacuum-compatible 23″OD HH coils designed for LANL’s PLX experiment.
      <br />Fig 2. Vacuum-compatible  HH coils designed for The Aerospace Corporation.</span>
    </p>

    <p>WSI has experience designing and building custom Helmholtz coils for various applications. Helmholtz coils produce a uniform magnetic field
      in between the coils.</p>

  <h2>Configurations</h2>
      <p>
      Copper wire and Stainless Steel or Aluminum wire-forms. Custom sizing, wire insulation and materials available. We also offer cooling for high power configurations.
    </p>
  <div class="col-md-6">
    
    <p><a href="img/HH_coil_render.png"><img alt="Coil1" src="img/HH_coil_render.png" width="375" /></a>
    </p>
  </div>

  <div class="clearfix">
  </div>
  <p><a class="btn btn-lg btn-primary" href="mailto: sales@woodruffscientific.com?subject=HH RFQ &amp;body=L:%0D%0A%0D%0APeak%20current%20:%0D%0A%0D%0AOD:%0D%0A%0D%0AID:%0D%0A%0D%0AVacuum-compatible?(yes/no):%0D%0A%0D%0AShort%20description%20of%20the%20application:%0D%0A%0D%0APlease%20find%20attached%20a%20sketch/engineering%20drawing%20of%20the%20application.%0D%0A%0D%0ANeeded%20by(Date):%0D%0A%0D%0AContact(Name/email/phone/fax/etc):" role="button">Get a Quote &raquo;</a></p>


  <h2>Helmholtz Coil Calculator</h2>
      
        <form action="" id="coilform" onsubmit="return false;">
        <div>
            <div class="cont_order">
               <fieldset>
                <br/>
                <label >Wire Gauge</label>
         
                <select id="gauge" name='gauge' onchange="calculateTotal()">
                <option value="None">Select Gauge</option>
                <option value="OOOO">OOOO</option>
                <option value="OOO">OOO</option>
                <option value="OO">OO</option>
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
               </select>
                <br/>

                <p>
                <label class="inlinelabel" for='coilradius'>Coil Radius[m]</label><br />
                <input type="text"  id="coilradius" name="coilradius" onchange="calculateTotal()" value="Coil Radius"  />
                </p>
               
                <p>
                <label class="inlinelabel" for='pulsetime'>Pulse Time [s]</label><br />
                <input type="text"  id="pulsetime" name="pulsetime" onchange="calculateTotal()" value="Pulse Time"  />
                </p>

                <p>
                <label class="inlinelabel" for='Im'>Current in Coil [A]</label><br />
                <input type="text"  id="Im" name="Im" onchange="calculateTotal()" value="Current"  />
                </p>

                <p>
                <label class="inlinelabel" for='n'>Number of Turns</label><br />
                <input type="text"  id="n" name="n" onchange="calculateTotal()" value="Number of Turns"  />
                </p>
                <div id="totalPrice"></div>
                
                </fieldset>
            </div>
     
<!--          <div class="cont_details">
              <fieldset>
                <legend>Contact Details</legend>
                <label for='name'>Name</label>
                <input type="text" id="name" name='name' />
                <br/>
                <label for='address'>Address</label>
                <input type="text" id="address" name='address' />
                <br/>
                <label for='phonenumber'>Phone Number</label>
                <input type="text"  id="phonenumber" name='phonenumber'/>
                <br/>
                </fieldset>
            </div>
            <input type='submit' id='submit' value='Submit' onclick="calculateTotal()" /> -->
        </div>  
       </form>
 
  
<!--
	<div class="panel panel-default">
  <div class="panel-heading">Helmholtz Coils</div>
  <div class="panel-body">
    <p>Custom sizes or materials are also available. <a href="mailto:sales@woodruffscientific.com">Email us</a> for a consultation.</p>
  </div>

  <!-- Table --/>
  <table class="table">
    <thead><tr>
	<th>Inner Dia</th>
	<th>Material</th>
	<th># of turns</th>
	<th></th>
    </tr></thead>
    <tr>
	<td>1m</td> 
	<td>Copper</td>
	<td>100</td>
	<td><script 
    data-tax="475" 
    data-shipping="30" 
    data-currency="USD" 
    data-amount="5000" 
    data-quantity="1" 
    data-name="1m Diameter HH coil" 
    data-button="cart" src="js/external/paypal-button-minicart.min.js?merchant=simon@woodruffscientific.com"
></script></td>
    <tr>
    <tr>
	<td>1m</td> 
	<td>Copper</td>
	<td>100</td>
	<td><script 
    data-tax="475" 
    data-shipping="30" 
    data-currency="USD" 
    data-amount="5000" 
    data-quantity="1" 
    data-name="1m Diameter HH coil" 
    data-button="cart" src="js/external/paypal-button-minicart.min.js?merchant=simon@woodruffscientific.com"
></script></td>
  </table>
</div> -->




    </div> <!-- /container -->
    </div> <!-- /wrap -->

	<?php
	$footer = file_get_contents('footer.html');
	echo $footer;	
	?>	   
  </body>
</html>
