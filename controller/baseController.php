<?php

    # varaibles
    $_versionPhp = phpversion();
    $lang = ["fr","en","it"];
    $styleCss = "public/css/style.css";
    $_date = date('Y-d-m');
    $_years = new DateTime();
    $navigator =  $_SERVER["PHP_SELF"];
    $sign = $_SERVER["SERVER_SIGNATURE"];

    # classe ref
    class User{
        public $title = "Le Joker";
        static $info = "Informations sur le film Le Joker";
    }

    # instance
    $newtitle = new User();
?>