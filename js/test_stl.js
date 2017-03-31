/*
This source is shared under the terms of LGPL 3
www.gnu.org/licenses/lgpl.html

You are free to use the code in Commercial or non-commercial projects
*/
//hi

//Generate Beam Dump Variables

function getStl()
{
    
    if (validate_form())
    {
    //$("button").click(function(){
    var height = getHeight();
    //var width  = getWidth();
    //var length = getLength();
    //var wallThickness = getWallThickness();
    var wallThickness = 0.1;
    var outerRadius = getOuterRad();
    var coneHeight = getConeHeight();
    var apertureRad = getApertureRad();
    var numFins = getNumFins();
    var finDist = 1;
    var finHeight = 1;

    //var code = "hello def build():\n    result = Workplane('XY').circle("+outerRadius+").extrude("+height+");\n    result = result.faces('>Z').circle("+outerRadius-wallThickness+").cutBlind("+wallThickness-height+");\n    result = Workplane('XY').circle("+outerRadius+").workplane(offset="+coneHeight+").circle(.0001).loft(combine=True).combineSolids(result)\n    for _ in range(int("+numFins+")):\n        outerFin = Workplane('XY').workplane(offset=_*"+finDist+").circle("+outerRadius-wallThickness+").workplane(offset="+finDist+finHeight+wallThickness+").circle("+apertureRad+wallThickness+").loft(combine=True)\n        innerFin = Workplane('XY').workplane(offset=_*"+finDist+").circle("+outerRadius-wallThickness+").workplane(offset="+finDist+wallThickness+").circle("+apertureRad+").loft(combine=True)\n        innerFin = innerFin.faces('>Z').circle("+apertureRad+").extrude("+wallThickness+")\n        netFin = outerFin.cut(innerFin,combine=True)\n        result = netFin.combineSolids(result)\n    return result";
    var code = "def build():\n\
    height = " + height + "\n\
    wallThickness = " + wallThickness + "\n\
    outerRadius= " + outerRadius+"\n\
    coneHeight= " + coneHeight+"\n\
    apertureRad= " + apertureRad+"\n\
    numFins= " + numFins +"\n\
    finDist= " + finDist +"\n\
    finHeight= " + finHeight +"\n\
    result = Workplane('XY').circle(outerRadius).extrude(height);\n\
    result = result.faces('>Z').circle(outerRadius-wallThickness).cutBlind(wallThickness-height);\n\
    result = Workplane('XY').circle(outerRadius).workplane(offset=coneHeight).circle(.0001).loft(combine=True).combineSolids(result)\n\
    for _ in range(int(numFins)):\n\
        outerFin = Workplane('XY').workplane(offset=_*finDist).circle(outerRadius-wallThickness).extrude(wallThickness)\n\
        outerFin = outerFin.faces('>Z').circle(outerRadius-wallThickness).workplane(offset=finHeight).circle(apertureRad).loft(combine=True)\n\
        innerFin = Workplane('XY').workplane(offset=_*finDist).circle(outerRadius-wallThickness).workplane(offset=finHeight).circle(apertureRad).loft(combine=True)\n\
        innerFin = innerFin.faces('>Z').circle(apertureRad).extrude(wallThickness)\n\
        result = outerFin.cut(innerFin,combine=True).combineSolids(result)\n\
    return result";


    var divobj = document.getElementById('volume');
    divobj.style.display='block';
    // divobj.innerHTML = code
    divobj.innerHTML = "loading..."


        $.ajax({
            type: "POST",
            url: "proxy.php?url=http://parametricparts.com/parts/build&mode=native",
            data: 
                {
                  s: code,
                  type: "STL",
                  key: "e268af2449aac13b",
                },
            crossDomain: true,
            success: function(responseText, status){
                //alert(responseText + "\nStatus: " + status);
                document.getElementById('viewer').contentDocument.location.reload(true);
                document.getElementById('volume').innerHTML = ""
                //document.getElementById('vs_iframe').contentWindow.postMessage({msg_type:'load', url:'testbox.stl'}, '*');
            },
        });
    //});
    }
}


function getHeight()
{
    var n = 0;
    var theForm = document.forms["dumpform"];
    n = theForm.elements["height"].value;
    return n;
}

function getWallThickness()
{
    var n = 0;
    var theForm = document.forms["dumpform"];
    n = theForm.elements["wallThickness"].value;
    return n;
}

function getOuterRad()
{
    var n = 0;
    var theForm = document.forms["dumpform"];
    n = theForm.elements["outerRad"].value;
    return n;
}

function getConeHeight()
{
    var n = 0;
    var theForm = document.forms["dumpform"];
    n = theForm.elements["coneHeight"].value;
    return n;
}

function getFinThickness()
{
    var n = 0;
    var theForm = document.forms["dumpform"];
    n = theForm.elements["finThickness"].value;
    return n;
}

function getApertureRad()
{
    var n = 0;
    var theForm = document.forms["dumpform"];
    n = theForm.elements["apertureRad"].value;
    return n;
}

function getNumFins()
{
    var n = 0;
    var theForm = document.forms["dumpform"];
    n = theForm.elements["numFins"].value;
    return n;
}

function getWidth()
{
    var n = 0;
    var theForm = document.forms["dumpform"];
    n = theForm.elements["width"].value;
    return n;
}

function getLength()
{
    var n = 0;
    var theForm = document.forms["dumpform"];
    n = theForm.elements["dlength"].value;
    return n;
}

//

//Generate Beam Dump Calculations        
function calculateTotal()
{    

    var height = getHeight();
    //var width  = getWidth();
    //var length = getLength();
    //var wallThickness = getWallThickness();
    var outerRadius = getOuterRad();
    var coneHeight = getConeHeight();
    var apertureRad = getApertureRad();
    var numFins = getNumFins();


    //display the result
    var divobj = document.getElementById('volume');
    divobj.style.display='block';
    divobj.innerHTML = 
        "height: "+twoDecimals(height) +
        //"<br>wallThickness: "+twoDecimals(wallThickness) +
        "<br>outerRadius: "+twoDecimals(outerRadius) +
        "<br>coneHeight: "+twoDecimals(coneHeight)+
        "<br>apertureRad: "+twoDecimals(apertureRad)+
        "<br>numFins: "+twoDecimals(numFins)+
        "<br>";

    //var s = "def+build():++++return+Part.makeBox("+height+","+width+","+length+")++++++++"
    //var s = "def+build%28%29%3A%0D%0A++++return+Part.makeBox%281%2C2%2C3%29%0D%0A++++++++"
}

function hideTotal()
{
    var divobj = document.getElementById('volume');
    divobj.style.display='none';
}

function twoDecimals(num){    
    return +(Math.round(num + "e+2")  + "e-2");
}

function validate_form ( )
{
    valid = true;

    // if ( document.dumpform.name.value == "" )
    // {
    //     alert ( "Please fill in the 'Name' box." );
    //     valid = false;
    // }

    // else if ( document.dumpform.email.value == "" )
    // {
    //     alert ( "Please fill in the 'Email' box." );
    //     valid = false;
    // }

    // else if ( document.dumpform.school.value == "" )
    // {
    //     alert ( "Please fill in the 'School' box." );
    //     valid = false;
    // }

    // else if ( document.dumpform.degree.value == "" )
    // {
    //     alert ( "Please fill in the 'Degree' box." );
    //     valid = false;
    // }

    // else if ( document.dumpform.languages.value == "" )
    // {
    //     alert ( "Please fill in the 'Computer Familiarity' box." );
    //     valid = false;
    // }

    // else if ( document.dumpform.math.value == "" )
    // {
    //     alert ( "Please fill in the 'Mathematics Familiarity' box." );
    //     valid = false;
    // }


    return valid;
}