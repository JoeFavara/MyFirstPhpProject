<?php
/**
 * Created by PhpStorm.
 * User: josephfavara
 * Date: 1/6/15
 * Time: 2:03 PM
 */

class returnPerson {

    /**
     *
     */
    public function testPerson() {

        $work = new person();

        $work->setName('Hakan Anderson');
        $work->setStreetName('World Champ Lane');
        $work->setNumber(23);

        return $work;
    }

    /**
     *
     */
    public function testThis() {
        echo "We are in testThis <br>";
    }

} 