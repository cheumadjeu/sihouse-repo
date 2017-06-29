<?php
/**
 * Created by PhpStorm.
 * User: eric
 * Date: 26/06/2017
 * Time: 18:21
 */

require_once("conn.php");
$personnes=array();
$query=$pdo->query("SELECT * FROM services WHERE categorie='chambre'  ORDER  BY code_service DESC ");
while($all=$query->fetch())
{
    $personnes[]=$all;
}

foreach($personnes as $personne)
{
    ?>

    <table class="table table-bordered table-striped">
        <tr>
            <td class="code" data-toggle="modal" data-target="#reservationModal" data-whatever="@mdo"><?php  echo $personne['code_service'] ?></td>
            <td class="ch"   ><?php  echo $personne['standing'] ?></td>
            <td><?php  echo $personne['prix_unitaire'] ?></td>
            <td><?php  echo $personne['statut'] ?></td>
            <td><?php  echo " "  ?></td>
            <td><?php  echo " "  ?></td>
            <td><?php  echo " " ?></td>
        </tr>
    </table>

<?php
}


?>