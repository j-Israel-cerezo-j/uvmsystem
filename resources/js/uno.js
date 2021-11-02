var almacena = "";
var selected =  new Array();

var result;
var variable = selected;
$post("Tabladatos.php");
{opciones:variable, function () {

    $("#seleccion").click(function(){
        var result = ['opciones'];
         selected.length=0;
         $("#opciones:checkbox").each(function(){
              result['opciones'] = selected.push($(this).val());
           /*alert($(this).val());*/
        }) 
         
        alert(selected);
    })
}}


