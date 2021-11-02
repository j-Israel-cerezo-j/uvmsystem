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

        

<br>
        <button type="submit" class="btn btn-warning" value="" name="Cambios" >Guardar Cambios</button>
    <!-- <h1>Tabla con cabecera</h1> -->
</br></br>
</br></br>
<br><br>
<br>
</br>
<br><br>
<div class="table">
<table >
<thead>
    <tr>
        <th class="texto-vertical-2" style="color:white";></th>
        <th class="texto-vertical-2" style="color:white";></th>
        <th class="texto-vertical-2" style="color:white";></th>
        <th class="texto-vertical-2" style="color:white";></th>
        <th class="texto-vertical-2" style="color:white";></th>
        <th class="texto-vertical-2" style="color:white";></th>
        <th class="texto-vertical-2" style="color:white";></th>
        <th class="texto-vertical-2" style="color:white";></th>
        <th class="texto-vertical-2" style="color:white";></th>
        <th class="texto-vertical-2" style="color:white";></th>
        <th class="texto-vertical-2" style="color:white";></th>
        <th class="texto-vertical-2" style="color:white";><th>
        <th class="texto-vertical-2" style="color:white";></th>
        <th class="texto-vertical-2" style="color:white";></th>
        <th class="texto-vertical-2" style="color:white";></th>
        <th class="texto-vertical-2" style="color:white";></th>
        <th class="texto-vertical-2" style="color:white";></th>
        <th class="texto-vertical-2" style="color:white";></th>
        <th class="texto-vertical-2" style="color:white";></th>
        <th class="texto-vertical-2" style="color:white";></th>
        <th class="texto-vertical-2" style="color:white";></th>
                    
    </tr>
  </thead>
  <tbody>
   <?php foreach($resultado as $most){ ?>
        
          <tr >
            <td ><?php echo $most['idprograma']    ?></td>
            <td ><?php echo $most['cuenta']    ?></td>
            <td ><input type="checkbox" name="opcion[]" value="<?php echo $row['correo'];?>"><?php echo $most['nombre']    ?></td>
     
            <td><input type="text" value=""  size=30 style="width:25px" ></td>
            <td><input type="text" value=""  size=30 style="width:25px"  ></td>
            <td ><input type="text" value="" size=30 style="width:25px" ></td>
            <td ><input type="text" value="" size=30 style="width:25px" ></td>
            <td ><input type="text" value="" size=30 style="width:25px" ></td>
            <td ><input type="text" value="" size=30 style="width:25px" ></td>
            <td ><input type="text" value="" size=30 style="width:25px" ></td>
            <td ><input type="text" value="" size=30 style="width:25px" ></td>
            <td ><input type="text" value="" size=30 style="width:25px" ></td>
            <td ><input type="text" value="" size=30 style="width:25px" ></td>
            <td ><input type="text" value="" size=30 style="width:25px" ></td>
            <td ><input type="text" value="" size=30 style="width:25px" ></td>
            <td ><input type="text" value="" size=30 style="width:25px" ></td>
            <td ><input type="text" value="" size=30 style="width:25px" ></td>
            <td ><input type="text" value="" size=30 style="width:25px" ></td>
            <td ><input type="text" value="" size=30 style="width:25px" ></td>
            <td ><input type="text" value="" size=30 style="width:25px" ></td>
            <td ><input type="text" value="" size=30 style="width:25px"  ></td>
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
  </body>
</html>