/**
	Author : Rodrigue Cheumadjeu 
			 Alain Tona
*/

/*@@@@@@@@@@@@@@@@@ Fichier Js contenant la logique fonctionnelle client générique de lapplication @@@@@@@@@@@@@@@@*/

/**
	Fonction d'affichage de la fenêtre modale à isoler et refactoriser
	
*/
function printModalWindow(idModal ,title ){
    $(idModal).on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) 
        var recipient = button.data('whatever') 
        var modal = $(this)
        modal.find('.modal-title').text(title)
        modal.find('.modal-body input').val("")
    })    
}


/*Cette fonction ne rend un dialogue que si le statut de la chambre est libre */
function oReservationDialogWithConstraint(oForRooms ,oColumn , oIdModal , oDpickerField1 , oDpickerField2 , dStateBusy , dStateFree , dStateUnav,oTextBusy , oTextAccept ,oTextError , dHTMLkey , dHTMLdirective ){
	$(oColumn).on('click',function(){
              var val = $(this).parent().find(dHTMLkey).attr(dHTMLdirective);
              $( oDpickerField1 ).datepicker({ inline: true });
              $( oDpickerField2 ).datepicker({ inline: true });
              if(val == dStateBusy){
                    alert(oTextBusy);
              }else if (val == dStateFree){
                    printModalWindow(oIdModal , oTextAccept) ;
                    
              }else if (val == dStateUnav){
                  alert(oTextError);
              }

            });
}


/* Doubler le montant d'un service côté client: Reprendre à cette étape */
function oTimesAmount (oQuantite , oCoutUnitaire) {
	var oOriginalUnitPriceValue = $(oCoutUnitaire).val();
	var oOriginalQteValue = $(oQuantite).val();
	$(oQuantite).change(function(){
		var oAmountOfService = oOriginalUnitPriceValue * $(oQuantite).val(); 
		$(oCoutUnitaire).val(oAmountOfService);
		if($(oQuantite).val()<=0) { $(oQuantite).val("0"); $(oCoutUnitaire).val("0"); } 
	});
}



 function oExtractFlowForCommands(oListener , oFlowToPrint , oClassToHide , oMessage , oPopup){
        var $t=$(oFlowToPrint).clone();
     	$(oClassToHide).hide();
        printFlow(oListener,oFlowToPrint,oPopup,oMessage);   
        //setTimeout(function() {$(oFlowToPrint).html($t);}, 200);
        
}



function  oMisAjourDate(sListener)
    {      
       $(sListener).find('tr').each(function(){
	        date1 = new Date($(this).children().eq(2).text());
            date2 = new Date();
		    var  t=oDateDiff(date1, date2);
		    if(!t.day) $(this).children().eq(2).next().text("0 jours " );
		    else $(this).children().eq(2).next().text(t.day+"  jours " );
		});  
    }
    

function oAddService (oIdService,oRoot){
	
	$(document).on('click',oIdService,function(){
		if($("#field-services").val()!=''){
			var tbodyRoot = $(oRoot).html();	
						   tbodyConnexe = "<tr id='corps-commande'>" ;
			tbodyConnexe = tbodyConnexe + "<th scope=row id='service'>"+$("#field-services").val()+"</th>";
	        tbodyConnexe = tbodyConnexe + "<td id='quantite'>"+$("#field-quantity").val()+"</td>";
	        tbodyConnexe = tbodyConnexe + "<td id='prix'>"+$("#field-uniq-price").val()+"</td>";
	        tbodyConnexe = tbodyConnexe + "<td class='text-center cacher'>";
	        tbodyConnexe = tbodyConnexe + "<img  title=Modifier width=20 height=20  class='btn-edit-commande'  src=img/modifier.png/>"
			tbodyConnexe = tbodyConnexe + "<img  width=20 height=20 class='btn-delete-commande' style='margin-left: 15px' src='img/delete.png'/>"
	        tbodyConnexe = tbodyConnexe + "</td>";
	        tbodyConnexe = tbodyConnexe + "</tr>";
			$("#flowToPrint tbody").html(tbodyConnexe+tbodyRoot);
			oSommeCoutCommande("#cout-commande");
        
	
		}else alert("Précisez un service SVP !! ");
			});
}    

function oSommeCoutCommande(oTotal){
	var som=0; var _SEUIL_ARTICLES = 50;
	for(var i=1; i<_SEUIL_ARTICLES; i++){
			var tmp  = $("#flowToPrint tbody tr:nth-child("+i+") td:nth-child(3)").text() ;
			$("#buffer").val(tmp);
			var atmp = parseInt($("#buffer").val());
			if(atmp){
				som = som + atmp ;		
		}	
		$(oTotal).html(som) ;
	}
}

//fonction qui calcul la difference de date


function oDateDiff(date1, date2){
    var diff = {}                           
	var tmp = date2 - date1;
 	tmp = Math.floor(tmp/1000);             
    diff.sec = tmp % 60;                   
 	tmp = Math.floor((tmp-diff.sec)/60);    
    diff.min = tmp % 60;                    
 	tmp = Math.floor((tmp-diff.min)/60);    
    diff.hour = tmp % 24;                   
    tmp = Math.floor((tmp-diff.hour)/24);   
    diff.day = tmp;
    return diff;
}


// oMisAjourDate('tbody');

//Suppression d'une ligne d'articles dans la commande
function oDeleteRowCommande(oListenerClass){
	$(document).on('click',oListenerClass,function(){
		$(this).parent().parent().remove();
		$("#cout-commande").css("color","green");
		oSommeCoutCommande("#cout-commande");
	});
}

//Editer une ligne d'articles dans la commande
function oEditRowCommande(oListenerClass){
	$(document).on('click',oListenerClass,function(){
		var serviceToEdit = $(this).parent().parent().find('#service').html();
		var quantiteToEdit = $(this).parent().parent().find('#quantite').html();
		var prixToEdit = $(this).parent().parent().find('#prix').html();
		$("#field-services").val(serviceToEdit);
		$("#field-quantity").val(quantiteToEdit);
		$("#field-uniq-price").val(prixToEdit);
		$(this).parent().parent().remove();
		oSommeCoutCommande("#cout-commande");
	});	
}



// get La date système
function oGetCurrentDate (oPrinter) {
	var now = new Date() ;
	var day = now.getDate() ;
	var month = now.getMonth()+1 ;
	var year = now.getFullYear() ;
	realDate = day+"/"+month+"/"+year ;
	$(oPrinter).html(realDate);
}

// Présenter un UI dialogue avancé
function oShowDialog(oListener , oScreen , oMode){

		$(oScreen).dialog({
			modal: true,
			buttons: {
				"Non": function() {
				$( this ).dialog( "close" );
				},
				"Oui": function() {

				$( this ).dialog( "close" );
				
				}
			}
		});
	
}  


// Présenter un UI dialogue avancé
function oShowDialog1(oListener , oScreen , oMode){
	
		$(oScreen).dialog({
			modal: true,
			buttons: {
				"Non": function() {
				$( this ).dialog( "close" );
				},
				"Oui": function() {
					
					$('#flowToPrint').printElement({leaveOpen:true, printMode:'popup', pageTitle:'Message'});
					$( this ).dialog( "close" );
				 
				}
			}
		});
	
}  

function oNotSubmittingBlankBill(){
	$(document).on('click',"#btn-pay,#btn-printer",function(){
       		if(!$(this).parent().find("#corps-commande").html()){
					alert("Commande vide , choisissez au moins un service pour régler !! Merci");
			}
			else {
				 oShowDialog("#btn-pay","#cniModal","open");
       			 oShowDialog1("#btn-printer","#cniModal","open");		
			}
		});
}
