<?php
/**
 * Created by PhpStorm.
 * User: josephfavara
 * Date: 10/23/14
 * Time: 9:38 AM
 */

require '../dao_model/person.php';

//session_start();
$_SESSION["favcolor"] = "green";
echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
//session_destroy();

echo 'In test 3 <br>';
$brad = new person();
$brad->setName('Brad Lackey');
$brad->setStreetName('Husky Lane');
echo $brad->getName(); "<br>";
echo $brad->getStreetName();
$name = $brad->getName();
$streetName = $brad->getStreetName();
echo "<br>";
echo "This is the value of name $name <br>";
echo "This is the street name $streetName <br>";

echo "Testing double quotes with Roger D <br>";
$brad->setName("Roger Decoster");
$brad->setStreetName("Hole Shot Blvd");
echo "<br>";
echo $brad->getName();
echo $brad->getStreetName();
$name = $brad->getName();
$streetName = $brad->getStreetName();
echo "New value for name is  $name <br>";
echo "This is the street name $streetName <br>";


echo "<br>";
echo "Testing numbers now <br>";
$brad->setNumber(123);
echo $brad->getNumber();
echo "<br>";
$numbers = $brad->getNumber();
echo "The number is  $numbers <br>";
$work = $brad->getNumber() + 10;
echo "We added 10 to the number $work <br>";


