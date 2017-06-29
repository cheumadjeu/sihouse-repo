<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/custom.css" />
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>
    <link  rel="stylesheet" href="css/jquery-ui.css" />
</head>
<body>

<!--Bar entete -->
<nav class="navbar navbar-light bg-info ">
    <a class="navbar-brand col-xs-6 col-sm-3" href="#">
        <img style="margin-left: 5em"  src="img/logo.png" width="55" height="55" alt="">
        <span style="color: #333;">Maison C.I.C.M </span>
       
        <span  style="margin-left:700px"> <img src="img/pic05.jpg" width="30px" height="30px"/>&nbsp;&nbsp;&nbsp;Bonjour Admin&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;<img src="img/pic-lock.png" width="40px" height="40px"/</span>
        
    </a>
</nav>
<!-- Fin Bar entete -->
<!-- Fin Bar entete -->

<div class="container spacer">

 <!--debut entete CNI-->

    <div style="margin-top: 1em; margin-left: 75%;" class="row">
        <div class="col-xs-4" id="pic-logement-parent">
            <a href="locaux.php" class="bleu">
                <img id="pic-logement" style="margin-left: 20px;" src="img/house.png" /><br/>
                Logements<br/>
            </a>
        </div>
        <div style="margin-left: 1em" class="col-xs-4" id="pic-commande-parent">
            <a href="commande.php" class="bleu">
                <img id="pic-commande" style="margin-left: 22px;" src="img/buy.png" /><br/>
                Commandes<br/>
            </a>
        </div>
        <div style="margin-left: 1em; " class="col-xs-4" >
            <a href="index.php" class="bleu">
                <img id="pic-fidelite" style="margin-left: 22px;" src="img/user.png" /><br/>
                Fidélités<br/>
            </a>
        </div>
    </div>
	<div class="row">
		<span  style="color: #036;">Liste des commandes du jour</span>&nbsp;&nbsp;&nbsp;&nbsp;<b><span id="printer-date-today"></span></b>
	</div>
	<div class="row" style="margin-top:1em;">
   		
    	<div class="col-md-5" style="height:315px;overflow: auto">
	    		<table class="table table-bordered table-striped">
		            <thead class="bg-info">
		            <tr>
		                <th>Nom & Prenoms</th>
		                <th>Montant(CFA) </th>
		                <th>Annuler </th>
		            </tr>
		            </thead>
		            <tbody >
		           <tr>
		                <th scope="row" style="background:rgba(100,100,15,0.2)">Cheumadjeu Rodrigue</th>
		                <td>22000</td>
		                <td class="text-center"><img class="btn-cancelled" src='img/trash.png' width='22px' height='22px'"></td>

		            </tr>
		            <tr>
		                <th scope="row" style="background:rgba(100,100,15,0.2)">Tsafack philbert</th>
		                <td>45200</td>
		                <td class="text-center" ><img class="btn-cancelled"  src='img/trash.png' width='22px' height='22px'"></td>

		            </tr>
		            <tr>
		                <th scope="row" style="background:rgba(100,100,15,0.2)">Norbert Jose</th>
		                <td>124500</td>
		                <td class="text-center"><img class="btn-cancelled"  src='img/trash.png' width='22px' height='22px'"> </td>

		            </tr>
		            <tr>
		                <th scope="row" style="background:rgba(100,100,15,0.2)"> Cheumadjeu Rodrigue</th>
		                <td>22000</td>
		                <td class="text-center"><img  class="btn-cancelled" src='img/trash.png' width='22px' height='22px'"></td>

		            </tr>
		            <tr>
		                <th scope="row" style="background:rgba(100,100,15,0.2)">Tsafack philbert</th>
		                <td>45200</td>
		                <td class="text-center"><img class="btn-cancelled"  src='img/trash.png' width='22px' height='22px'"></td>

		            </tr>
		            <tr>
		                <th scope="row" style="background:rgba(100,100,15,0.2)">Tsafack philbert</th>
		                <td>45200</td>
		                <td class="text-center"><img class="btn-cancelled"  src='img/trash.png' width='22px' height='22px'"></td>

		            </tr>
		            <tr>
		                <th scope="row" style="background:rgba(100,100,15,0.2)">Norbert Jose</th>
		                <td>124500</td>
		                <td class="text-center"><img class="btn-cancelled"  src='img/trash.png' width='22px' height='22px'"></td>

		            </tr>
		            <tr>
		                <th scope="row" style="background:rgba(100,100,15,0.2)"> Cheumadjeu Rodrigue</th>
		                <td>22000</td>
		                <td class="text-center"><img class="btn-cancelled"  src='img/trash.png' width='22px' height='22px'"></td>

		            </tr>
		            <tr>
		                <th scope="row" style="background:rgba(100,100,15,0.2)">Tsafack philbert</th>
		                <td>45200</td>
		                <td class="text-center"><img class="btn-cancelled"  src='img/trash.png' width='22px' height='22px'"></td>

		            </tr>
		            
		            </tbody>
	        	</table>
    	</div>

    	<div class="col-md-7">
    		<input type="text" list="list-services" class="form-control mb-2 mr-sm-2 mb-sm-0" id="field-services" placeholder="services">
            <datalist id="list-services">
                <option>Chemise enfant</option>
                <option>Pantalon homme</option>
                <option>Pantalon enfant</option>
                <option>Costume</option>
                <option>Veste</option>
                <option>Ensemble homme</option>
                <option>Ensemble homme</option>
                <option>Costume 3 pièces</option>
                <option>Chemise homme</option>
                <option>Jupe simple</option>
                <option>Corsage</option>
                <option>Sous vêtement</option>
                <option>Casquette</option>
                <option>Tennis</option>
                <option>upe cuir</option>
                <option>Robe de mariage</option>
                <option>Jupe plissée</option>
               
            </datalist>
            <div >Quantite</div>
            <form class="form-inline" >
                <input type="number" class="form-control mb-2 mr-sm-2 mb-sm-0" id="field-quantity" placeholder="0" value='1'>
               
                <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                    <input type="text" style="width: 13em;" class="form-control" id="field-uniq-price" placeholder="prix unitaire" value="100" readonly >
                </div>
                <span><img  width="35" height="35"  src="img/add1.png " title="Ajouter" id="add-service" /></span>
            </form>


            <div id="flowToPrint" style="height:200px;overflow: auto">
            <table class="table table-bordered" style="margin-top: 5px;">
                <thead class="bg-warning">
               <tr>
                    <th>Service</th>
                    <th>Quantite</th>
                    <th>Prix</th>
                    <th class="cacher">Actions</th>
                </tr>
                </thead>
                <tbody>
	                
           		</tbody>
          </table>
          </div>

          <button   type="button"  class="btn btn-success btn-sm btn-same-size" id="btn-printer" >Régler & Imprimer</button>
          <button   type="button"  class="btn btn-primary btn-sm btn-same-size" id="btn-pay">Régler</button>
          <span style="margin-left: 2em; font-size:1.5em" > <u>Prix Total</u> : <strong style="color:blue" id="cout-commande">0</strong> </span>FCFA
    	</div>

        
    </div>

    <div  id="cniModal" title="Confirmez votre CNI svp !!">
            <form>
                <div class="form-group row ">
                    <label class="col-2 col-form-label">CNI</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" value="" PLACEHOLDER="00000000" >
                    </div>
                </div>
            </form>
    </div>

    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <span class="modal-title" style="color:red;" id="deleteModalLabel">New message</span>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <img src="img/attention.png" /> <p style="color: red;">Voulez allez supprimer cet article !</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger">Supprimer</button>
                </div>
            </div>
        </div>
    </div>


<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <span class="modal-title" style="color: blue;" id="editModalLabel">Nouveau message</span>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group row ">
                        <label class="col-2 col-form-label">Quantite</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="number" value="" PLACEHOLDER="5" >
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Modifier</button>
            </div>
        </div>
    </div>
</div>



</div>



<div id="buffer" type="hidden"></div>
<!--Bar Footer Bar  css assurer par la classe Footer-->
<nav class="navbar navbar-light footer" style="background: rgba(100,200,100,0.4)" >
    <a class="navbar-brand" href="#">
        <sub  class="signer"> powered by SIHOUSE  </sub>
    </a>
</nav>
<!--Fin Footer bar -->

    <script type="text/javascript" src="js/SIHprinter.js"></script>
    <script type="text/javascript" src="js/jquery.printelement.js"></script>
    <script type="text/javascript" src="js/SIHmainJs.js"></script>
    <script>
    	  
    	//oExtractFlowForCommands('#btn-printer' , '#flowToPrint' , '.cacher' , 'Message' , 'popup');
        /*oExtractFlowForCommands("#btn-printer" , "#flowToPrintDad" , ".cacher" , "Message" , "popup");*/
        printModalWindow('#cniModal' , 'Confirmez votre CNI svp') ;
        printModalWindow('#editModal' , 'Modifier l\'article ') ;
        oTimesAmount("#field-quantity", "#field-uniq-price");
        oAddService ("#add-service","#flowToPrint tbody");
        oDeleteRowCommande(".btn-delete-commande");
        oDeleteRowCommande(".btn-cancelled");
        oEditRowCommande(".btn-edit-commande");
        oGetCurrentDate("#printer-date-today");
        oNotSubmittingBlankBill();
       	 
        
    </script>
</body>




</html>