<?php
/**
 * Created by PhpStorm.
 * User: josephfavara
 * Date: 1/19/15
 * Time: 9:55 AM
 */

require '../dao_model/SongDAO.php';
require '../dao_model/Song.php';

$host = 'localhost';
$host1 = "127.0.0.1";
$port = "8889";
$user = "root";
$password = "root2";
$database = 'php-mvc';

Define('$host1', 'localhost');

$dao = new SongDAO();

    $dbh = $dao->getConnection($host, $database, $user, $password);
    if ($dbh == null) {
        echo "Error in connecting <br>";
    }
    echo "Here is DBH $dbh <br>";

