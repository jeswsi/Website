<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Make a Bolometer Mount  | Woodruff Scientific, Inc.</title>
        <meta charset="utf-8">

        <script type="text/javascript" src="js/ebs.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <?php
        $head = file_get_contents('header.html');
        echo $head;
        ?>
        <meta name="description" content="Online Bolometer Mount CAD generator">

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
                <legend>Make a Bolometer Mount</legend>


                <!-- <p>
                <label class="inlinelabel" for='wallThickness'>Wall Thickness[cm]</label><br />
                <input type="number" step="any" min="0"  id="wallThickness" name="wallThickness" onchange="calculateTotal()" value="0.1"  />
                </p> -->
                <p>
                <label class="inlinelabel" for='shapeType'>Pick A Part</label><br />
                <select id="shapeType" name='shapeType' onchange="changeParams()">
                  <option value="bolo">Bolometer</option>
                </select>
                </p>

                <p>
                <label class="inlinelabel" for='size1' id='lsize1'>Aperture to base of mounting plate (2 - 4 in.)</label><br />
                <input type="number" step="any" min="0" id="size1" name="size1" value="2.375" />
                </p>
                <p>
                <label class="inlinelabel" for='size2' id='lsize2'>Aperture width (0.2 - 0.709 in.)</label><br />
                <input type="number" step="any" min="0" id="size2" name="size2" value="0.709" />
                </p>
                <p>
                <label class="inlinelabel" for='size3' id='lsize3'>Aperture Height (0.25 - 2.4 in.)</label><br />
                <input type="number" step="any" min="0" id="size3" name="size3" value="2.4" />
                </p>


                <div id="volume"></div>

                <button onclick="getShape()">Generate Shape</button>
                </fieldset>
            </div>
        </form>
        </div>
        <div class="col-md-6">
            <iframe id="viewer" src="http://lowcost-env2.ib4x3rx2xe.us-east-1.elasticbeanstalk.com/box/make?size1=1&size2=1&size3=1" width='500px' height='500px'></iframe>
        </div>

    </div><!--End of wrap-->
    </div><!--End of Container-->
    <?php
    $footer = file_get_contents('footer.html');
    echo $footer;
    ?>
    </body>
</html>
