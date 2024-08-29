<?php
    $dsn = "mysql:host=localhost; dbname=client";
    $dbuser = "root";
    $dbpass = "onurege5";

    try {
        $pdo = new PDO($dsn, $dbuser, $dbpass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } 
    catch (PDOException $e) {
        echo"Connection failed:" .$e->getMessage();
    }