<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head lang="en">
    <meta charset="UTF-8">
    <title>Maison C.I.C.M </title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/custom.css" />
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
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
        <div style="margin-left: 1em" class="col-xs-4" id="pic-fidelite-parent">
            <a href="fideliser.php" class="bleu">
                <img id="pic-fidelite" style="margin-left: 22px;" src="img/user.png" /><br/>
                Fidélités<br/>
            </a>
        </div>
    </div>



    <div style="margin-bottom: 2em;" class="row">
        <div  class="form-group " style="margin-left: 20em;">
            <input  style="width: 24em; margin-right:3em;"   class="form-control" type="text"  PLACEHOLDER="CNI" >
        </div>

        <div style="margin-right: 3em;">
            <button data-toggle="modal" data-target="#fideliserModal" data-whatever="@mdo" type="button" class="btn btn-primary btn-xs">ok</button>
        </div>

        
    </div>
    <!--Fin bloc de cni   -->

    <!--Bloc Table-->

        <div class="row">

            <div class="col-lg-3">
                <table class="table table-bordered ">
                    <thead class="bg-info">
                    <tr style="color: #ffffff" >
                        <th>Code cmde</th>
                        <th >Date</th>
                        <th >Montant<br/>(CFA)</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>CO2</td>
                            <td>05/06/2017</td>
                            <td>19000</td>

                        </tr>
                        <tr>
                            <td>CO1</td>
                            <td>09/06/2017</td>
                            <td>85000</td>

                        </tr>
                                            <tr>
                            <td>CO3</td>
                            <td>10/06/2017</td>
                            <td>125000</td>

                        </tr>
                        <tr>
                            <td>CO5</td>
                            <td>12/06/2017</td>
                            <td>77000</td>

                        </tr>
                        
                        </tbody>
                </table>
            </div>
            <div class="col-lg-9">
                <table class="table table-bordered table-striped">
                    <thead class="bg-warning">
                    <tr style="color: #ffffff" >
                        <th style="text-align:center">X</th>
                        <th>Noms</th>
                        <th>Login</th>
                        <th>Contact</th>
                        <th>Email</th>
                        <th>Véhicule</th>

                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><img src="img/pic01.jpg" width="35px" height="35px" style="border-radius: 3em"></td>
                            <td>Otto Marcelin</td>
                            <td>Simon</td>
                            <td>69215487</td>
                            <td>aMark@sihuz.fr</td>
                            <td>TOYATA 2002, CE 245 K</td>

                        </tr>
                         <tr>
                            <td><img src="img/pic02.jpg"  width="35px" height="35px" style="border-radius: 3em"></td>
                            <td>Otto Marcelin</td>
                            <td>Mark</td>
                            <td>69215487</td>
                            <td>aMark@sihuz.fr</td>
                            <td>RAV 4 1979, CE 245 K</td>

                        </tr>
                         <tr>
                            <td><img src="img/pic03.jpg"  width="35px" height="35px" style="border-radius: 3em"></td>
                            <td>Otto Marcelin</td>
                            <td>Mark</td>
                            <td>69215487</td>
                            <td>aMark@sihuz.fr</td>
                            <td>RAV 4 1979, CE 245 K</td>

                        </tr>
                         <tr>
                            <td><img src="img/pic04.jpg"  width="35px" height="35px" style="border-radius: 3em"></td>
                            <td>Otto Marcelin</td>
                            <td>Mark</td>
                            <td>69215487</td>
                            <td>aMark@sihuz.fr</td>
                            <td>RAV 4 1979, CE 245 K</td>

                        </tr>

                   
                    </tbody>
                </table>
            </div>


            
        </div>
    <!--Fin Bloc Table-->

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

</div>
<div class="modal fade" id="fideliserModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <span class="modal-title" style="color: #333;" id="exampleModalLabel">Nouveau client</span>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group row ">
                        <label class="col-2 col-form-label">CNI</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" value="" PLACEHOLDER="CNI" >
                        </div>
                    </div>

                    <div class="form-group row ">
                        <label  class="col-2 col-form-label">Noms</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" value="" PLACEHOLDER="noms et prenoms" >
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                        </div>
                    </div>
                     <div>
                        <label class="spacerRight">sexe :</label>   
                        <input style="margin-right: 6px;" type="radio" class="spacerRight" aria-label="">M
                        <input style="margin-left: 34px;" type="radio" aria-label=""> F
                     </div>
                     <div class="row">
                        <fieldset class="form-control">
                            <legend class="form-control bg-warning">Véhicules</legend>    
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Immatriculation</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputEmail3" >
                            </div>
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Modèle</label>
                            <div class="col-sm-10">
                                <input type="text²" class="form-control" id="inputEmail3">
                            </div>
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Marque</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputEmail3" >
                            </div>
                        </fieldset>
                     </div>
                    
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-primary">Fideliser</button>
            </div>
        </div>
    </div>
</div>

<script>
    $('#exampleModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var recipient = button.data('whatever') // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        modal.find('.modal-title').text('Fidelisation du client ')
        modal.find('.modal-body input').val("")
    })
</script>

<!--Bar Footer Bar  css assurer par la classe Footer-->
<nav class="navbar navbar-light footer" style="background: rgba(100,200,100,0.4)" >
    <a class="navbar-brand" href="#">
        <sub  class="signer"> powered by SIHOUSE  </sub>
    </a>
</nav>
<!--Fin Footer bar -->

</body>
</html>