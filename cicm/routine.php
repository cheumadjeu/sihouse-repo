<?php

	
    try{
        $bdd = new PDO('mysql:host=localhost;dbname=cicm', 'root', '') or die(print_r($bdd->errorInfo()));
        $bdd->exec('SET NAMES utf8');
        echo "connexion réussie" ;
    }
    catch(Exeption $e){
        echo "connexion échouée" ;
    }



?>