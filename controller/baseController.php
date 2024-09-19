<?php
    //const title = "Le Joker";
    $_versionPhp = phpversion();
    $lang = ["fr","en","it"];
    $styleCss = "public/css/style.css";
    $_date = date('Y-d-m');
    $_years = new DateTime();

    # classe ref
    class User{
        public $title = "Le Joker";
    }

    # instance
    $newtitle = new User();
?>