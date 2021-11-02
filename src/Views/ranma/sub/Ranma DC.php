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
    
<th class="texto-vertical-2" style="color:white" ;>Id_Prog</th>
                      <th class="texto-vertical-2" style="color:white" ;>Cuenta</th>
                      <th class="texto-vertical-2" style="color:white" ;>Nombre</th>
                      <th class="texto-vertical-2" style="color:white" ;>METODOS_TECNICAS_INVESTIGACION_JURIDICA</th>
                      <th class="texto-vertical-2" style="color:white" ;>TECNICAS_COMUNICACION_ESTILO_COMUNICACION_EFECTIVA</th>
                      <th class="texto-vertical-2" style="color:white" ;>TECNICAS_ARGUMENTACION_PROCEDIMIENTO_ESCRITO_JUICIO_ORAL</th>
                      <th class="texto-vertical-2" style="color:white" ;>DERECHO_ADMINISTRATIVO_ADMINISTRACION_PUBLICA</th>
                      <th class="texto-vertical-2" style="color:white" ;>DERECHO_CIVIL</th>
                      <th class="texto-vertical-2" style="color:white" ;>RELACIONES_INDIVIDUALES_COLECTIVAS_TRABAJO</th>
                      <th class="texto-vertical-2" style="color:white" ;>DERECHO_PROCESAL_AMPARO_LABORAL</th>
                      <th class="texto-vertical-2" style="color:white" ;>MARCO_JURIDICO_CORPORACIONES_MERCANTILES</th>
                      <th class="texto-vertical-2" style="color:white" ;>OBLIGACIONES_TRIBUTARIAS_LABORALES_CORPORACIONES</th>
                      <th class="texto-vertical-2" style="color:white" ;>TEORIA_GENERAL_DERECHO_CONSTITUCIONAL</th>
                      <th class="texto-vertical-2" style="color:white" ;>TRATADOS_ORGANISMOS_INTERNACIONALES</th>
                      <th class="texto-vertical-2" style="color:white" ;>METODOS_ALTERNOS_SOLUCION_CONTROVERSIAS</th>  
                      <th class="texto-vertical-2" style="color:white"; >Acción </th>      
              
    </tr>
  </thead>
  <tbody>
  <?php
        include('Conexion.php');
        $con=conectar(); 
$consulta = "SELECT idprograma,cuenta,nombre, METODOS_TECNICAS_INVESTIGACION_JURIDICA, TECNICAS_COMUNICACION_ESTILO_COMUNICACION_EFECTIVA,
TECNICAS_ARGUMENTACION_PROCEDIMIENTO_ESCRITO_JUICIO_ORAL, DERECHO_ADMINISTRATIVO_ADMINISTRACION_PUBLICA, DERECHO_CIVIL,
RELACIONES_INDIVIDUALES_COLECTIVAS_TRABAJO, DERECHO_PROCESAL_AMPARO_LABORAL,
MARCO_JURIDICO_CORPORACIONES_MERCANTILES, OBLIGACIONES_TRIBUTARIAS_LABORALES_CORPORACIONES,
TEORIA_GENERAL_DERECHO_CONSTITUCIONAL, TRATADOS_ORGANISMOS_INTERNACIONALES, METODOS_ALTERNOS_SOLUCION_CONTROVERSIAS FROM PTMDCL33F17"
;
$resultado = mysqli_query( $con, $consulta);
   ?>
   <?php foreach($resultado as $most){ ?>
        
          <tr >
            <td ><?php echo $most['idprograma']    ?></td>
            <td ><?php echo $most['cuenta']    ?></td>
            <td ><input type="checkbox" name="opcion[]" value="<?php echo $most['correo'];?>"><?php echo $most['nombre']    ?></td>
           
            <td ><input type="text"   size=30 style="width:25px" value="<?php echo $most['METODOS_TECNICAS_INVESTIGACION_JURIDICA']?>"></td>
            <td ><input type="text"   size=30 style="width:25px" value="<?php echo $most['TECNICAS_COMUNICACION_ESTILO_COMUNICACION_EFECTIVA']?>"></td>
            <td ><input type="text"   size=30 style="width:25px" value="<?php echo $most['TECNICAS_ARGUMENTACION_PROCEDIMIENTO_ESCRITO_JUICIO_ORAL']?>"></td>
            <td ><input type="text"   size=30 style="width:25px" value="<?php echo $most['DERECHO_ADMINISTRATIVO_ADMINISTRACION_PUBLICA']?>"></td>
            <td ><input type="text"   size=30 style="width:25px" value="<?php echo $most['DERECHO_CIVIL']?>"></td>
            <td ><input type="text"   size=30 style="width:25px" value="<?php echo $most['RELACIONES_INDIVIDUALES_COLECTIVAS_TRABAJO']?>"></td>
            <td ><input type="text"   size=30 style="width:25px" value="<?php echo $most['DERECHO_PROCESAL_AMPARO_LABORAL']?>"></td>
            <td ><input type="text"   size=30 style="width:25px" value="<?php echo $most['MARCO_JURIDICO_CORPORACIONES_MERCANTILES']?>"></td>
            <td ><input type="text"   size=30 style="width:25px" value="<?php echo $most['OBLIGACIONES_TRIBUTARIAS_LABORALES_CORPORACIONES']?>"></td>
            <td ><input type="text"   size=30 style="width:25px" value="<?php echo $most['TEORIA_GENERAL_DERECHO_CONSTITUCIONAL']?>"></td>
            <td ><input type="text"   size=30 style="width:25px" value="<?php echo $most['TRATADOS_ORGANISMOS_INTERNACIONALES']?>"></td>
            <td ><input type="text"   size=30 style="width:25px" value="<?php echo $most['METODOS_ALTERNOS_SOLUCION_CONTROVERSIAS']?>"></td>
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