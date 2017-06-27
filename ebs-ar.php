<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Make a Handlebar Riser  | Woodruff Scientific, Inc.</title>
        <meta charset="utf-8">

        <script type="text/javascript" src="js/ebs.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <?php
        $head = file_get_contents('header.html');
        echo $head; 
        ?>
        <meta name="description" content="Online box or torus CAD generator">

    </head>
    <body>
        <div id="wrap">
        <div class="container">
            <?php
    $navbar = file_get_contents('navbar.html');
    echo $navbar;   
    ?>  
        <div class="col-md-6">
            <form action="" name="paramform" id="paramform" onsubmit="return false;">
            <div>
               <fieldset>
                <legend>Make a handlebar riser or heat shield!</legend>


                <!-- <p>
                <label class="inlinelabel" for='wallThickness'>Wall Thickness[cm]</label><br />
                <input type="number" step="any" min="0"  id="wallThickness" name="wallThickness" onchange="calculateTotal()" value="0.1"  />
                </p> -->
                <p>
                <label class="inlinelabel" for='shapeType'>Pick A Part</label><br />
                <select id="shapeType" name='shapeType' onchange="changeParams()">
                  <option value="riser">Handlebar Risers</option>
                  <option value="shield">Heat Shield</option>
                  <option value="bolo">Bolometer</option>
                </select>
                </p>
               
                <p>
                <label class="inlinelabel" for='size1' id='lsize1'>Radius 1</label><br />
                <input type="number" step="any" min="0" id="size1" name="size1" value="2" />
                </p>

                <p>
                <label class="inlinelabel" for='size2' id='lsize2'>Height</label><br />
                <input type="number" step="any" min="0"  id="size2" name="size2" value="10" />
                </p>

                <p>
                <label class="inlinelabel" for='size3' id='lsize3'>Radius Handlebar</label><br />
                <input type="number" step="any" min="0" id="size3" name="size3" value="3" />
                </p>


                <div id="volume"></div>
                
                <button onclick="getShape()">Generate Shape</button>
                </fieldset>
            </div>
        </form>
        </div>
        <div class="col-md-6">
            <iframe id="viewer" src="http://lowcost-env.ib4x3rx2xe.us-east-1.elasticbeanstalk.com/box/make?size1=1&size2=1&size3=1" width='500px' height='500px'></iframe>
        </div>

    </div><!--End of wrap-->
    </div><!--End of Container-->
    <?php
    $footer = file_get_contents('footer.html');
    echo $footer;   
    ?>  
    </body>
</html>