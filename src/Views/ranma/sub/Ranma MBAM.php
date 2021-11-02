<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/estilo_lista1.css?jol" type="text/css">
    <link rel="stylesheet" href="CSS/estilo.css?mj">
    <link rel="stylesheet" href="CSS/texto.css?mj">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <!-- <link rel="stylesheet" href="CSS/texto.css"> -->
    <title>Tabla</title>
  </head>
  <body>


  <!-- se manda a llamar el header -->
  <header>
            <?php
                require_once('Header&Footer/header.php'); 
            ?>
        </header>

        <ul class="tabs" style="color:black; list-style: none; display: flex;">
			<li style="width: 18%;"><a href="http://localhost/estadia/sistemauvm_ver3.0/Ranma PT.php" style="color:black; text-decoration: none; font-size: 16px; text-align: center; display: block;
	padding: 0px 0px;"><span class="fa fa-home"></span><span class="tab-text"><p class="text-success">GESTION DE CALIDAD</p></span></a></li>
			<li style="width: 18%;"><a href="http://localhost/estadia/sistemauvm_ver3.0/Ranma FD.php" style="color:black; text-decoration: none; font-size: 16px; text-align: center; display: block;
	padding: 0px 0px;"><span class="fa fa-group"></span><span class="tab-text"><p class="text-success">FISIOTERAPIA DEPORTIVA</p></span></a></li>
    <li style="width: 18%;"><a href="http://localhost/estadia/sistemauvm_ver3.0/Ranma MBAF.php" style="color:black; text-decoration: none; font-size: 16px; text-align: center; display: block;
	padding: 0px 0px;"><span class="fa fa-home"></span><span class="tab-text"><p class="text-success">MBA FINANZAS</p></span></a></li>
    <li style="width: 18%;"><a href="http://localhost/estadia/sistemauvm_ver3.0/Ranma MBAM.php" style="color:black; text-decoration: none; font-size: 16px; text-align: center; display: block;
	padding: 0px 0px;"><span class="fa fa-group"></span><span class="tab-text"><p class="text-success">MBA MERCADOTENCIA</p></span></a></li>
            <li style="width: 18%;"><a href="http://localhost/estadia/sistemauvm_ver3.0/Ranma MBAT.php" style="color:black; text-decoration: none; font-size: 16px; text-align: center; display: block;
	padding: 0px 0px;"><span class="fa fa-home"></span><span class="tab-text"><p class="text-success">MBA TALENTO</p></span></a></li>
			<li style="width: 18%;"><a href="http://localhost/estadia/sistemauvm_ver3.0/Ranma DH.php" style="color:black; text-decoration: none; font-size: 16px; text-align: center; display: block;
	padding: 0px 0px;"><span class="fa fa-group"></span><span class="tab-text"><p class="text-success">DERCHOS HUMANOS</p></span></a></li>
    <li style="width: 18%;"><a href="http://localhost/estadia/sistemauvm_ver3.0/Ranma DC.php" style="color:black; text-decoration: none; font-size: 16px; text-align: center; display: block;
	padding: 0px 0px;"><span class="fa fa-home"></span><span class="tab-text"><p class="text-success">DERECHO CORPORATIVO</p></span></a></li>
             <li style="width: 18%;"><a href="http://localhost/estadia/sistemauvm_ver3.0/Ranma DEC.php" style="color:black; text-decoration: none; font-size: 16px; text-align: center; display: block;
	padding: 0px 0px;"><span class="fa fa-home"></span><span class="tab-text"><p class="text-success">DERECHO CIVIL</p></span></a></li>
			<li style="width: 18%;"><a href="http://localhost/estadia/sistemauvm_ver3.0/Ranma DF.php" style="color:black; text-decoration: none; font-size: 16px; text-align: center; display: block;
	padding: 0px 0px;"><span class="fa fa-group"></span><span class="tab-text"><p class="text-success">DERECHO FISCAL</p></span></a></li>
			<li style="width: 18%;"><a href="http://localhost/estadia/sistemauvm_ver3.0/Ranma SH.php" style="color:black; text-decoration: none; font-size: 16px; text-align: center; display: block;
	padding: 0px 0px;"><span class="fa fa-group"></span><span class="tab-text"><p class="text-success">ESP.EN SEGURIDAD E HIGIENE</p></span></a></li>
</ul>
<form method='POST' action='pru.php'> 
<br>
        <button type="submit" class="btn btn-warning" value="" name="Cambios" >Guardar Cambios</button> &nbsp; <input type="checkbox" id="checkTodos"> Seleccionar todos 
        <button type="submit" class="btn btn-warning" value="<?php echo $opcion?>" name="siguiente" >Siguiente </button>  </td>
<input type="hidden" id="v1" value="<?php echo $opcion?>" name="opciones">  </input>
<br>
       
    <!-- <h1>Tabla con cabecera</h1> -->
</br></br>
<div class="table">
<table >
<thead>
    <tr>
    <th class="texto-vertical-2" style="color:white";>Id_Prog</th>
                      <th class="texto-vertical-2" style="color:white";>Cuenta</th>
                      <th class="texto-vertical-2" style="color:white";>Nombre</th>
                      <th class="texto-vertical-2" style="color:white";>Métodos_Cuantitativos_Negocios</th>	
                      <th class="texto-vertical-2" style="color:white";>Métodos_Cuantitativos_Negocios_Competencias_Comunicación</th>
                      <th class="texto-vertical-2" style="color:white";>Técnicas_Comunicación_Estilo_Comunicación_Efectiva</th>
                      <th class="texto-vertical-2" style="color:white";>Información_Financiera_Administrativa_Economía_Organización<</th>
                      <th class="texto-vertical-2" style="color:white";>Liderazgo_Comportamiento_Organizacional</th>
                      <th class="texto-vertical-2" style="color:white";>Mercadotecnia_Estratégica</th>
                      <th class="texto-vertical-2" style="color:white";>Finanzas_Corporativas</th>
                      <th class="texto-vertical-2" style="color:white";>Administración_Estratégica_Cadena_Valor</th>
                      <th class="texto-vertical-2" style="color:white";>Inteligencia_Mercados</th>
                      <th class="texto-vertical-2" style="color:white";>Diseño_Estratégico_Nuevos_Productos</th>
                      <th class="texto-vertical-2" style="color:white";>Curso_Apoyo_Fundamentos_Ciencia_Datos</th>
                      <th class="texto-vertical-2" style="color:white";>Estrategias_Precios</th>
                      <th class="texto-vertical-2" style="color:white";>Mercadotecnia_Digital</th>
                      <th class="texto-vertical-2" style="color:white"; >Acción </th>  
    </tr>
  </thead>
  <tbody>
  <?php
        include('Conexion.php');
        $con=conectar(); 
$consulta = "SELECT idprograma,cuenta,nombre,Métodos_Cuantitativos_Negocios,	Métodos_Cuantitativos_Negocios_Competencias_Comunicación,	
Técnicas_Comunicación_Estilo_Comunicación_Efectiva,	Información_Financiera_Administrativa_Economía_Organización,	Liderazgo_Comportamiento_Organizacional,
Mercadotecnia_Estratégica,	Finanzas_Corporativas, Administración_Estratégica_Cadena_Valor, Inteligencia_Mercados,
Diseño_Estratégico_Nuevos_Productos, Curso_Apoyo_Fundamentos_Ciencia_Datos,	Estrategias_Precios, Mercadotecnia_Digital FROM PTMNMK33F16";
$resultado = mysqli_query( $con, $consulta);
   ?>
   <?php foreach($resultado as $most){ ?>
        
          <tr >
            <td ><?php echo $most['idprograma']    ?></td>
            <td ><?php echo $most['cuenta']    ?></td>
            <td ><input type="checkbox" name="opcion[]" value="<?php //echo $most['correo'];?>"><?php echo $most['nombre']    ?></td>
            
            <td><input type="text"  size=30 style="width:25px"  value="<?php echo $most['Métodos_Cuantitativos_Negocios']?>"></td>
            <td><input type="text"  size=30 style="width:25px"  value="<?php echo $most['Métodos_Cuantitativos_Negocios_Competencias_Comunicación']?>"></td>
            <td><input type="text"  size=30 style="width:25px"  value="<?php echo $most['Técnicas_Comunicación_Estilo_Comunicación_Efectiva']?>"></td>
            <td><input type="text"  size=30 style="width:25px"  value="<?php echo $most['Información_Financiera_Administrativa_Economía_Organización']?>"></td>
            <td><input type="text"  size=30 style="width:25px"  value="<?php echo $most['Liderazgo_Comportamiento_Organizacional']?>"></td>
            <td><input type="text"  size=30 style="width:25px"  value="<?php echo $most['Mercadotecnia_Estratégica']?>"></td>
            <td><input type="text"  size=30 style="width:25px"  value="<?php echo $most['Finanzas_Corporativas']?>"></td>
            <td><input type="text"  size=30 style="width:25px"  value="<?php echo $most['Administración_Estratégica_Cadena_Valor']?>"></td>
            <td><input type="text"  size=30 style="width:25px"  value="<?php echo $most['Inteligencia_Mercados']?>"></td>
            <td><input type="text"  size=30 style="width:25px"  value="<?php echo $most['Diseño_Estratégico_Nuevos_Productos']?>"></td>
            <td><input type="text"  size=30 style="width:25px"  value="<?php echo $most['Curso_Apoyo_Fundamentos_Ciencia_Datos']?>"></td>
            <td><input type="text"  size=30 style="width:25px"  value="<?php echo $most['Estrategias_Precios']?>"></td>
            <td><input type="text"  size=30 style="width:25px"  value="<?php echo $most['Mercadotecnia_Digital']?>"></td>
            <td><a class="btn btn-primary" href="modifPC.php" name="ba" role="button">Modificar</a><td>
   </tr>
   <?php
   }
            ?>
  </tbody>
</table>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
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