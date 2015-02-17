<?php
/**
 * Created by PhpStorm.
 * User: josephfavara
 * Date: 10/13/14
 * Time: 9:23 AM
 */

//print_r(PDO::getAvailableDrivers());

echo "<br>";


$host = 'localhost';
$host1 = "127.0.0.1";
$port = "8889";
$user = "root";
$password = "root";
$database = 'php-mvc';

$info = array();
$info = print_r(PDO::getAvailableDrivers(), true);


echo "this is dump of info  $info <br>";
require '../dao_model/song.php';

try {

    echo "Connecting to database in try clause   $database <br>";
    $DBH = new PDO("mysql:host=$host;dbname=$database", $user, $password);
    $DBH->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    echo "Successfully connected <br>";

    echo 'Now reading the database with Fetch_Class. Here it is <br>';
    $STH = $DBH->query("Select id, artist, track, link from song");
    # setting for fetch mode
    try {
        $STH->setFetchMode(PDO::FETCH_CLASS, 'Song');
        while ($obj = $STH->fetch()) {
            echo "$obj->id      <br>";
            echo "$obj->artist  <br>";
            echo "$obj->track   <br>";
            echo "$obj->link    <br>";
        }

    } catch (PDOException $e) {
        echo $e->getMessage();
        echo '<br>';
        echo  'Error on selection <br>';
    }

    echo "Now closing the connection <br>";
    $DBH = null;

} catch(PDOException $e) {
    echo $e->getMessage();
    echo '<br>';
    echo  'Oh My we got an error <br>';
}
