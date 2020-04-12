<?php
include_once "Point2D.php";
include_once "Point3D.php";
echo "2D:<br>";
$point1 = new Point2D(10.0,10.0);
echo $point1->toString() . "<br>";
$point1->setXY(5.5,20.5);
echo $point1->toString() . "<br>";
foreach ($point1->getXY() as $value) {
    echo $value . " ";
}
echo '<br><br>3D:<br>';
$point2 = new Point3D(1,-1,1);
echo $point2->toString() . "<br>";
$point2->setXYZ(5.2, 6.2, 7.2);
echo $point2->toString() . "<br>";
foreach ($point2->getXYZ() as $value) {
    echo $value . " ";
}