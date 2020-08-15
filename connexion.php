<?php
        $DHOST = 'localhost';
        $DBUSER = 'root';
        $DBPWD = 'root';
        $DBNAME = "todo";

    try {

        $connexion = new mysqli($DHOST, $DBUSER, $DBPWD, $DBNAME);
    }
    catch(Exception $exception) {

        die('Connexion failed ' .$connexion->connect_error);
    }