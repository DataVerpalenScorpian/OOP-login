<?php

        //Echo "Start PHP </br>";

        $server = "localhost"; //servername
        $db = 'oopwig'; //databasename
        $user = "root"; // username
        $pass = ""; // password

        $options = [
        PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE =>PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES =>false,
        ];




        try{
            $conn = new PDO("mysql:localhost=$server; dbname=$db", $user, $pass, $options);
            echo "Connected successfully </br>";

            } catch(PDOException $e){ echo "Connection failed: " . $e->getMessage() . "</br>" . (int)$e->getCode();
            }