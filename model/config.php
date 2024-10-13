<?php
# variables
$_versionPhp = phpversion();
$lang = ["fr","en","it"];
$styleCss = "public/css/style.css";
$_date = date('Y-d-m');
$_years = new DateTime();
$navigator =  $_SERVER["PHP_SELF"];
$sign = $_SERVER["SERVER_SIGNATURE"];

   # la bdd
    $host = "localhost";
    $db_name = "cine";
    $username = "root";
    $password = "";
    
        try {
            $conn = new PDO("mysql:host=$host;dbname=$db_name", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conn->exec("set names utf8");
        } 
        catch (PDOException $e) {
            die("Connection impossible : " . $e->getMessage());
    }
 
    