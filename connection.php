<?php
/**
 * Created by PhpStorm.
 * User: eric
 * Date: 18/06/2017
 * Time: 14:33
 */

class  persistance{

    private $pdo;
    public $db_name='projetasn';
    public $user;
    public $pass;
    public static $_instance;

    public static function getInstance($user,$pass,$db_name){
        if(is_null(self::$_instance)){
            self::$_instance=new Singleton($user,$pass,$db_name);
        }
        return self::$_instance;
    }

    public function   __construct($user,$pass,$db_name){


        try{
            $strConnection='mysql:host=localhost;dbname='.$db_name;
            $this->pdo= new PDO($strConnection,$user,$pass);
            $this->db_name=$db_name;
            $this->user=$user;
            $this->pass=$pass;
            echo 'connection reussit';

        }

        catch(PDOException $e){
            $msg="ERREUR PDO DANS".$e->getMessage();
            die($msg);

        }

    }


    //Setteur du user

    public function setUser($user){
        $this->user=$user;
    }

    //Setteur du db_name

    public function setDb_name($db_name){
        $this->db_name=$db_name;
    }
//setteur du password
    public function setPassword($pass){
        $this->pass=$pass;
    }

    //getteurs

    public function getUser(){
        return $this->user;
    }

    public function getDb_name(){
        return $this->db_name;
    }

    public function getPassword(){
        return $this->pass;
    }






    //attrib est le tableau contenant les different champs de la table et params contient les valeus a inserer

    public function insertDB($attrib,$params,$table){

        $i=0;$a=""; $pt="";
        for($i=0;$i<count($attrib);$i++){
            if($i!=count($attrib)-1){  $a=$a.$attrib[$i].",";  $pt=$pt."?,";  }
            else { $a=$a.$attrib[$i];  $pt=$pt."?";  }

        }

        $ps=$this->pdo->prepare("INSERT INTO $table($a) VALUES ($pt)");
        $ps->execute($params);

    }




    public function selectBD($table,$list_champs_retourner,$clause)
    {

        $i = 0;
        $list_champ = "";
        $clauseString = "";
        $query = "";
        for ($i = 0; $i < count($list_champs_retourner); $i++) {
            if ($i != count($list_champs_retourner) - 1) $list_champ = $list_champ . $list_champs_retourner[$i] . ",";
            else  $list_champ = $list_champ . $list_champs_retourner[$i];

        }

        if (count($clause) != 0) {
            for ($i = 0; $i < count($clause); $i++) {
                if ($i != count($clause) - 1) $clauseString = $clauseString . $clause[$i] . "AND";
                else  $clauseString = $clauseString . $clause[$i];

            }

            $query = "SELECT $list_champ FROM $table WHERE $clauseString";
        }
        else $query = "SELECT $list_champ FROM $table";




        $ps=$this->pdo->query($query);
        $ps->setFetchMode(PDO::FETCH_OBJ);
        while($p=$ps->fetch()){
            echo 'eleve'.$p->$list_champs_retourner[0].'<br/>';

        }

//      echo $list_champ.$clauseString.$query;
    }


    //le tableau $champs_avec_valeur_a_mettre_a_jour est telque chaque element contient la mis a jour effective exple nom devient tona nom='tona'

    public  function updateDB($table,$champs_avec_valeur_a_mettre_a_jour,$clause){

        $i = 0;
        $list_champ = "";
        $clauseString = "";
        $query = "";
        for ($i = 0; $i < count($champs_avec_valeur_a_mettre_a_jour); $i++) {
            if ($i != count($champs_avec_valeur_a_mettre_a_jour) - 1) $list_champ = $list_champ . $champs_avec_valeur_a_mettre_a_jour[$i] . ",";
            else  $list_champ = $list_champ . $champs_avec_valeur_a_mettre_a_jour[$i];

        }

        if (count($clause) != 0) {
            for ($i = 0; $i < count($clause); $i++) {
                if ($i != count($clause) - 1) $clauseString = $clauseString . $clause[$i] . "AND";
                else  $clauseString = $clauseString . $clause[$i];

            }

            $query ="UPDATE $table SET $list_champ WHERE $clauseString";
        }

        //echo $list_champ.$clauseString.$query;


        $this->pdo->exec($query);
        echo'modification effectuer';

    }

    //clause clairement specifier exple nom='tona'

    public function deleteDB($table,$clause){
        $clauseString = "";
        $query = "";

        if (count($clause) != 0) {
            for ($i = 0; $i < count($clause); $i++) {
                if ($i != count($clause) - 1) $clauseString = $clauseString . $clause[$i] . "AND";
                else  $clauseString = $clauseString . $clause[$i];

            }

            $query ="DELETE FROM $table WHERE $clauseString";
        }
        //echo $query;
        $this->pdo->exec($query);
        echo 'suppression effectuer';
    }

}

/*
//quelques appelle de fonctions

$t=array("matricule","nom","prenom","dateNais","addressParent","telParent","IdClass","IdBus","IdCantine","tranche1","tranche2","tranche3","inscription");
$params=array("","tona","steve","","","","","","","","","","");

$instance=Singleton::getInstance('root','','projetasn');
//$instance->insertDB($t,$params);
$p=array("nom='ntjam'","prenom='eric'");
$c=array("prenom='tona'");
$instance->deleteDB('eleve',$c);

*/

$instance=Singleton::getInstance('root','','projetasn');
$params=array("cni_personne","nom_personne","sexe","photo","vehicules","contact","login","password","don");

$nom=$_POST["username"];
$cni=$_POST['cni'];
$email=$_POST['email1'];
$im=$_POST['ima'];
$mo=$_POST['model'];
$im=$_POST['ima'];
$mar=$_POST['marque'];
$sexe=$_POST['sexe'];
$t=array($cni,$nom,$sexe,"",$im,$email,$im,$mo,$mar,"");


?>