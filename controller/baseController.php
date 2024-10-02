<?php

    # varaibles
    $_versionPhp = phpversion();
    $lang = ["fr","en","it"];
    $styleCss = "public/css/style.css";
    $_date = date('Y-d-m');
    $_years = new DateTime();
    $navigator =  $_SERVER["PHP_SELF"];
    $sign = $_SERVER["SERVER_SIGNATURE"];

    
   /*  Joaquin Phoenix dans le rôle d'Arthur Fleck (Joker)
    Robert De Niro dans le rôle de Murray Franklin
    Zazie Beetz dans le rôle de Sophie Dumond
    Frances Conroy dans le rôle de Penny Fleck */

    class User{
        public $title = "Le Joker";
    }

   

    # instance
    $newtitle = new User();
?>