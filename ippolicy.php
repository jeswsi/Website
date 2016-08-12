<!DOCTYPE html>
<html lang="en">
  <head>
	<?php
	$head = file_get_contents('header.html');
	echo $head;	
	?>
  <meta name="description" content="Woodruff Scientific, Inc. IP Policy.">
  <title>IP Policy | Woodruff Scientific, Inc.</title>
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
 	 	<li><a href="company">Company</a></li>
  		<li class="active">IP Policy</li>
	</ol>

	<h3>MUTUAL NON-DISCLOSURE AGREEMENT</h3>
	

<p>This Agreement is made and entered into as of the last date signed below (the "Effective Date") by and between ___________________, a ___________ corporation having its principal place of business at Woodruff Scientific, Inc. and __________________________, a ___________ corporation whose principal mailing address is _______________________ (the "Second Party").</p>

	<p>WHEREAS Woodruff Scientific, Inc. and the Second Party (the "Parties") have an interest in participating in discussions wherein either Party might share information with the other that the disclosing Party considers to be proprietary and confidential to itself (Confidential Information); and</p>
	
	<p>WHEREAS the Parties agree that Confidential Information of a Party might include, but not be limited to that Party's: 

	<ol>
		<li>business plans, methods, and practices; </li>
		<li>personnel, customers, and suppliers;</li>
		<li>inventions, processes, methods, products, patent applications, and other proprietary rights; or </li>
		<li>specifications, drawings, sketches, models, samples, tools, computer programs, technical information, or other related information;</li>
	</ol>		
	</p>

	<p>NOW, THEREFORE, the Parties agree as follows:</p>

	<ol>
		<li> Either Party may disclose Confidential Information to the other Party in confidence provided that the disclosing Party identifies such information as proprietary and confidential. Such notification to be done orally, by e-mail or written correspondence, or via other means of communication as might be appropriate.
		</li>
		
		<li>When informed of the proprietary and confidential nature of Confidential Information that has been disclosed by the other Party, the receiving Party ("Recipient") shall, for a period of three (3) years from the date of disclosure, refrain from disclosing such Confidential Information to any contractor or other third party without prior, written approval from the disclosing. The Recipient shall ensure that any and all individuals he/she gives access to Confidential Information disclosed under this Agreement, is informed of its proprietary and confidential nature and is required to abide by the terms of this Agreement.
		</li>  
		
		<li>All Confidential Information disclosed under this Agreement shall be and remain the property of the disclosing Party and nothing contained in this Agreement shall be construed as granting or conferring any rights to such Confidential Information on the other Party.  The Recipient shall honor any request from the disclosing Party to promptly return or destroy all copies of Confidential Information disclosed under this Agreement and all notes related to such Confidential Information.
		</li>  

		<li>The terms of this Agreement shall not be construed to limit either Party's right to develop independently or acquire products without use of the other Party's Confidential Information.
		</li>

		<li>Neither Party will, without prior approval of the other Party, make any public announcement of or otherwise disclose the existence or the terms of this Agreement.
		</li>

		<li>This Agreement shall remain in effect for a period of three (3) years from the Effective Date unless otherwise terminated by either Party giving notice to the other of its desire to terminate this Agreement. The requirement to protect Confidential Information disclosed under this Agreement shall survive termination of this Agreement.
		</li>


    </div> <!-- /container -->
    </div> <!-- /wrap -->

	<?php
	$footer = file_get_contents('footer.html');
	echo $footer;	
	?>	   
  </body>
</html>
