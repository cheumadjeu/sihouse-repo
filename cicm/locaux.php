<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <link  rel="stylesheet" href="css/custom.css" />
    <link  rel="stylesheet" href="css/bootstrap.min.css" />
    <link  rel="stylesheet" href="css/jquery-ui.css" />
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>
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
<!--debut entete CNI-->
<div class="container spacer">
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
        <div style="margin-left: 1em" class="col-xs-4" id="pic-fidelite-parent">
            <a href="index.php" class="bleu">
                <img id="pic-fidelite" style="margin-left: 22px;" src="img/user.png" /><br/>
                Fidélités<br/>
            </a>
        </div>
    </div>
  <!-- Test -->
  <div  class="row">
        <div class="col-lg-4">
        </div>
        <div  class="input-group col-lg-4">
           
            <input  list="taxonomy-filter"    class="form-control" type="text"  PLACEHOLDER="Effectuer un filtre" id="search-taxonomy-rooms" >
             <datalist id="taxonomy-filter">
                <option>1*</option>
                <option>2*</option>
                <option>3*</option>
                <option>4*</option>
                <option>15000</option>
                <option>24900</option>
                <option>39000</option>
                <option>55800</option>
                <option>154800</option>
                <option>occupé</option>
                <option>libre</option>
                <option>indisponible</option>
                <option>cheumadjeu rodrigue</option>
                <option>Alain Tona</option>
                <option>Matip mike</option>
                <option>Sensei Liendji</option>

            </datalist>
        
            <button  id="btn-okey" type="button" class="btn btn-primary btn-xs input-group-addon bg-warning">ok</button>
        
        </div>
        <div class="col-lg-4">
        </div>
        
        
    </div>
  <div class="row" >
  	
  	

  	<div class="col-lg-12" style="height:343px;overflow: auto">
  		<ul class="nav nav-tabs">

        <li class="nav-item " >
          <a class="nav-link active"  id="link1Listener">Chambres</a>
        </li>
      
        <li class="nav-item">
          <a class="nav-link" id="link2Listener">Salles</a>
        </li>
   </ul>
  
  <div id="link1">
    <table id="chambres" class="table table-bordered table-striped">
      <thead class="bg-info">
        <tr>
          <th>#</th>
          <th >Code Chambre</th>
          <th>Standing</th>
          <th>Prix</th>
          <th>Statut</th>
          <th>Date d'occupation</th>
          <th>Durée</th>
          <th>Occupant</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td data-toggle="modal" data-target="#alertBusyModal" data-whatever="@mdo"><u>CA1</u></td>
          <td>2*</td>
          <td>80000</td>
          <td><span status-shortcode="busy" style="color:red">Occupé</span></td>
          <td>11/05/2017</td>
          <td>23jours</td>
          <td>Rodrigue Cheumadjeu</td>
          
          
        </tr>
        <tr>
          <th scope="row">2</th>
          <td data-toggle="modal" data-target="#alertBusyModal" data-whatever="@mdo"><u>CA2</u></td>
          <td>2*</td>
          <td>80000</td>
          <td><span status-shortcode="busy" style="color:red">Occupé</span></td>
          <td>10/05/2017</td>
          <td>37 jours</td>
          <td>Alain Tona</td>
          
          
        </tr>

        <tr>
          <th scope="row">3</th>
          <td  data-toggle='modal' data-target='#reservationModal' data-whatever='@mdo'> <u>CA3</u></td>
          <td>3*</td>
          <td>80000</td>
          <td><b><span status-shortcode="free" style="color:green">Libre</span></b></td>
          <td></td>
          <td></td>
          <td></td>
          
          
        </tr>
        <tr>
          <th scope="row">4</th>
          <td data-toggle="modal" data-target="#alertUnAvailableModal" data-whatever="@mdo"><u>CA4</u></td>
          <td>2*</td>
          <td>80000</td>
          <td><span status-shortcode="unavailable" style="color:#039">Indisponible</span></td>
          <td>25/05/2017</td>
          <td>Travaux </td>
          <td>CICM</td>
          
          
        </tr>
         <tr>
          <th scope="row">2</th>
          <td data-toggle="modal" data-target="#alertBusyModal" data-whatever="@mdo"><u>CA2</u></td>
          <td>2*</td>
          <td>80000</td>
          <td><span status-shortcode="busy" style="color:red">Occupé</span></td>
          <td>10/05/2017</td>
          <td>37 jours</td>
          <td>Alain Tona</td>
          
          
        </tr>

        <tr>
          <th scope="row">3</th>
          <td  data-toggle='modal' data-target='#reservationModal' data-whatever='@mdo'> <u>CA3</u></td>
          <td>3*</td>
          <td>80000</td>
          <td><b><span status-shortcode="free" style="color:green">Libre</span></b></td>
          <td></td>
          <td></td>
          <td></td>
          
          
        </tr>
        <tr>
          <th scope="row">4</th>
          <td data-toggle="modal" data-target="#alertUnAvailableModal" data-whatever="@mdo"><u>CA4</u></td>
          <td>2*</td>
          <td>80000</td>
          <td><span status-shortcode="unavailable" style="color:#039">Indisponible</span></td>
          <td>25/05/2017</td>
          <td>Travaux </td>
          <td>CICM</td>
          
          
        </tr>
 <tr>
          <th scope="row">2</th>
          <td data-toggle="modal" data-target="#alertBusyModal" data-whatever="@mdo"><u>CA2</u></td>
          <td>2*</td>
          <td>80000</td>
          <td><span status-shortcode="busy" style="color:red">Occupé</span></td>
          <td>10/05/2017</td>
          <td>37 jours</td>
          <td>Alain Tona</td>
          
          
        </tr>

        <tr>
          <th scope="row">3</th>
          <td  data-toggle='modal' data-target='#reservationModal' data-whatever='@mdo'> <u>CA3</u></td>
          <td>3*</td>
          <td>80000</td>
          <td><b><span status-shortcode="free" style="color:green">Libre</span></b></td>
          <td></td>
          <td></td>
          <td></td>
          
          
        </tr>
        <tr>
          <th scope="row">4</th>
          <td data-toggle="modal" data-target="#alertUnAvailableModal" data-whatever="@mdo"><u>CA4</u></td>
          <td>2*</td>
          <td>80000</td>
          <td><span status-shortcode="unavailable" style="color:#039">Indisponible</span></td>
          <td>25/05/2017</td>
          <td>Travaux </td>
          <td>CICM</td>
          
          
        </tr>


      </tbody>
    </table>


  </div>

  <div id="link2">
    <table id="salles" class="table table-bordered table-striped">
      <thead class="bg-info">
        <tr>
          <th>#	</th> 	
          <th>Code Salle</th>
          <th>Standing</th>
          <th>Prix</th>
          <th>Statut</th>
          <th>Date d'occupation</th>
          <th>Durée</th>
          <th>Occupant</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td data-toggle="modal" data-target="#alertBusySalleModal" data-whatever="@mdo"><u>SA1</u></td>
          <td>2*</td>
          <td>80000</td>
          <td><span status-shortcode="unavailable" style="color:#039">Indisponible</span></td>
          <td>25/05/2017</td>
          <td>Travaux</td>
          <td>CICM</td>
          
          
        </tr>
        <tr>
          <th scope="row">2</th>
          <td data-toggle="modal" data-target="#reservationSalleModal" data-whatever="@mdo"><u>SA1</u></td>
          <td>2*</td>
          <td>80000</td>
          <td><b><span status-shortcode="free" style="color:green">Libre</span></b></td>
          <td></td>
          <td></td>
          <td></td>
          
          
        </tr>
        <tr>
          <th scope="row">3</th>
          <td data-toggle="modal" data-target="#reservationSalleModal" data-whatever="@mdo"><u>SA1</u></td>
          <td>2*</td>
          <td>80000</td>
          <td><b><span status-shortcode="free" style="color:green">Libre</span></b></td>
          <td></td>
          <td></td>
          <td></td>
          
          
        </tr>
        
      </tbody>
    </table>

  </div>
  	</div>

  	

  </div>
  <!--bloc de pagination -->
    <nav style="margin-left: 60em;">
        <ul class="pagination">
            <li>
                <a href="#" aria-label="Previous">
                    <span  aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li class="paginer"><a href="#">1</a></li>
            <li class="paginer"><a href="#">2</a></li>
            <li class="paginer"><a href="#">3</a></li>
            <li class="paginer"><a href="#">4</a></li>
            <li class="paginer"><a href="#">5</a></li>
            <li>
                <a  href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav>
  <!--fin bloc pagination -->

  


<!--Fin Footer bar -->
  <div class="modal fade" id="reservationModal" tabindex="-1" role="dialog" aria-labelledby="reservationModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background:rgba(15,24,65,0.7)">
                    <span class="modal-title" style="color: #fff;" id="reservationModalLabel">Réservation de chambre</span>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        
                        <div class="form-group">
                            <label class="col-form-label">Confirmez votre CNI</label>
                            <div>
                                <input class="form-control" type="date" value="" PLACEHOLDER="000000000" >
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-form-label">Date d'occupation</label>
                            <div>
                                <input class="form-control" id="datepicker1" type="date" value="" PLACEHOLDER="jj/mm/aaaa" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Date de libération</label>
                            <div>
                                <input class="form-control" id="datepicker2" type="date" value="" PLACEHOLDER="jj/mm/aaaa" >
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default">Annuler</button>
                    <button type="button" class="btn btn-primary">Réserver</button>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="reservationSalleModal" tabindex="-1" role="dialog" aria-labelledby="reservationSalleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background:rgba(15,24,65,0.7)">
                    <span class="modal-title" style="color: #fff;" id="reservationSalleModalLabel">Réservation de salle</span>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label class="col-form-label">Confirmez votre CNI</label>
                            <div>
                                <input class="form-control" type="date" value="" PLACEHOLDER="000000000" >
                            </div>
                        </div>
                        
                        
                        <div class="form-group">
                            <label class="col-form-label">Date d'occupation</label>
                            <div>
                                <input class="form-control" id="datepicker1" type="date" value="" PLACEHOLDER="jj/mm/aaaa" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Date de libération</label>
                            <div>
                                <input class="form-control" id="datepicker2" type="date" value="" PLACEHOLDER="jj/mm/aaaa" >
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default">Annuler</button>
                    <button type="button" class="btn btn-primary">Réserver</button>
                </div>
            </div>
        </div>
    </div>


</div>

<!--Bar Footer Bar  css assurer par la classe Footer-->
<nav class="navbar navbar-light footer" style="background: rgba(100,200,100,0.4)" >
    <a class="navbar-brand" href="#">
        <sub  class="signer"> powered by SIHOUSE  </sub>
    </a>
</nav>

  <script type="text/javascript" src="js/SIHdynamicTabs.js"></script>
  <script type="text/javascript">
      $(function(){
          // Cache par défaut tous les onglets de la page à l'exception du premier
          $("#link1").show(); $("#link2").hide();    

          // Mets en surbrillance l'onglet courant et désactive les autres 
          oNavigation ("#link2Listener","#link1Listener","#link2","#link1") ;
          oNavigation ("#link1Listener","#link2Listener","#link1","#link2") ;
          oReservationDialogWithConstraint("ForChambres","table#chambres   tbody tr td:nth-child(2)",'#reservationModal',"#datepicker1","#datepicker2","busy","free","unavailable","Chambre busy", 'Effectuer une réservation de chambre',"Chambre Non dispo","span","status-shortcode");
          oReservationDialogWithConstraint("ForSalles","table#salles   tbody tr td:nth-child(2)",'#reservationSalleModal',"#datepicker1","#datepicker2","busy","free","unavailable","Salle busy", 'Effectuer une réservation de salle',"Salle Non dispo","span","status-shortcode");  
                
          $(document).on('click',"#btn-okey",function(){
              //var params = $("#search-taxonomy-rooms").val();
              var result = oAjaxingBasic(/*params,*/"GET","routine.php","html");
              alert(result);
          });

          
        
      });
  </script>
  <script type="text/javascript" src="js/SIHajaxing.js"></script>
  <script type="text/javascript" src="js/SIHmainJs.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
  

  
</html>