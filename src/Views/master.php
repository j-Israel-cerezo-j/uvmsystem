
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php goto title; titleReturn: ?></title>
    <link rel="stylesheet" href="CSS/estilo_lista1.css?jol" type="text/css">
</head>
<body>
    <nav class="menu">
        <ul class="prul">
            <form action="Lista1.php">
                <input type="submit" id="btn-menu" value="1">
                <label for="btn-menu"><img src="img/icon-menu.ico" width="32px" header="32px"></label>
            </form>
            <li class="menu"><a href="<?php controller('alumno/lista.php') ?>">Inicio</a></li>
            <li class="menu"><a href="<?php controller('login.php') ?>">Cerrar Sesión</a></li>
            <li class="menu"><a href="">Estados del alumno</a>
        
            <ul class="animenu">                
                <li><a href="<?php controller('alumno/bajas.php') ?>">Bajas</a></li>
                <li><a href="<?php controller('alumno/egresados.php') ?>">Egresados</a></li>  
            </ul> 
        
        </li>
            <li class="menu"><a href="">Ranma</a>
                <ul class="animenu">
                    <li><a href="<?php controller('ranma/ranmapt.php') ?>">Ramma PT</a></li>
                    <li><a href="<?php controller('ranma/ranmapc.php') ?>">Ramma PC</a></li>
                    <li><a href="<?php controller('ranma/ranmaom.php') ?>">Ramma OM</a></li>
                </ul>    
            </li>
            <li class="menu"><a href="<?php view('Acuerdos.php') ?>">Acuerdos</a>
        </ul>
    </nav>

    
    <title><?php goto body; bodyReturn: ?></title>
</body>
</html>
