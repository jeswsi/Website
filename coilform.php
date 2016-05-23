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

  <body onload='hideTotal()'>
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
  		<li><a href="hh">Helmholtz Coils</a></li>
      <li class="active">Helmholtz Coil Calculator</li>
	</ol>
	
	<h1>Helmholtz Coil Calculator</h1>

      <p><a href="img/HHcoil2.jpg"><img alt="Coil1" src="img/HHcoil2.jpg" width="300" height="129" /></a>
    </p>
      
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


    


  <div class="clearfix">
  </div>
  <blockquote><a href="hh">Click for more information on Custom Helmholtz Coils</a></blockquote>

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
