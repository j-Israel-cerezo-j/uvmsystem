<?php session_start(); ?>
<!DOCTYPE html>
    <head>
        <meta charset="UTP-8">
        <title>Universidad del Valle de Mexico</title>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php css("listab.css")?>" type="text/css">    
    <!-- <link rel="stylesheet" href="CSS/estilo_lista1.css?jol" type="text/css"> -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <!-- <script type="text/javascript" src="jquery-1.9.0.min.js"></script> -->
        
    </head>
    <body>
    <form method='POST' action='prue1.php'> 
    
        <div class="container-table">
            <div class="table__title">Alumnos de baja &nbsp; <input type="checkbox" id="checkTodos"> Seleccionar todos &nbsp;<a href="GenerarExcel.php" >Generar Reporte</a></div>
            <div class="table__header">Nombre</div>
            <div class="table__header">Correo</div>
            <div class="table__header">Telefono</div>
            <div class="table__header">Motivo</div>
         
            <?php
            foreach($bajas as $baja){ ?>
            
                <div class="table__item"><input type="checkbox" name="opcion[]" value="<?php echo $baja['correo'];?>"><?php echo $baja['nombre']?></div>
                <div class="table__item "><a id="name__edit" href="mailto:<?php echo $baja["correo"]?>?Subject=CorreoVerificacion&body=Este es el ejemplo de correo"><?php echo $baja["correo"]?></a></div>
                <div class="table__item"><?php echo $baja["telefono"]?></div>
                <div class="table__item"><?php echo $baja["motivo"]?></div>
            <?php }?>
            

        </div>
        <div class="container">
            <div class="center">        
                <a class="btn btn-primary" href="<?php controller("alumno/lista.php")?>" name="egre" role="button">Regresar</a>
                <button type="submit" class="btn btn-warning" value="<?php echo $opcion?>" name="siguiente" >Siguiente </button>  </td>
                <input type="hidden" id="v1" value="<?php echo $opcion?>" name="opciones">  </input>
            </div>
        </div>
   </form>
   <script type="text/javascript"> 
    $('document').ready(function(){
   $("#checkTodos").change(function () {
      $("input:checkbox").prop('checked', $(this).prop("checked"));
  });
});
</script>
    </body>

