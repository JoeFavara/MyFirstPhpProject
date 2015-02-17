<?php
/**
 * Created by PhpStorm.
 * User: josephfavara
 * Date: 10/23/14
 * Time: 3:31 PM
 */
/*** nullify any existing autoloads ***/
spl_autoload_register(null, false);

/*** specify extensions that may be loaded ***/
spl_autoload_extensions('.php, .class.php');

/*** class Loader ***/
function classLoader($class)
{
    $filename = strtolower($class) . '.class.php';
    $file ='classes/' . $filename;
    if (!file_exists($file))
    {
        return false;
    }
    include $file;
}

/*** register the loader functions ***/
spl_autoload_register('classLoader');

/*** a new instance if norman ***/
$norman = new person();

/*** make norman do something ***/
$norman->setName('Hey norman');
echo $norman->getName();
