<?php
/**
 * Created by PhpStorm.
 * User: eric
 * Date: 26/06/2017
 * Time: 07:41
 */
require_once("conn.php");
$personnes=array();
$query=$pdo->query("SELECT * FROM personne ORDER  BY cni_personne DESC ");
while($all=$query->fetch())
{
    $personnes[]=$all;
}

foreach($personnes as $personne)
{
    ?>

    <table class="table table-bordered table-striped">
        <tr>
            <td><?php  echo $personne['cni_personne'] ?></td>
            <td><?php  echo $personne['nom_personne'] ?></td>
            <td><?php  echo $personne['contact'] ?></td>
            <td><?php  echo $personne['email'] ?></td>
            <td><?php  echo $personne['vehicules'] ?></td>

        </tr>
    </table>

  <?php
}

?>