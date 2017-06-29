function oAjaxingBasic (oParams , cMethod , oRouteURI , cFormatType) {
    
    $.ajax({
        type: cMethod,
        url: oRouteURI,
        dataType : cFormatType,
        data : oParams,
        success:function(data){
            return data;
        },
        error:function(msg, string){
            return "Error !: " + string ;
        }
    });
}
/*
var params = $("#zone").val();
var result = oAjaxingBasic(params,"GET","personne.php","html");
alert(result());*/