<?php 
    session_start();
    
 ?>


<!DOCTYPE html>
    <head>
        <meta charset="UTP-8">
        <title>Universidad del Valle de Mexico</title>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php css("estilo_lista1.css?jol")?>" type="text/css">
        <link rel="stylesheet" href="<?php css("buscador/Select2/select2.min.css")?>" type="text/css">        
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <script src="<?php js('buscador/Select2/select2.min.js') ?>"></script>
    </head>
    <body id="bodyLista">

        <div id="contador" style="text-align: center;"></div>

        <!-- se manda a llamar el header -->
        <header>
            <?php
                includeView('header.php'); 
            ?>
        </header>

        <!-- Buscador de nombres  -->
        <br><br>
        <section style="text-align: center;">
            <select style="width: 40%;" id="controlBuscador" onchange="location = this.value;">
                <?php foreach ($buscador as $fila) {?>
                    <option value=" inicio.php?var= <?php echo $fila[0]?> "><?php echo $fila[1]?>: <?php echo $fila[2]?></option>
                    <?php
                    } ?> 
            </select>        
        </section>


        <!-- Lista de alumnos general  -->
        
        <div class="container-table">
            <div class="table__title">Datos del Alumno <a href="GenerarExcel.php" class="title__edit">Generar Reporte</a></div>
            <div class="table__header">Nombre</div>
            <div class="table__header">Cuenta</div>
            <div class="table__header">Correo</div>
            <div class="table__header">Programa</div>

            <?php
            foreach($alumnos as $row) { ?>
                <div class="table__item itleft"><a id="name__edit" href='http://localhost/estadia/sistemauvm_ver3.0/inicio.php?var=<?= $row['idalumno']?> '><?php echo $row["nombre"]?></a></div>
                <div class="table__item"><?php echo $row["cuenta"]?></div>
                <div class="table__item "><a id="name__edit" href="mailto:<?php echo $row["correo"]?>?Subject=Alumnos activos&body=Estimados alumnos, buenas tardes

Por medio del presente les informo que el próximo sábado 24 de julio 2021, iniciamos las clases de las materias correspondiente al módulo “B” del periodo 02-2021.

Las clases se impartirán a través de la plataforma de Teams y dependemos de las decisiones de autoridades sobre el regreso a clases presenciales

La materia estará activa en Teams a partir del miércoles 21 de julio 2021

En caso de cursar materia en modalidad Online, el inicio de clases es el lunes 19 de julio 2021""><?php echo $row["correo"]?></a></div>
                <div class="table__item itrigth"><?php echo $row["Nombreprograma"]?></div>
            <?php } ?>
        </div>
        
<!--
    </body>
</html>
<script type="text/javascript">
    $(document).ready(function(){
        $('#controlBuscador').select2();
    });
</script>-->

<!-- contados para cerrar sesion por inactividad -->
<!--<script>
    var segundos = 300;
    function contar(){
	    if(segundos <= -1){
		    document.location = "Logout.php";
	    } else {
		    segundos--;
            if(segundos <= 20)
		        document.getElementById("contador").innerHTML = "Saldra de la sesion en breve: " + segundos + " segundos.";
            if(segundos <=0)
                document.getElementById("contador").innerHTML = "Redireccionando ...";
	    }
    }
    setInterval("contar()",1000);
</script>-->