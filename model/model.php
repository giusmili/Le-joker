<?php
    // connexion à la base par l'objet PDO


     try{
        $_pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
        $_bdd = new PDO('mysql:host=localhost; 
                dbname=cine','root','', 
                array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', $_pdo_options));
        
                 $_response = $_bdd->query('SELECT * FROM `user` WHERE 1 ORDER BY id ASC');
                       
                       

        while($_data = $_response->fetch()){ # la méthode fetch se charge d'aller chercher les données
         
           /*
            on fait un test sur la bdd avant de l'afficher
             */
            print "<pre>";
            
                print_r($_data);
            
            print "</pre>"; 
           

            
        }
        
        $_response->closeCursor(); //ici se termine l'appelle par la méthode fetch()

     }
     catch(Exception $e){
        die("Error Data base de votre base ".$e->getMessage());
         //en cas d'érreur on affiche un message
}