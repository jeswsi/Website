<!DOCTYPE html>
<html lang="en">
  <head>
	<?php
	$head = file_get_contents('header.html');
	echo $head;	
	?>
  <meta name="description" content="Business Team of Woodruff Scientific, Inc.">
  <title>Business Team | Woodruff Scientific, Inc.</title>
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
  		<li class="active">Business Team</li>
	</ol>
	<h1>Business Team</h1>


	<img src="img/Headshots/simon.jpg" alt="Image of Simon Woodruff" style="width:128px;" align="left" Hspace="10">

			<h3><strong><a href="https://www.linkedin.com/in/simonwoodruff">Dr. Simon Woodruff</a>
</strong><span class="text-muted">President & CEO</span></h3>
<p>Since 2005, Woodruff has lead the company through initial start-up phases.  He has established advisory boards consisting of  energy industry and scientific leaders, building the company from the ground up and opening the laboratory in Ballard, managing contracts from DOE, national laboratories and universities.  In the last year, under his direction, WSI beat 40 other companies for the opportunity to present to investors for the first time at the Northwest Entrepreneur Network&#8217;s <a href="http://www.nwen.org/index?option=com_events&amp;Itemid=15&amp;id=526">&#8216;First Look Forum&#8217;</a>, and subsequently was able to meet with leading venture capitalists.  He developed the strategy for the business over several years taking in advice at annual strategic planning meetings, inviting local experts and business leaders, following leadership during his employment in the Lawrence Livermore National Laboratory Fusion Energy Program.  Woodruff has ensure that the company maintains strategic partnerships with many organizations locally, nationally and internationally, and aims to continue to grow the business.</p>

<br></br>



<img src="img/Headshots/felicia.jpg" alt="Image of Felicia Edwards" style="width:128px;" align="left" Hspace="10">

<h3><strong><a href="https://www.linkedin.compub/felicia-edwards/16/447/13a">Felicia Edwards </a></strong><span class="text-muted">Office Manager</span></h3>
<p>Felicia graduated with a bachelor's degree in Mathematics from the University of Washington. She has held various positions ranging from teaching to finances. She loves traveling along with meeting other people and learning about other cultures. Her pastimes include reading, soccer/football and eating.</p>

<br></br>
<br></br>


<h1>Accounting</h1>

<h3><strong><a href="http://www.greenwoodcpa.com/AmandaORourke.php">Amanda O'Rourke</a></strong>
<span class="text-muted">CPA, Greenwood Ohlund and Co. LLP</span></h3>
<p>Amanda is a licensed CPA who specializes in nonprofit services including attestation engagements, tax preparation and financial management. She has been with Greenwood, Ohlund & Co., LLP since 2009 and brings a diverse background in public accounting, as well as financial management in the nonprofit sector and the construction industry. </p>



<h1>Legal</h1>
<h3><a href="http://www.dwt.com/People/JosephWhitford"><strong>Joseph Whitford</strong></a>
 <span class="text-muted">Legal counsel, Davis Wright and Tremaine, LLP</span></h3>
<p>Joe Whitford focuses his corporate finance practice in the emerging-company sector, where he has served for more than 30 years as general counsel and advisor to high-growth software, health care, medical device, biotech, wireless and specialty retail business ventures. He has guided management, boards of directors and investors through founder formation matters, equity compensation planning, angel and venture capital investments, strategic partnerships, license arrangements, mergers and acquisitions, and public offerings.</p>

<h1> Advisory board </h1>


<h3><strong><a href="https://uk.linkedin.com/in/william-woodruff-6a6b6231">William Woodruff</a></strong> <span class="text-muted">Business advisory board member</span></h3>
<p>William is a Senior Associate at PricewaterhouseCoopers in the Channel Islands, UK. He qualified as a Charted Accountant working in London with a client base primarily consisting of SMEs including those benefiting from Research and Development tax relief. After qualifying William moved to Guernsey to further his specialism within the Financial Services industry. Since then he has audited and advised LSE Premium Listed funds, Private Equity funds, and Venture Capitalist funds. His expertise includes, Financial Reporting, Management Reporting, and Financial & Strategic Analysis. William's academic background includes a bachelor's degree in Physics and a Master's degree in Analytical Science from the University of Warwick.</p>



<h3><strong><a href="http://uk.linkedin.com/pub/matt-woodruff/1/780/904/">Matthew Woodruff</a></strong> <span class="text-muted">Business advisory board member</span></h3>
<p>Prior to joining Lookred® as a director Matthew spent five years as a Senior Project Manager with Microsoft Consulting Services in the UK. During his time at Microsoft, Matthew gained extensive experience of managing high profile public sector programmes ranging from short specialist consulting engagements to multi-year, multi-million pound projects with large development teams and multiple partner organisations. Notable projects included management of the application development of the Government Gateway and working with multiple regional Police Authorities – leading programmes of work delivering infrastructure and application platform projects across identity and access management, messaging and collaboration and business intelligence. Matthew first became involved in education sector work and met Chris managing the Microsoft BSF Showcase, the success of which led to securing further funding and the publication of the Microsoft BSF Technology Guidance and successful technology showcases for both Further Education, and Higher Education sectors.</p>



    </div> <!-- /container -->
    </div> <!-- /wrap -->

	<?php
	$footer = file_get_contents('footer.html');
	echo $footer;	
	?>	   
  </body>
</html>
