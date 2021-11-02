<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">    

    <link rel="stylesheet" href="<?php css("estilo_lista1.css?jol")?>" type="text/css">
    <link rel="stylesheet" href="<?php css("estilo.css?mj")?>">
    <link rel="stylesheet" href="<?php css("texto.css?mj")?>">    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <!-- <link rel="stylesheet" href="CSS/texto.css"> -->
    <title>Tabla</title>
  </head>
  <body>


  <!-- se manda a llamar el header -->
  <header>
            <?php
                includeView('header.php'); 
            ?>
        </header>

    <ul class="tabs" style="color:black; list-style: none; display: flex;">
      <li style="width: 18%;">
        <a href="http://localhost/estadia/sistemauvm_ver3.0/Ranma PT.php" style="color:black; text-decoration: none; font-size: 16px; text-align: center; display: block; padding: 0px 0px;">
          <span class="fa fa-home"></span><span class="tab-text">
          <p class="text-success">GESTION DE CALIDAD</p></span>
        </a>
      </li>
      <li style="width: 18%;">
        <a href="http://localhost/estadia/sistemauvm_ver3.0/Ranma FD.php" style="color:black; text-decoration: none; font-size: 16px; text-align: center; display: block; padding: 0px 0px;">
          <span class="fa fa-group"></span><span class="tab-text">
          <p class="text-success">FISIOTERAPIA DEPORTIVA</p></span>
        </a>
      </li>
      <li style="width: 18%;">
        <a href="http://localhost/estadia/sistemauvm_ver3.0/Ranma MBAF.php" style="color:black; text-decoration: none; font-size: 16px; text-align: center; display: block; padding: 0px 0px;">
          <span class="fa fa-home"></span><span class="tab-text">
          <p class="text-success">MBA FINANZAS</p></span>
        </a>
      </li>
      <li style="width: 18%;">
        <a href="http://localhost/estadia/sistemauvm_ver3.0/Ranma MBAM.php" style="color:black; text-decoration: none; font-size: 16px; text-align: center; display: block; padding: 0px 0px;">
          <span class="fa fa-group"></span>
          <span class="tab-text"><p class="text-success">MBA MERCADOTENCIA</p></span>
        </a>
      </li>
      <li style="width: 18%;">
        <a href="http://localhost/estadia/sistemauvm_ver3.0/Ranma MBAT.php" style="color:black; text-decoration: none; font-size: 16px; text-align: center; display: block; padding: 0px 0px;">
          <span class="fa fa-home"></span>
          <span class="tab-text"><p class="text-success">MBA TALENTO</p></span>
        </a>
      </li>
      <li style="width: 18%;">
        <a href="http://localhost/estadia/sistemauvm_ver3.0/Ranma DH.php" style="color:black; text-decoration: none; font-size: 16px; text-align: center; display: block; padding: 0px 0px;">
          <span class="fa fa-group"></span>
          <span class="tab-text"><p class="text-success">DERCHOS HUMANOS</p></span>
        </a>
      </li>
      <li style="width: 18%;">
        <a href="http://localhost/estadia/sistemauvm_ver3.0/Ranma DC.php" style="color:black; text-decoration: none; font-size: 16px; text-align: center; display: block; padding: 0px 0px;">
          <span class="fa fa-home"></span>
          <span class="tab-text"><p class="text-success">DERECHO CORPORATIVO</p></span>
        </a>
      </li>
      <li style="width: 18%;">
        <a href="http://localhost/estadia/sistemauvm_ver3.0/Ranma DEC.php" style="color:black; text-decoration: none; font-size: 16px; text-align: center; display: block; padding: 0px 0px;">
          <span class="fa fa-home"></span>
          <span class="tab-text"><p class="text-success">DERECHO CIVIL</p></span>
        </a>
      </li>
      <li style="width: 18%;">
        <a href="http://localhost/estadia/sistemauvm_ver3.0/Ranma DF.php" style="color:black; text-decoration: none; font-size: 16px; text-align: center; display: block; padding: 0px 0px;">
          <span class="fa fa-group"></span>
          <span class="tab-text"><p class="text-success">DERECHO FISCAL</p></span>
        </a>
      </li>
      <li style="width: 18%;">
        <a href="http://localhost/estadia/sistemauvm_ver3.0/Ranma SH.php" style="color:black; text-decoration: none; font-size: 16px; text-align: center; display: block; padding: 0px 0px;">
          <span class="fa fa-group"></span>
          <span class="tab-text"><p class="text-success">ESP.EN SEGURIDAD E HIGIENE</p></span>
        </a>
      </li>
    </ul>
<form method='POST' action='pru.php'> 
<br>
        <button type="submit" class="btn btn-warning" value="" name="Cambios" >Guardar Cambios</button> &nbsp; <input type="checkbox" id="checkTodos"> Seleccionar todos 
        <button type="submit" class="btn btn-warning" value="<?php echo $opcion?>" name="siguiente" >Siguiente </button>  </td>
        <input type="hidden" id="v1" value="<?php echo $opcion?>" name="opciones">  </input>
<br>
  
</br></br>
<div class="table">
<table>
<thead>
    <tr>
      <th class="texto-vertical-2" style="color:white";>Id_Prog</th>
      <th class="texto-vertical-2" style="color:white";>Cuenta</th>
      <th class="texto-vertical-2" style="color:white";>Nombre</th>
      <th class="texto-vertical-2" style="color:white";>Herramientas_Analíticas</th>
      <th class="texto-vertical-2" style="color:white";>Estadística_Descriptiva_Inferencial</th>
      <th class="texto-vertical-2" style="color:white";>Dirección_Sistemas_Productividad</th>
      <th class="texto-vertical-2" style="color:white";>Logística_Estratégica</th>
      <th class="texto-vertical-2" style="color:white";>Administración_Estratégica_Calidad</th>
      <th class="texto-vertical-2" style="color:white";>Administración_Sistemas_Calidad</th>
      <th class="texto-vertical-2" style="color:white";>Administración_Total_Calidad</th>
      <th class="texto-vertical-2" style="color:white";>Diseño_Experimentos_Calidad</th>
      <th class="texto-vertical-2" style="color:white";>Control_Estadístico_Procesos_Manufactura_Servicios</th>
      <th class="texto-vertical-2" style="color:white";>Investigación_Operaciones</th>
      <th class="texto-vertical-2" style="color:white";>Métodos_Calidad_Enfoque_Cliente</th>
      <th class="texto-vertical-2" style="color:white";>Desarrollo_Comportamiento_Organizacional</th>
      <th class="texto-vertical-2" style="color:white";>Sistema_Costos_Calidad</th>
      <th class="texto-vertical-2" style="color:white";>Normatividad</th>
      <th class="texto-vertical-2" style="color:white"; >Acción </th>  
    </tr>                      
  </thead>
  <tbody>
  <?php
                       
    foreach($PTMGEC33F15 as $most){ ?>
    <tr>
    <td ><?php echo $most['idprograma']    ?></td>
    <td ><?php echo $most['cuenta']    ?></td>
    <td ><input type="checkbox" name="opcion[]" value="<?php //echo $most['correo'];?>"><?php echo $most['nombre']    ?></td>
    <td ><input type="text" size=30 style="width:25px" value="<?php echo $most['Herramientas_Analíticas']?>"></td>
    <td ><input type="text" size=30 style="width:25px" value="<?php echo $most['Estadística_Descriptiva_Inferencial']?>"></td>
    <td ><input type="text" size=30 style="width:25px" value="<?php echo $most['Dirección_Sistemas_Productividad']?>"></td>
    <td ><input type="text" size=30 style="width:25px" value="<?php echo $most['Logística_Estratégica']?>"></td>
    <td ><input type="text" size=30 style="width:25px" value="<?php echo $most['Administración_Estratégica_Calidad']?>"></td>
    <td ><input type="text" size=30 style="width:25px" value="<?php echo $most['Administración_Sistemas_Calidad']?>"></td>
    <td ><input type="text" size=30 style="width:25px" value="<?php echo $most['Administración_Total_Calidad']?>"></td>
    <td ><input type="text" size=30 style="width:25px" value="<?php echo $most['Diseño_Experimentos_Calidad']?>"></td>
    <td ><input type="text" size=30 style="width:25px" value="<?php echo $most['Control_Estadístico_Procesos_Manufactura_Servicios']?>"></td>
    <td ><input type="text" size=30 style="width:25px" value="<?php echo $most['Investigación_Operaciones']?>"></td>
    <td ><input type="text" size=30 style="width:25px" value="<?php echo $most['Métodos_Calidad_Enfoque_Cliente']?>"></td>
    <td ><input type="text" size=30 style="width:25px" value="<?php echo $most['Desarrollo_Comportamiento_Organizacional']?>"></td>
    <td ><input type="text" size=30 style="width:25px" value="<?php echo $most['Sistema_Costos_Calidad']?>"></td>
    <td ><input type="text" size=30 style="width:25px" value="<?php echo $most['Normatividad']?>"></td>
   <td> <a class="btn btn-primary" href="modifPC.php" name="ba" role="button">Modificar</a></td> 
  </tr>
   <?php
   }
            ?>  
   </tbody>
</table>
</div>
<!-- Optional JavaScript; choose one of the two! -->
<!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    </form>
    <script type="text/javascript"> 
    $('document').ready(function(){
   $("#checkTodos").change(function () {
      $("input:checkbox").prop('checked', $(this).prop("checked"));
  });
});
</script>
  </body>
</html>