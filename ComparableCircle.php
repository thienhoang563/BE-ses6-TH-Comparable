<?php
/**
 * Created by PhpStorm.
 * User: thienhmp
 * Date: 28/01/2019
 * Time: 14:46
 */
include "Circle.php";
include "Comparable.php";

class ComparableCircle extends Circle implements Comparable
{
    public function __construct($radius, $name)
    {
        parent::__construct($radius, $name);
    }
    public function compareTo($circleOne, $circleTwo)
    {
        $circleOneRadius = $circleOne->getRadius;
        $circleTwoRadius = $circleTwo->getRadius;

        if ($circleOneRadius > $circleTwoRadius){
            return 1;
        } else if ($circleOneRadius < $circleTwoRadius){
            return -1;
        } else {
            return 0;
        }
    }

}