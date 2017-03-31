
<!DOCTYPE html>
<html lang="en">
  <head>
  <?php
  $head = file_get_contents('header.html');
  echo $head; 
  ?>
  
       <meta name="description" content="Products and Services for Plasma Physics, Fusion, and Pulsed Power">
  <title>Woodruff Scientific, Inc. | Research and development in pulsed power, plasma physics and fusion energy sciences since 2005</title>
  </head>

  <body>
<?php $googleTagManager = file_get_contents('googleTagManager.html'); echo $googleTagManager; ?>
    <div id="wrap">
    <div class="container">

  <?php
  $navbar = file_get_contents('navbar.html');
  echo $navbar; 
  ?>  


  <!-- <div class="col-md-2"><a class="twitter-timeline" height="775" href="https://twitter.com/WS_Inc">Tweets by WS_Inc</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script></div>  -->


        <!-- Carousel -->
  <div id="myCarousel" class="carousel slide col-md-12 data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
        <li data-target="#myCarousel" data-slide-to="4"></li>
        <li data-target="#myCarousel" data-slide-to="5"></li>
        <li data-target="#myCarousel" data-slide-to="6"></li>
        <li data-target="#myCarousel" data-slide-to="7"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <img src="img/STPX-carousel.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <p><a class="white" href="devices">STPX Plasma Experiment</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="img/work_coil-carousel.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <p><a class="white" href="magnets">Helmholtz Coil for Aerospace</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="img/stpx_banks_carousel.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
            <p><a class="white" href="pulsedpower">STPX Capacitor Banks</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="img/BM_Coil_1-carousel.jpg" alt="Fourth slide">
          <div class="container">
            <div class="carousel-caption">
              <p><a class="white" href="magnets">Coils for Bryn Mawr College</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="img/LTX-carousel.png" alt="Fifth slide">
          <div class="container">
            <div class="carousel-caption">
              <p><a class="" href="physics">LTX Equilibrium</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="img/iter-carousel.png" alt="Sixth slide">
          <div class="container">
            <div class="carousel-caption">
              <p><a class="white" href="physics">ITER MHD</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img style="height: 300px" src="img/CompanyPhotos/intern.jpg" alt="Seventh slide">
          <div class="container">
            <div class="carousel-caption">
              <p><a class="white" href="physics">Intern Katherine Chun</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img style="height: 300px" src="img/CompanyPhotos/Team.JPG" alt="Eighth slide">
          <div class="container">
            <div class="carousel-caption">
              <p><a class="white" href="physics">Group Offsite</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->
    
    
<div class="col-md-12 center"></div>




        <div class="col-md-12" style="center;"><div class="jumbotron">
        <h2>Woodruff Scientific offers assistance with all stages of scientific innovation: concept design, engineering design, procurement, fabrication, installation, testing, and operations.  Call <a href="callto://+2069059477">206 905 9477</a> and let us know how we can help you.</p></div>

  </div>

   
  

    </div> <!-- /container -->

    
    </div> <!-- /wrap -->
  <?php
  $footer = file_get_contents('footer.html');
  echo $footer; 
  ?>  
  </body>
</html>

