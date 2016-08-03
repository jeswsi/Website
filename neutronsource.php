<!DOCTYPE html>
<html lang="en">
  <head>
	<?php
	$head = file_get_contents('header.html');
	echo $head;	
	?>
		<meta name="description" content="Neutron sources for fusion, plasma energy, medical, and physics labs. WSI has built complete devices for clients such as Florida A&M (STPX)">
  <title>Neutron Sources | Woodruff Scientific, Inc.</title>
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
 	 	<li><a href="devices">Devices</a></li>
  		<li class="active">Neutron Sources</li>
	</ol>
	<h1>Neutron Sources</h1>
	<p>
The market of radiopharmaceuticals is dominated by diagnostic
radioisotopes, comprising of SPECT and PET radioisotopes. The lion's
share of the SPECT market is taken up by Tc-99m, whereas the PET market
is dominated by F-18FDG isotope. Furthermore, the PET market will
witness a double digit growth during the forecast period. The
therapeutic segment contributes only 10% to the global
radiopharmaceuticals market and I-131 has been considered as the gold
standard for various oncology treatments in a combined therapy. Global
nuclear medicines market is majorly driven by the increasing adoption of
PET and SPECT scanners, and rising awareness for radiopharmaceuticals,
whereas short half life of isotopes and stringent regulations are the
factors that are hindering the growth of radiopharmaceuticals worldwide.
</p>
<p>
According to a new market report published by Transparency Market
Research, <a href="http://www.prweb.com/releases/2013/9/prweb11107846.htm">Radiopharmaceuticals Market (Global Industry Analysis, Size,
Share, Trends and Forecast, 2012 to 2018)</a>,
the global market
for radiopharmaceuticals was valued at approximately USD 3.8 billion in
2011 and is expected to reach USD 12.2 billion by 2018. North America
led the global radio-pharmaceuticals market with the highest market
share as Canada continues to be the largest exporter of uranium and
nuclear technology, forming the backbone of nuclear medicine and imaging
studies.
</p>
<p>
The competitive advantage that fusion neutron sources have over
traditional isotope production is that the system is much more compact
and independent of any nuclear fission source.  US Congressional Action
first introduced in 2009, passed House (revised version has passed
Senate recently) would ban US exports of Heavy Enriched Uranium for
targets to Western Europe and Canada, but our system is vastly
different, relying on a source of fusion neutrons.</p>
	<blockquote><a href="ns.html">Neutron Source References</a></blockquote>

<p><strong>We are looking for collaborators on this technical development
topic, for further information, please <a href="mailto:info@woodruffscientific.com">contact us</a></strong></p>
    </div> <!-- /container -->
    </div> <!-- /wrap -->

	<?php
	$footer = file_get_contents('footer.html');
	echo $footer;	
	?>	   
  </body>
</html>
