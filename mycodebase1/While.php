<?php
/**
 * Created by PhpStorm.
 * User: josephfavara
 * Date: 9/26/14
 * Time: 3:21 PM
 */

$x=1;
echo htmlspecialchars($_SERVER['PHP_SELF']);
while ($x <= 10){
    echo "The value of x is $x <br> " ;
    $x++;
}