<?php
/**
 * Created by PhpStorm.
 * User: eric
 * Date: 18/06/2017
 * Time: 14:33
 */

class  Persistence {

    private $pdo;
    public $table_name='eleve';
    public $db_name='projetasn';
    public static $_instance;

    public static function getInstance(){
       if(is_null(self::$_instance)){
           self::$_instance=new Singleton();
       }
        return self::$_instance;
}

    public function   __construct(){


        try{
            $strConnection='mysql:host=localhost;dbname='.$this->db_name;
            $this->pdo= new PDO($strConnection,'root','' );

            echo 'connection reussit';

        }

        catch(PDOException $e){
            $msg="ERREUR PDO DANS".$e->getMessage();
            die($msg);

        }

    }



    //attrib est le tableau contenant les different champs de la table et params contient les valeus a inserer

    public function insertDB($attrib,$params){

        $i=0;$a=""; $pt="";
        for($i=0;$i<count($attrib);$i++){
            if($i!=count($attrib)-1){  $a=$a.$attrib[$i].",";  $pt=$pt."?,";  }
            else { $a=$a.$attrib[$i];  $pt=$pt."?";  }
        }
        $query = "INSERT INTO $this->table_name($a) VALUES ($pt)";
        echo $query ;
        $ps=$this->pdo->prepare($query);
        $ps->execute($params);

    }

//a est l'attribut a selectionner dans la table

    public function selectBD($table , $a){

           $ps=$this->pdo->query("SELECT $a FROM $this->table_name");
           $ps->setFetchMode(PDO::FETCH_OBJ);
            while($p=$ps->fetch()){
                echo $table.$p->nom.'<br/>';
            }
    }

}
//quelques appelle de fonctions

/*$t=array("matricule","nom","prenom","dateNais","addressParent","telParent","IdClass","IdBus","IdCantine","tranche1","tranche2","tranche3","inscription");
$params=array("","tona","steve","","","","","","","","","","");

$instance=Singleton::getInstance();
$instance->insertDB($t,$params);
$instance->selectBD('nom');
*/

?>