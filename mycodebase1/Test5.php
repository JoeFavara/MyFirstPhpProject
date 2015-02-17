<?php
/**
 * Created by PhpStorm.
 * User: josephfavara
 * Date: 1/8/15
 * Time: 3:29 PM
 */

require '../dao_model/SongDAO.php';
require '../dao_model/Song.php';

$host = 'localhost';
$host1 = "127.0.0.1";
$port = "8889";
$user = "root";
$password = "root";
$database = 'php-mvc';

echo "In Test5 now <br>";

$dao = new SongDAO();
$dbh = $dao->getConnection();
$songs = $dao->getAllSongs($dbh);

//$songs = $dao->getAllSongs($host,$database,$user,$password);
echo "OK here is what was passed back from DAO new change <br>";
echo "Testing git locally <br>";
echo "more testing with Git <br>";

//print_r($songs);

foreach ($songs as $records) {
    $song = new Song();

    foreach ($records as $key => $value){
        //print_r($key);
       // print_r($value);

        switch ($key) {

            case 'id':
                $song->setId($value);
                break;

            case 'artist':
                $song->setArtist($value);
                break;

            case 'track':
                $song->setTrack($value);
                break;

            case 'link':
                $song->setLink($value);
                break;
        }


    }

    $data = array('artist' => $song->getArtist(), 'track' => $song->getTrack(), 'link' => $song->getLink());
    $dao->addSong($dbh, $data);

    $songbyartist = $dao->getSongsByArtist($dbh, $song->getArtist());




}



