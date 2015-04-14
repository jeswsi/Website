
function circularmirror(diam,depth,mountsize) {
    var v0 = new Vector3d(mountsize/2,0.5*IN - depth);
    var v1 = new Vector3d(mountsize/2,0.5*IN - depth,mountsize/2);
    var v2 = new Vector3d(mountsize/2,0.5*IN,1*IN);
    var mirror = new Cylinder(v1,v2,diam/2);
    var stop = new Cylinder(v0,v1,(diam-0.1*IN)/2);
    var mirrorhole = new Union();
    mirrorhole.add(mirror);
    mirrorhole.add(stop);
    return mirrorhole;
}

function squaremirror(width,depth,mountsize){
    var lip = 0.5*IN - depth;
    var mirror = new Box(mountsize/2, 0.25*IN-lip/2, mountsize/2, width,depth,width);
    var stop = new Box(mountsize/2, 0.25*IN, mountsize/2, width-lip, 0.5*IN, width-lip);
    var mirrorhole = new Union();
    mirrorhole.add(mirror);
    mirrorhole.add(stop);
    return mirrorhole;
}


function main(args) {
  var shape = args[0];
  var diam = args[1]*IN;
  var width = args[1]*IN;
  var depth = args[2]*IN;
  var mountsize = args[3]*IN;
  var grid = createGrid(0,mountsize,0,0.5*IN,0,mountsize,0.01*IN);
  var mount = new Box(1*IN,0.25*IN,1*IN, mountsize,0.5*IN,mountsize);
  
  if (shape == "circular") {
    var mirrorhole = circularmirror(diam,depth,mountsize);
  } else {
    var mirrorhole = squaremirror(width,depth,mountsize);
  };
  var diff = new Subtraction(mount,mirrorhole);
  
  // var logo = logo();
  // var diff2 = new Subtraction(diff,logo);
  
  var maker = new GridMaker();
  maker.setSource(diff);
  maker.makeGrid(grid);
  return grid;
}

function logo() {
  var logo = Text(\"Woodruff\",\"Helvetica\",1.5*IN,0.5*IN,0.1*IN,0.1*MM);
  var trans = new CompositeTransform();
  
  trans.add(new Rotation(new Vector3d(1,0,0), Math.PI/2));
  trans.add(new Rotation(new Vector3d(0,1,0), Math.PI));
  trans.add(new Rotation(new Vector3d(0,0,1), Math.PI));
  trans.add(new Translation(1*IN,0.5*IN,0.25*IN));
  logo.setTransform(trans);

  return logo;
}
