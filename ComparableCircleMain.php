<?php
/**
 * Created by PhpStorm.
 * User: thienhmp
 * Date: 28/01/2019
 * Time: 14:56
 */
include "ComparableCircle.php";

$circles[0] = new ComparableCircle(20,'circleOne');
$circles[1] = new ComparableCircle(12,'circleTwo');
$circles[2] = new ComparableCircle(17,'circleThree');

echo ('Pre-sorted: <br>');
foreach ($circles as $circle){
    echo ('name: ' . $circle->getName(). ', radius: '. $circle->getRadius().'<br>');
}
sort($circles);
echo ('After-sorted: <br>');
foreach ($circles as $circle) {
    echo ('name: ' . $circle->getName() . ', radius: ' . $circle->getRadius() . '<br>');
}