<?php
//require_once "Airplane.php";
//require_once "Boeing.php";
//require_once "Buildings.php";
//
//
//
//$building = new Buildings;
//
//
//$boeing = new Boeing();
//$boeing->number='1488';
//$boeing->model='Heil';
//$boeing ->flying();
//$boeing->crushing($building);


// echo'<br>';
// var_dump($boeing);
// echo'<br>';
// var_dump($building);
//require_once "output.php";

require_once "Man.php";
require_once "Men.php";
require_once "Woman.php";
Men::inventBeer();
$woman = new Woman();
$woman->paintiong();
$men = new Men();
$men ->eating();
$woman->working();
$men2 = new Men();
$men2->relax();
echo "<pre>";
var_dump($men,$men2);
$men->relax();
echo "<pre>";
var_dump($men,$men2);



