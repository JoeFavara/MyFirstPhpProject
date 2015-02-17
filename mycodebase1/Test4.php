<?php
/**
 * Created by PhpStorm.
 * User: josephfavara
 * Date: 1/6/15
 * Time: 2:19 PM
 */

require '../dao_model/person.php';
require '../dao_model/returnPerson.php';

echo 'In Test 4 <br>';

$dude = new returnPerson();
$me = new person();
if (!empty($me)) {
    $me = $dude->testPerson();
}
$name = $me->getName();
$streetName = $me->getStreetName();
$number = $me->getNumber();
echo "$name <br>";
echo "$streetName <br>";
echo "$number <br>";
$dude->testThis();
echo "Done !!";

