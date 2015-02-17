<?php
/**
 * Created by PhpStorm.
 * User: josephfavara
 * Date: 1/8/15
 * Time: 2:31 PM
 */

class SongDAO {

    /**
     * @return PDO $dbh
     */
    public function getConnection () {

        $host = 'localhost';
        $user = "root";
        $password = "root";
        $database = 'php-mvc';


        try {
            echo "Connecting to database in try clause   $database <br>";
            $DBH = new PDO("mysql:host=$host;dbname=$database", $user, $password, array(PDO::ATTR_PERSISTENT => true));
            $DBH->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Successfully connected <br>";
            return $DBH;

        } catch (PDOException $e) {
            echo $e->getMessage();
            echo '<br>';
            echo  'Oh My we got an error <br>';
            return null;
        }


    }

    /**
     * @param $DBH
     * @return $Songs
     *
     * Returns an array of all songs
     */
    public function getAllSongs ($DBH) {

        try {
            echo 'Now reading the database with Fetch_Obj. Here it is <br>';
            $STH = $DBH->query("Select id, artist, track, link from song");
            # setting for fetch mode
            $STH->setFetchMode(PDO::FETCH_OBJ);
            $i=0;

            while ($row = $STH->fetch()){

                $vo[$i] = new Song();
                $vo[$i]->setId($row->id);
                $vo[$i]->setArtist($row->artist);
                $vo[$i]->setTrack($row->track);
                $vo[$i]->setLink($row->link);

                ++$i;
            }

        } catch(PDOException $e) {
            echo $e->getMessage();
            echo '<br>';
            echo  'Oh My we got an error <br>';
        }

        if (!empty($STH)) {
            $STH = null;
        }

    //    if (!empty($DBH)) {
    //        $DBH = null;
    //    }

        return $vo;

    }


    /**
     * @param $DBH
     * @param $Artist
     *
     * Returns an array of songs by artist
     */
    public function getSongsByArtist ($DBH, $Artist) {

        try {

            echo 'Now reading the database with Fetch_Obj. Here it is <br>';
            $SQL = "Select id, artist, track, link from song Where artist = ?";
            $STH = $DBH->prepare($SQL);
            $STH->execute(array($Artist));
            # setting for fetch mode
            $STH->setFetchMode(PDO::FETCH_OBJ);
            $i=0;

            while ($row = $STH->fetch()){

                $vo[$i] = new Song();
                $vo[$i]->setId($row->id);
                $vo[$i]->setArtist($row->artist);
                $vo[$i]->setTrack($row->track);
                $vo[$i]->setLink($row->link);

                ++$i;
            }

        } catch(PDOException $e) {
            echo $e->getMessage();
            echo '<br>';
            echo  'Oh My we got an error <br>';
        }

        if (!empty($STH)) {
            $STH = null;
        }

     //   if (!empty($DBH)) {
     //       $DBH = null;
     //   }

        return $vo;


    }
    /**
     * @param $DBH
     * @param $Song - Associative Array
     *
     * Adds a records to the song database
     */
    public function addSong ($DBH, $Song)
    {

        if (!empty($Song)) {

            try {

                echo "Adding record to data base <br>";
                $SQL = "INSERT INTO song (artist, track, link) values (:artist, :track, :link)";
                $STH = $DBH->prepare($SQL);
                $STH->execute($Song);


            } catch (PDOException $e) {
                echo $e->getMessage();
                echo '<br>';
                echo 'Oh My we got an error <br>';
            }

            if (!empty($STH)) {
                $STH = null;
            }

          //  if (!empty($DBH)) {
          //      $DBH = null;
          //  }


        }
    }

    /**
     * @param $DBH
     * @param $id
     */
    public function deleteSong ($DBH, $id) {

        try{

            echo "Trying to delete record <br>";
            $SQL = "Delete From Song Where id = :id";
            $STH = $DBH->prepare($SQL);
            $STH->bindParam(':id', $id, PDO::PARAM_INT);
            $STH->execute();


        } catch (PDOException $e) {
            echo $e->getMessage();
            echo '<br>';
            echo 'Oh My we got an error <br>';
        }

    }


} 