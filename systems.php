<!DOCTYPE html>
<html lang="en">
  <head>
	<?php
	$head = file_get_contents('header.html');
	echo $head;	
	?>
  <meta name="description" content="Systems analysis and costing for fusion systems.">
  <title>Systems Analysis | Woodruff Scientific, Inc.</title>
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
       	  <li li class="breadcrumb-item"><a href="index">Home</a></li>
      	  <li li class="breadcrumb-item"><a href="physics">Physics</a></li>
	  <li class="breadcrumb-item active">Fusion Systems Code</li>
	</ol>


	<div class="row">
  <div class="col-md-3">
  <?php
  $navbar = file_get_contents('systems-catalog-nav.html');
  echo $navbar;
  ?>
  </div>


	<div class="col-md-9">
	
	<h1>Fusion Systems Costing</h1>
	<p><a href="pdf/ARPAE_Costing_Report_2017.pdf"><img src="img/Simulations/Costing.JPG" alt="cost" width="350" height="425" Hspace="10"></a></p>

</div>
</div><!-- row -->

<div class="jumbotron"><h4>
Fusion reactor costing requires a multidisciplinary team to address matters from construction through to neutronics. WSI offers full systems analysis and costing for fusion systems. If you  need assistance costing your fusion system, please reach out to our scientific team:<br>
<a href="mailto:sales@woodruffscientific.com" onclick="return gtag_report_conversion('mailto:sales@woodruffscientific.com');">Email us for more information</a> or call us at <a href="callto://+15054073259">(505) 407-3259</a>
</h4></div>

<p>WSI offers three options for systems analysis and costing: a standard costing report, a cost driver analysis, and a cost reduction program. In each offering the level of customer interaction increases from minimal in the first to maximal in the last.

<a name="costreport"></a>
<h1>Option 1: Standard Costing Report</h1>

<p>The standard costing report provides a calculation of the Overnight Capital Cost (OCC), Total Capital Cost (TCC) and Levelized Cost of Electricity (LCOE) for fusion energy systems following a methodology that was developed by the ARIES team.  The method starts with a power balance (derived from the best available modeling), and some basic plasma geometrical parameters to establish a radial build (usually based on prior art, and does not get into the neutronics analysis).  The build is then modeled in 3D using a contemporary CAD package to produce volumes for all of the major components, which are then costed by use of material and manufacturing cost models.  The Balance of Plant is then established around the power core.  All of the assumptions and cost bases are explained in detail in the text of the report so that any calculation or assumption can be revisited.  The report is approximately 20 pages in length.  An example TOC is shown below.</p>

<p><img class="center" src="img/systems-standard1.png" alt="standard costing report example" height="425" Hspace="10">
<img class="center" src="img/systems-standard2.png" alt="standard costing report example toc" height="425" Hspace="10"></p>

<p><a class="btn btn-lg btn-primary" href="mailto:sales@woodruffscientific.com" role="button">Contact WSI about Costing Reports &raquo;</a></p>

<a name="costdrivers"></a>
<h1>Option 2: Cost Driver Analysis</h1>

<p>For customers who wish to delve deeper into the costing analysis.</p>

<p>The calculations in a standard costing report can be simplified and expressed analytically in an excel model so that you can adapt the model quickly and inexpensively. In this way, you can develop your own cost models for principal cost components, and examine what happens to the OCC or LCOE if one cost component is changed by an innovation.  An example sheet is shown below. </p>

<p><img class="center" src="img/systems-excel.png" alt="cost driver analysis example" height="425" Hspace="10"></p>

<p><a class="btn btn-lg btn-primary" href="mailto:sales@woodruffscientific.com" role="button">Contact WSI about Cost Driver Analysis &raquo;</a></p>

<a name="costreduction"></a>
<h1>Option 3: Cost Reduction Program</h1>

<p>A cost reduction program would take as a starting point either of the products and bear down on the cost drivers.  This work will entail explaining key cost reduction strategies to fusion developers and estimating costs for their concepts to the extent these strategies can be incorporated into their plant designs and delivery plans.</p>

<p>The primary finding from recently published reactor costing is that in order to manage cost, cost control procedures need to be ubiquitous to the design, manufacturing and installation of energy systems.  A cost reduction framework starts with procedures introduced at the design stage and follows through the manufacturing process for every subsystem.  A cost reduction framework will start with a validated cost model, then rank/prioritize both cost drivers and risks associated with the project, bearing down on principal drivers, and seek to reduce those costs.  
</p>
<p>The experience will be drawn from our collective experience in cost reduction in nuclear consulting, as well as from experience on the shop floor in the management of fusion technology development (such as from NSTX-U, NCSX, ITER, etc).</p>

<p><a class="btn btn-lg btn-primary" href="mailto:sales@woodruffscientific.com" role="button">Contact WSI about Systems Cost Reduction &raquo;</a></p>


<hr>

	<h1><a href="pdf/ARPAE_Costing_Report_2017.pdf">Previous Work: ARPA-E Fusion Reactor Costing Report 2017</a></h1>
	<p>During the last 5 years, WSI has developed a costing model in collaboration with <a href="http://www.decysive.com/index.htm">Decysive Systems</a> and most recently with <a href="http://www.bechtel.com/">Bechtel</a> for the costing of most of the major fusion subsystems.  We have worked under contract with <a href="https://www.arpa-e.energy.gov/?q=arpa-e-programs/alpha">ARPA-E</a> to produce the cost analysis for 4 of the ALPHA program fusion concepts.</p>
	
	<p><a href="pdf/ARPAE_Costing_Report_2017.pdf">Click here to read the ARPA-E Fusion Reactor Costing Report 2017</a>.</p>

<br />

            <style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;}
.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
.tg .tg-yw4l{vertical-align:top}
</style>
<!-- <table class="tg">
  <tr>
    <td class="tg-yw4l"><strong>Product</strong></td>
    <td class="tg-yw4l"><strong>Spec Sheet</strong></td>
    <td class="tg-yw4l"><strong>References</strong></td>
  </tr>
    <tr>
    <td class="tg-yw4l">Fusion Systems Code</td>
    <td class="tg-yw4l"><a href="mailto:sales@woodruffscientific.com?subject=Fusion Systems Code">Request spec sheet</a></td>
    <td class="tg-yw4l">References: <a href="http://woodruffscientific.com/costing.html">WSI</a>, <a href="http://www.decysive.com/TOK.htm">Decysive</a></td>
  </tr>
</table> -->




<br>
 

		<h1>Systems Analysis Papers by Woodruff Scientific</h1>

		<ul>
		<li><a href="http://www.sciencedirect.com/science/article/pii/S0920379614005997">Fusion Engineering and Design: Cost sensitivity analysis for a 100 MWe modular power plant and fusion neutron source</a></li>

		<li><a href="http://link.springer.com/article/10.1007/s10894-010-9303-1">Journal of Fusion Energy: Why Compact Tori for Fusion?</a></li>

		<li><a href="http://link.springer.com/article/10.1007%2Fs10894-011-9472-6">Journal of Fusion Energy: Path to Market for Compact Modular Fusion Power Cores</a></li>

		<li><a href="https://www.burningplasma.org/web/ReNeW/whitepapers/5-32%20ThemeIV+CT.pdf">Burning Plasma Org: Harnessing fusion power: how does CT research contribute to this discussion?</a></li>

		<li><a href="http://fire.pppl.gov/FESAC_WP_CT_market_Woodruff.pdf">FESAC: The Path to Market for Compact Modular Fusion Power Cores</a></li>
	</ul>

		<blockquote><a href="costing.html">Costing References</a></blockquote>


    </div> <!-- /container -->
    </div> <!-- /wrap -->

	<?php
	$footer = file_get_contents('footer.html');
	echo $footer;	
	?>	   
  </body>
</html>
