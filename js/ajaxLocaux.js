/**
 * Created by eric on 26/06/2017.
 */


$(document).ready(function(){

    LireChambres();
    LireSalles();
    function LireChambres(){
        $.post('lireLocaux.php',function(data){
            $('.chambres').html(data);
        });
    }
    setInterval(LireChambres,1000);



    function LireSalles(){
        $.post('lireSalle.php',function(data){
            $('.salles').html(data);
        });
    }
    setInterval(LireSalles,1000);


});
