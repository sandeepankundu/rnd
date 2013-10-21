<?php
/**
 * Created by JetBrains PhpStorm.
 * User: sandeepankundu
 * Date: 21/10/13
 * Time: 8:09 PM
 * To change this template use File | Settings | File Templates.
 */
echo "<br/>Experimenting PHP classes and external files";
echo "<br/>including external php-> inc file";
echo "<br/>experimenting PHP class and instances";

include "classconcept.inc";

echo "<br/>included correctly";

$car1 = new Vehicle("blue","4");
//echo '<br/>Car 1: color:'.$car1->what_is_the_color().' has wheels: '. $car1->how_many_wheels();
echo '<br/>Car 1: color:'.$car1->what_is_the_color().' has wheels: '. $car1->how_many_wheels();
/*
echo "<br/>car created -> " .  $car1->what_is_the_color();
echo "<br/>car created -> " .  $car1->color;
*/
$car2 = new RedCar();
echo '<br/>Car 2: color:'.$car2->what_is_the_color().' has wheels: '. $car2->how_many_wheels();
?>