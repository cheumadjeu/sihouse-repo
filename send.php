<?php
/**
 * Created by PhpStorm.
 * User: eric
 * Date: 25/06/2017
 * Time: 19:29
 */
require_once("conn.php");


    if(isset($_POST['cni'])&&!empty($_POST['cni'])) {
        $nom=$_POST['nom'];
        $sexe=$_POST['sexe'];

        /* $sexe=$_POST['sexe'];
         $email1=$_POST['don'];
         $matr=$_POST['matr'];
         $modele=$_POST['modele'];
         $cni=$_POST['cni'];
         $cni=$_POST['cni'];
         $cni=$_POST['cni'];*/

       $ps= $pdo->prepare("INSERT INTO personne(cni_personne,nom_personne,sexe,photo,vehicules,contact,login,password,don,email) VALUES (?,?,?,?,?,?,?,?,?,?)");
        $params = array($_POST['cni'],$_POST['nom'],$sexe, " ", $_POST['voiture'],$_POST['contact'], "", "", "",$_POST['email']);
        $ps->execute($params);

        echo "<span> valider!!!!</span>";
    }
else{
    echo"<span>veuillez saisir la cni </span>";
}



?>