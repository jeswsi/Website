<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Make a Beam Dump  | Woodruff Scientific, Inc.</title>
        <meta charset="utf-8">

        <script type="text/javascript" src="js/test_stl.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <?php
        $head = file_get_contents('header.html');
        echo $head; 
        ?>
        <meta name="description" content="Online beam dump CAD generator">

    </head>
    <body>
        <div id="wrap">
        <div class="container">
            <?php
    $navbar = file_get_contents('navbar.html');
    echo $navbar;   
    ?>  
        <div class="col-md-6">
            <form action="" name="dumpform" id="dumpform" onsubmit="return false;">
            <div>
               <fieldset>
                <legend>Make a beam dump!</legend>


                <!-- <p>
                <label class="inlinelabel" for='wallThickness'>Wall Thickness[cm]</label><br />
                <input type="number" step="any" min="0"  id="wallThickness" name="wallThickness" onchange="calculateTotal()" value="0.1"  />
                </p> -->
               
                <p>
                <label class="inlinelabel" for='outerRad'>Outer Radius [cm]</label><br />
                <input type="number" step="any" min="0" id="outerRad" name="outerRad" onchange="calculateTotal()" value="5" />
                </p>

                <p>
                <label class="inlinelabel" for='height'>Height [cm]</label><br />
                <input type="number" step="any" min="0"  id="height" name="height" onchange="calculateTotal()" value="15" />
                </p>

                <p>
                <label class="inlinelabel" for='apertureRad'>Aperture Radius [cm]</label><br />
                <input type="number" step="any" min="0" id="apertureRad" name="apertureRad" onchange="calculateTotal()" value="2.5" />
                </p>

                <p>
                <label class="inlinelabel" for='coneHeight'>Cone Height [cm]</label><br />
                <input type="number" step="any" min="0" id="coneHeight" name="coneHeight" onchange="calculateTotal()" value="3" />
                </p>

                <!-- <p>
                <label class="inlinelabel" for='finHeight'>Fin Height [cm]</label><br />
                <input type="number" step="any" min="0" id="finHeight" name="finHeight" onchange="calculateTotal()" value="5" />
                </p> -->
                
                <!-- <p>
                <label class="inlinelabel" for='finThickness'>Fin Thickness [cm]</label><br />

                </p> -->

                

                <p>
                <label class="inlinelabel" for='numFins'>Number Of Fins</label><br />
                <input type="number" min="0" id="numFins" name="numFins" onchange="calculateTotal()" value="9"   />
                </p>

                <!-- <p>
                <label class="inlinelabel" for='finDist'>Distance between Fins [cm]</label><br />
                <input type="number" step="any" min="0" id="finDist" name="finDist" onchange="calculateTotal()" value="1"  />
                </p> -->


                <div id="volume"></div>
                
                <button onclick="getStl()">Generate STL</button>
                </fieldset>
            </div>
        </form>
        </div>
        <div class="col-md-6">
            <iframe id="viewer" src="viewer.html" width='500px' height='500px'></iframe>
        </div>

    </div><!--End of wrap-->
    </div><!--End of Container-->
    <?php
    $footer = file_get_contents('footer.html');
    echo $footer;   
    ?>  
    </body>
</html>