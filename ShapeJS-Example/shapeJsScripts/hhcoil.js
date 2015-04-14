function main(args) {
  var inner_diam = args[0]*IN;
  var outer_diam = args[1]*IN;
  var coil_dist = args[0]*IN;
  var coil_width = args[2]*IN;
  var stop_width = args[3]*IN;
  var total_length = stop_width*2+coil_width*2+coil_dist;
  var gx = outer_diam*1.1;
  var grid = createGrid(-gx,gx,-gx,gx,0,total_length*1.1,0.005*IN);
  

  var v0 = new Vector3d(0,0,0);
  var v1 = new Vector3d(0,0,stop_width);
  var v2 = new Vector3d(0,0,stop_width+coil_width);
  var v3 = new Vector3d(0,0,stop_width+coil_width+coil_dist);
  var v4 = new Vector3d(0,0,stop_width+coil_width*2+coil_dist);
  var v5 = new Vector3d(0,0,total_length);


  var stop1 = Cylinder(v0,v1,outer_diam/2);
  var spacer = Cylinder(v2,v3,outer_diam/2);
  var stop2 = Cylinder(v4,v5,outer_diam/2);
  var rod = Cylinder(v0,v5,inner_diam/2);
 
  var union = new Union();
  union.add(stop1);
  union.add(rod);
  union.add(stop2);
  union.add(spacer);
  
  var center_hole = Cylinder(v0,v5,inner_diam/3);
  var bolt1 = Cylinder(v0,v5,1*MM);
  var bolt2 = Cylinder(v0,v5,1*MM);
  var bolt3 = Cylinder(v0,v5,1*MM);
  
  var trans1 = new CompositeTransform();
  var trans2 = new CompositeTransform();
  trans1.add(new Translation(outer_diam/2-0.1*IN,0,0));
  trans2.add(new Translation(-outer_diam/2+0.1*IN,0,0));
  bolt1.setTransform(trans1);
  bolt2.setTransform(trans2);
  
  var channel1 = new Box(inner_diam/2+0.04*IN,outer_diam/4,stop_width-0.02*IN,0.08*IN,outer_diam/2,0.04*IN);
  var channel2 = new Box(-inner_diam/2-0.04*IN,outer_diam/4,stop_width+coil_width+coil_dist-0.02*IN,0.08*IN,outer_diam/2,0.04*IN);

//  var wsi = new logo(total_length);
  var diff = new Subtraction(union,center_hole);
  diff = new Subtraction(diff,bolt1);
  diff = new Subtraction(diff,bolt2);
  diff = new Subtraction(diff,channel1);
  diff = new Subtraction(diff,channel2);
  
  var maker = new GridMaker();
  maker.setSource(diff);
  maker.makeGrid(grid);
  return grid;
}

function logo(total_length) {
  var l = Text(\"Woodruff\",\"Helvetica\",0.5*IN,0.1*IN,0.05*IN,0.1*MM);
  var trans = new CompositeTransform();
  trans.add(new Translation(0,0,total_length));
  l.setTransform(trans);

  return l;
}
