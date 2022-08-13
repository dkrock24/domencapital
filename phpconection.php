<?php

class Connection {

    public static function getConection(){

        $servername = "localhost:3309";
        $username = "root";
        $password = "";
        $dbname = "basic_new";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        return $conn;
    }
}



