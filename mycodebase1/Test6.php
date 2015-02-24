<?php
/**
 * Created by PhpStorm.
 * User: josephfavara
 * Date: 1/16/15
 * Time: 3:59 PM
 */

require '../dao_model/SongDAO.php';
require '../dao_model/Song.php';

$host = 'localhost';
$host1 = "127.0.0.1";
$port = "8889";
$user = "root";
$password = "root";
$database = 'php-mvc';
$test = null;
$test1 = null;

echo "In Test6 <br>";

$dao = new SongDAO();
$dbh = $dao->getConnection($host,$database,$user,$password);

echo "Delete row <br>";
$id = 41;
$dao->deleteSong($dbh, $id);