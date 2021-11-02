<?php
if(isset($_GET['var']))
{
    $id=$_GET['var'];
    include ('Conexcion.php');
    $con=conectar();
    $consulta="SELECT programa.idprograma, programa.Nombreprograma from programa inner JOIN alumno on programa.idprograma=alumno.idprograma where idalumno=id";
    $resultado = mysqli_query( $con, $consulta);
    $consulta2="SELECT materia.Nombremateria from materia INNER JOIN programa on materia.idprograma=materia.idprograma WHERE materia.idprograma=$resultado";
    $resultado2 = mysqli_query( $con, $consulta2);
    foreach($resultado2 as $most):
        echo $most['Nombremateria'];
     endforeach;
}
else echo('no se pudo');
/*?>
<script src="/js/jquery.js"></script>
<script language="JavaScript">
$(document).ready(function() {
  $(":checkbox").click(function(event) {
    if ($(this).is(":checked"))
      $(".ocultar").show();
    else
      $(".ocultar").hide();
  });*/
});
</script>