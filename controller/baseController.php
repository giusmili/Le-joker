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
// Your code here!





    class User{
        public $title = "Le Joker";
        static $info ="Informations sur le film Le Joker";

        # fonction
        public function actorsInfo(){
            $actors = [
                array(
                    "prenom"=>"Joaquin",
                    "nom"=>"Phoenix",
                    "role"=>"dans le rôle d'Arthur Fleck (Joker)"
                ),
                array(
                    "prenom"=>"Robert",
                    "nom"=>"De Niro",
                    "role"=>"dans le rôle de Murray Franklin"
                ),
                array(
                    "prenom"=>"Zazie",
                    "nom"=>"Beetz",
                    "role"=>"dans le rôle de Sophie Dumond"
                ),
                array(
                    "prenom"=>"Frances",
                    "nom"=>"Conroy",
                    "role"=>"dans le rôle de Penny Fleck"
                ),
                
            ];
            return $actors;
        }
    }

   

    # instance
    $newtitle = new User();
  
    

?>