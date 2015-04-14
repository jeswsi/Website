var voxelSize = 0.1*MM;

function main(args) {
    var rad = args[0]*IN;
    var height = args[1]*IN;

    var xGrid = 1.25*IN;
    var yGrid = 1.25*IN;
    dest = createGrid(-xGrid,xGrid,-yGrid,yGrid,0,height,voxelSize);

    var v0 = new Vector3d(0,0,0);
    var v1 = new Vector3d(0,0,0.19*IN);
    var v2 = new Vector3d(0,0,1*IN);
    var v3 = new Vector3d(0,0,height-1*IN);
    var v4 = new Vector3d(0,0,height-1.25*IN);
    var v5 = new Vector3d(0,0,height-0.13*IN);
    var vtop = new Vector3d(0,0,height);
    var cylinder = new Cylinder(v0,v1,0.625*IN);
    var cylinder2 = new Cylinder(v1,v2,0.5*IN);
    var cylinder3 = new Cylinder(v2,vtop,0.5*IN,rad);
    var union = new Union();
    union.add(cylinder);
    union.add(cylinder2);
    union.add(cylinder3);

    var hole = new Cylinder(v4,vtop,0.0835*IN);
    var nut = new Cylinder(v5,vtop,0.206*IN);

    var diff = Subtraction(union,hole);
    diff = Subtraction(diff,nut);

    var maker = new GridMaker();
    maker.setSource(diff);

    maker.makeGrid(dest);
    
    return dest; 
}
