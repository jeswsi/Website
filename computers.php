<!DOCTYPE html>
<html lang="en">
  <head>
	<?php
	$head = file_get_contents('header.html');
	echo $head;	
	?>
	<meta name="description" content="WSI provides linux based computing clusters and thin-clients for computational physics, CODAC, and other lab needs.">
  <title>High Performance Computing | Woodruff Scientific, Inc.</title>
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
  		<li class="active">High Performance Computing</li>
	</ol>
	<h1>High Performance Computing</h1>
	<p>Most of our computing is performed at <a href="http://www.nersc.gov/">NERSC</a> (on <a href="http://www.nersc.gov/systems/hopper-cray-xe6/">Hopper</a>, currently 24th in the <a href="http://www.top500.org/list/2013/06/">top 500</a>), however for pre-production runs and private contracts we perform jobs in-house on a small cluster.  Periodically we update our 2U 19&#8243; rack-mountable cluster (or debug node), with the latest architecture (see Fig. 1) and operating systems, libraries and applications and built to order.  Capable &#8216;thin clients&#8217; are then used to connect to centralized scientific computing resources on the cluster. (Accounts are available on our cluster currently only through our Associates Program).</p>

<p>WSI can assemble and configure computing clusters and thin-clients (linux based) for your needs.</p>

<h3>Computing Clusters</h3>

    <div class="col-md-6">
      <p><a href="img/cluster.JPG"><img src="img/cluster.JPG" alt="computing cluster" width="300" /></a><br />
        Computing Cluster (rack mount)</p>
    </div>
    <div class="col-md-6">
    	<p>WSI will install and configure necessary operating systems, libraries and applications for high performance computing applications.</p>
    	<p>Typically installed are: <a href="http://www.ubuntu.com/">Ubuntu</a>, <a href="https://computing.llnl.gov/linux/slurm/">SLURM</a> Resource Manager, <a href="http://www.mcs.anl.gov/research/projects/mpi/">MPI</a>, <a href="http://crd-legacy.lbl.gov/~xiaoye/SuperLU/">SuperLU</a>, <a href="http://www.netlib.org/blas/">BLAS</a>, <a href="http://glaros.dtc.umn.edu/gkhome/views/metis">ParMETIS</a>, <a href="http://en.wikipedia.org/wiki/Network_File_System">NFS</a>, compilers, etc.</p>
    	<p>Example computing clusters:</p>
    	<p>Example 1: 2 x Dell Power Edge 2900 Servers each with two Quad-Core Intel Xeon 5300
sequence processors at 2.66GHz; 32Gb RAM</p>
		<p>Example 2: Xeon E5-2695 v2 12 2.4 GHz 30 MB 115 Watt as base</p>
    </div>
<div class="clearfix"></div>

<h3>Thin Clients</h3>
    <div class="col-md-6">
      <p><a href="img/thinclient.JPG"><img src="img/thinclient.JPG" alt="thin client" width="300"   /></a><br />
        Thin Client</p>
    </div>
    <div class="col-md-6">
    	<p>Thin clients are used to connect to centralized scientific computing resources on a cluster.</p>
    	<p>Example thin client:</p>
    	<p>Ubuntu or Windows 7<br />
    		Dual-Core 3.2GHz CPU<br />
    		4Gb RAM<br />
    		Stand alone Graphics (if needed)</p>
    </div>

    <div class="clearfix"></div>
<p><a class="btn btn-lg btn-primary" href="mailto:sales@woodruffscientific.com" role="button">Get a Quote &raquo;</a></p>
    </div> <!-- /container -->
    </div> <!-- /wrap -->

	<?php
	$footer = file_get_contents('footer.html');
	echo $footer;	
	?>	   
  </body>
</html>
