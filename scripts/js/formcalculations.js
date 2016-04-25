/*
This source is shared under the terms of LGPL 3
www.gnu.org/licenses/lgpl.html

You are free to use the code in Commercial or non-commercial projects
*/

 
 
 //Set up an associative array 
 var gauge_radius= new Array();
 gauge_radius["None"]=0;
 gauge_radius["OOOO"]=11.684;
 gauge_radius["OOO"]=10.40384;
 gauge_radius["OO"]=9.26592;
 gauge_radius["0"]=8.25246;
 gauge_radius["1"]=7.34822;
 gauge_radius["2"]=6.54304;
 gauge_radius["3"]=5.82676;
 gauge_radius["4"]=5.18922;
 gauge_radius["5"]=4.62026;
 gauge_radius["6"]=4.1148;
 gauge_radius["7"]=3.66522;
 gauge_radius["8"]=3.2639;
 gauge_radius["9"]=2.90576;
 gauge_radius["10"]=2.58826;
 gauge_radius["11"]=2.30378;
 gauge_radius["12"]=2.05232;
 gauge_radius["13"]=1.8288;
 gauge_radius["14"]=1.62814;
 gauge_radius["15"]=1.45034;
 gauge_radius["16"]=1.29032;
 gauge_radius["17"]=1.15062;
 gauge_radius["18"]=1.02362;
 gauge_radius["19"]=0.91186;
 gauge_radius["20"]=0.8128;
 gauge_radius["21"]=0.7239;
 gauge_radius["22"]=0.64516;

var gauge_resistance= new Array();
 gauge_resistance["None"]=0;
 gauge_resistance["OOOO"]=0.16072;
 gauge_resistance["OOO"]=0.202704;
 gauge_resistance["OO"]=0.255512;
 gauge_resistance["0"]=0.322424;
 gauge_resistance["1"]=0.406392;
 gauge_resistance["2"]=0.512664;
 gauge_resistance["3"]=0.64616;
 gauge_resistance["4"]=0.81508;
 gauge_resistance["5"]=1.027624;
 gauge_resistance["6"]=1.295928;
 gauge_resistance["7"]=1.634096;
 gauge_resistance["8"]=2.060496;
 gauge_resistance["9"]=2.598088;
 gauge_resistance["10"]=3.276392;
 gauge_resistance["11"]=4.1328;
 gauge_resistance["12"]=5.20864;
 gauge_resistance["13"]=6.56984;
 gauge_resistance["14"]=8.282;
 gauge_resistance["15"]=10.44352;
 gauge_resistance["16"]=13.17248;
 gauge_resistance["17"]=16.60992;
 gauge_resistance["18"]=20.9428;
 gauge_resistance["19"]=26.40728;
 gauge_resistance["20"]=33.292;
 gauge_resistance["21"]=41.984;
 gauge_resistance["22"]=52.9392;
 
	 
	

//This function finds the gauge OD based on the 
//drop down selection
function getRw()
{
    var Rw=0;
    var theForm = document.forms["coilform"];
     var selectedGauge = theForm.elements["gauge"];
     
    Rw = gauge_radius[selectedGauge.value];

    //finally we return Rw
    return Rw;
}

function getRper()
{
    var Rper=0;
    //Get a reference to the form id="coilform"
    var theForm = document.forms["coilform"];
    //Get a reference to the select id="gauge"
     var selectedGauge = theForm.elements["gauge"];
     
    //set gauge resistance equal to value user chose
    Rper = gauge_resistance[selectedGauge.value];

    //finally we return Rper
    return Rper;
}

function getn()
{
    var n = 0;
    var theForm = document.forms["coilform"];
    n = theForm.elements["n"].value;
    return n;
}

function getI()
{
    var I = 0;
    var theForm = document.forms["coilform"];
    I = theForm.elements["Im"].value;
    return I;
}

function getTau()
{
    var tau = 0;
    var theForm = document.forms["coilform"];
    tau = theForm.elements["pulsetime"].value;
    return tau;
}

        
function calculateTotal()
{    
    var muo=1.2e-6;
    var Im= getI(); //[A] current in the coil
    var r = 4*2.54*0.01; //[m]  coil radius
    var n = getn();  //# number of turns in each coil
    var Bmax = Math.pow((4/5),1.5) * muo * n * Im / r; //[T] field in the coil
    var rho_Cu = 8.6; //[g/cm^3]
    var tau = getTau(); //[s] time in seconds for pulse
    var r_wire = getRw()/20; //[cm] 14AWG is 1.62mm OD
    var l_w = 2 * 3.141 * r * 2 * n; //[m]
    var R_Cu1 =  (getRper()/1000) * l_w; //[Ohms] 14 gauge wire, see Table 1 for Ohms/km
    var E_Cu1 = Math.pow(Im,2) * R_Cu1 * tau;//[J] energy for heating wire
    var v_wire = l_w * 100 * 3.14159 * Math.pow(r_wire,2); //[cm^3]
    var m_wire = rho_Cu * v_wire; //[g]
    var S_Cu = 0.385; // [J/g/C] specific heat capacity
    var dT_wire = E_Cu1 / (S_Cu * m_wire); //change in temperature of wire in C

    //display the result
    var divobj = document.getElementById('totalPrice');
    divobj.style.display='block';
    divobj.innerHTML = "max B [T] "+Bmax + 
        "<br>Wire Radius [cm] "+r_wire +
        "<br>Wire Length [m] "+l_w +
        "<br>Wire Mass [g] "+m_wire +
        "<br>Wire Resistance [ohms] "+R_Cu1 +
        "<br>Ohmic Heating [J] "+E_Cu1 +
        "<br>Temp change [C] "+ dT_wire
        ;
}

function hideTotal()
{
    var divobj = document.getElementById('totalPrice');
    divobj.style.display='none';
}