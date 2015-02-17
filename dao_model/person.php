<?php
/**
 * Created by PhpStorm.
 * User: josephfavara
 * Date: 10/13/14
 * Time: 10:05 AM
 */

class person {

    var $name;
    var $number;
    var $streetName;

    public function __construct() {
        echo "We are in the constructor method for class person <br>";

    }

    public function __destruct() {
        echo "Class person is getting destroyed <br>";
    }
    /**
     * @return mixed
     */
    public function getStreetName()
    {
        return $this->streetName;
    }

    /**
     * @param mixed $streetName
     */
    public function setStreetName($streetName)
    {
        $this->streetName = $streetName;
    }

    /**
     * @return mixed
     */
    public function getNumber()
    {
        echo "Inside getNumber <br>";
        return $this->number;
    }

    /**
     * @param mixed $number
     */
    public function setNumber($number)
    {
        $this->number = $number;
        echo "Inside setNumber $number <br>";
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        echo "Inside getName <br>";
        return $this->name;

    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
        echo "Inside setName $name <br>";
    }

}
