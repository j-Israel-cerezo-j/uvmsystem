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
                        <th class="texto-vertical-2" style="color:white";>Competencias_Comunicaci??n</th>
                        <th  class="texto-vertical-2"  style="color:white";>Metodolog??a_Investigaci??n_Jur??dica </th>
  <th  class="texto-vertical-2"  style="color:white";>Metodolog??a_Investigaci??n_Jur??dica2 </th>
 <th class="texto-vertical-2" style="color:white";>Metodolog??a_Investigaci??n_Jur??dica3 </th>
 <th class="texto-vertical-2" style="color:white";>T??cnicas_Comunicaci??n_Estilo_Comunicaci??n_Efectiva </th>
 <th class="texto-vertical-2" style="color:white";>Derecho_Administrativo_Administraci??n_P??blica </th>
 <th class="texto-vertical-2" style="color:white";>Derecho_Fiscal </th>
 <th class="texto-vertical-2" style="color:white";>Teor??a_Contribuciones</th>
 <th class="texto-vertical-2" style="color:white";>Derecho_Penal_Fiscal </th>
 <th class="texto-vertical-2" style="color:white";>Impuestos_Personas_F??sicas_Morales</th> 
 <th class="texto-vertical-2" style="color:white";>Derecho_Procesal_Administrativo_Fiscal </th>
 <th class="texto-vertical-2" style="color:white";>Juicio_Amparo </th>
 <th class="texto-vertical-2" style="color:white";>Sistema_Nacional_Anticorrupci??n	</th>
 <th class="texto-vertical-2" style="color:white";>Derecho_Aduanero </th>
 <th class="texto-vertical-2" style="color:white";>Ingenier??a_Fiscal </th> 
 <th class="texto-vertical-2" style="color:white"; >Acci??n </th>           
    </tr></thead><tbody>
  <?php include('Conexion.php'); $con=conectar(); 
        $conssll =mysqli_query($con,"SELECT idprograma,cuenta,nombre, Competencias_Comunicaci??n, Metodolog??a_Investigaci??n_Jur??dica,
        Metodolog??a_Investigaci??n_Jur??dica2, Metodolog??a_Investigaci??n_Jur??dica3, T??cnicas_Comunicaci??n_Estilo_Comunicaci??n_Efectiva,	
        Derecho_Administrativo_Administraci??n_P??blica, Derecho_Fiscal, Teor??a_Contribuciones, Derecho_Penal_Fiscal,
        Impuestos_Personas_F??sicas_Morales, Derecho_Procesal_Administrativo_Fiscal, Juicio_Amparo, Sistema_Nacional_Anticorrupci??n,
        Derecho_Aduanero, Ingenier??a_Fiscal FROM PTMDEF33F18");
         foreach($conssll as $most){ ?> <tr ><td ><?php echo $most['idprograma']    ?></td><td ><?php echo $most['cuenta']    ?></td>
  <td ><input type="checkbox" name="opcion[]" value="<?php //echo $most['correo'];?>"><?php echo $most['nombre']    ?></td>
            
            <td ><input type="text" size=30 style="width:25px"  value="<?php echo $most['Competencias_Comunicaci??n']?>"></td>
            <td ><input type="text" size=30 style="width:25px" value="<?php echo $most['Metodolog??a_Investigaci??n_Jur??dica']?>"></td>
            <td ><input type="text" size=30 style="width:25px" value="<?php echo $most['Metodolog??a_Investigaci??n_Jur??dica2']?>"></td>
            <td ><input type="text" size=30 style="width:25px" value="<?php echo $most['Metodolog??a_Investigaci??n_Jur??dica3']?>"></td>
            <td ><input type="text" size=30 style="width:25px" value="<?php echo $most['T??cnicas_Comunicaci??n_Estilo_Comunicaci??n_Efectiva']?>"></td>
            <td ><input type="text" size=30 style="width:25px" value="<?php echo $most['Derecho_Administrativo_Administraci??n_P??blica']?>"></td>
            <td ><input type="text" size=30 style="width:25px" value="<?php echo $most['Derecho_Fiscal']?>"></td>
            <td ><input type="text" size=30 style="width:25px" value="<?php echo $most['Teor??a_Contribuciones']?>"></td>
            <td ><input type="text" size=30 style="width:25px" value="<?php echo $most['Derecho_Penal_Fiscal']?>"></td>
            <td ><input type="text" size=30 style="width:25px" value="<?php echo $most['Impuestos_Personas_F??sicas_Morales']?>"></td>
            <td ><input type="text" size=30 style="width:25px" value="<?php echo $most['Derecho_Procesal_Administrativo_Fiscal']?>"></td>
            <td ><input type="text" size=30 style="width:25px" value="<?php echo $most['Juicio_Amparo']?>"></td>
            <td ><input type="text" size=30 style="width:25px" value="<?php echo $most['Sistema_Nacional_Anticorrupci??n']?>"></td>
            <td ><input type="text" size=30 style="width:25px" value="<?php echo $most['Derecho_Aduanero']?>"></td>
            <td ><input type="text" size=30 style="width:25px" value="<?php echo $most['Ingenier??a_Fiscal']?>"></td>
            <td><a class="btn btn-primary" href="modifPC.php" name="ba" role="button">Modificar</a><td>
             
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