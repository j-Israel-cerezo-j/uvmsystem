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
        <form method='POST' action='pru.php'> 
<br><br>
        <button type="submit" class="btn btn-warning" value="" name="Cambios" >Guardar Cambios</button> &nbsp; <input type="checkbox" id="checkTodos"> Seleccionar todos 
        <button type="submit" class="btn btn-warning" value="<?php echo $opcion?>" name="siguiente" >Siguiente </button>  </td>
<input type="hidden" id="v1" value="<?php echo $opcion?>" name="opciones">  </input>
        <!-- <h1>Tabla con cabecera</h1> -->
</br></br>
<br><br>
<div class="table">
<table >
<thead>
<tr>
                      <th class="texto-vertical-2" style="color:white";>Id_Prog</th>
                      <th class="texto-vertical-2" style="color:white";>Cuenta</th>
                      <th class="texto-vertical-2" style="color:white";>Nombre</th>
                      <th class="texto-vertical-2" style="color:white"; >Fundamentos Nutrición</th>
                      <th class="texto-vertical-2" style="color:white"; >Evaluación Clínica Nutricional</th>
                      <th class="texto-vertical-2" style="color:white"; >Cálculo Requerimientos Nutrimentales</th>
                      <th class="texto-vertical-2" style="color:white"; >Nutrición Metabolismo</th>
                      <th class="texto-vertical-2" style="color:white"; >Tendencias Actuales Nutrición</th>	
                      <th class="texto-vertical-2" style="color:white"; >Alimentación Enteral</th>
                      <th class="texto-vertical-2" style="color:white"; >Alimentación Parental</th>
                      <th class="texto-vertical-2" style="color:white"; >Evaluación Nutricional Paciente Hospitalizado</th>
                      <th class="texto-vertical-2" style="color:white"; >Nutrición Perioperatoria</th>
                      <th class="texto-vertical-2" style="color:white"; >Metodología Investigación</th>
                      <th class="texto-vertical-2" style="color:white"; >Nutrición Enfermedades Cardiovasculares</th>
                      <th class="texto-vertical-2" style="color:white"; >Nutrición Cáncer</th>
                      <th class="texto-vertical-2" style="color:white"; >Nutrición Enfermedad Pulmonar</th>
                      <th class="texto-vertical-2" style="color:white"; >Nutrición EnfermedadRenal</th>
                      <th class="texto-vertical-2" style="color:white"; >Nutrición Trastornos Musculoesquelético_Neurológicos</th>
                      <th class="texto-vertical-2" style="color:white"; >Nutrición Enfermedades Infecciosas_Hipermetabólicas</th>
                      <th class="texto-vertical-2" style="color:white"; >Nutrición Enfermedades Endócrinológicas</th>
                      <th class="texto-vertical-2" style="color:white"; >Nutrición Enfermedades Gastrointestinales</th>
                      <th class="texto-vertical-2" style="color:white"; >Acción </th>  
                    </tr> 
  </thead>
  <tbody>  
   <?php foreach($PCMNUC41F09 as $most){ 
     ?> 
    
    <tr>
            <td ><?php echo $most['idprograma']    ?></td>
            <td ><?php echo $most['cuenta']    ?></td>
            <td ><input type="checkbox" name="opcion[]" value="<?php echo $most['correo'];?>"><?php echo $most['nombre']    ?></td>
            <td ><input type="text"  size=30 style="width:25px" value="<?php echo $most['Fundamentos_Nutrición']?>"></td>
            <td ><input type="text"  size=30 style="width:25px" value="<?php echo $most['Evaluación_Clínica_Nutricional']?>"></td>
            <td ><input type="text"  size=30 style="width:25px" value="<?php echo $most['Cálculo_Requerimientos_Nutrimentales']?>"></td>
            <td ><input type="text"  size=30 style="width:25px" value="<?php echo $most['Nutrición_Metabolismo']?>"></td>
            <td ><input type="text"  size=30 style="width:25px" value="<?php echo $most['Tendencias_Actuales_Nutrición']?>"></td>
            <td ><input type="text"  size=30 style="width:25px" value="<?php echo $most['Alimentación_Enteral']?>"></td>
            <td ><input type="text"  size=30 style="width:25px" value="<?php echo $most['Alimentación_Parental']?>"></td>
            <td ><input type="text"  size=30 style="width:25px" value="<?php echo $most['Evaluación_Nutricional_Paciente_Hospitalizado']?>"></td>
            <td ><input type="text"  size=30 style="width:25px" value="<?php echo $most['Nutrición_Perioperatoria']?>"></td>
            <td ><input type="text"  size=30 style="width:25px" value="<?php echo $most['Metodología_Investigación']?>"></td>
            <td ><input type="text"  size=30 style="width:25px" value="<?php echo $most['Nutrición_Enfermedades_Cardiovasculares']?>"></td>
            <td ><input type="text"  size=30 style="width:25px" value="<?php echo $most['Nutrición_Cáncer']?>"></td>
            <td ><input type="text"  size=30 style="width:25px" value="<?php echo $most['Nutrición_Enfermedad_Pulmonar']?>"></td>
            <td ><input type="text"  size=30 style="width:25px" value="<?php echo $most['Nutrición_EnfermedadRenal']?>"></td>
            <td ><input type="text"  size=30 style="width:25px" value="<?php echo $most['Nutrición_Trastornos_Musculoesquelético_Neurológicos']?>"></td>
            <td ><input type="text"  size=30 style="width:25px" value="<?php echo $most['Nutrición_Enfermedades_Infecciosas_Hipermetabólicas']?>"></td>
            <td ><input type="text"  size=30 style="width:25px" value="<?php echo $most['Nutrición_Enfermedades_Endócrinológicas']?>"></td>
            <td ><input type="text"  size=30 style="width:25px" value="<?php echo $most['Nutrición_Enfermedades_Gastrointestinales']?>"></td>
            <?php echo "<td><a class='btn btn-primary' href='modifPC.php?cuenta_alum=".$most['cuenta']."' name='ba' method='GET' type='button'>Modificar</a><td>" ?>
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