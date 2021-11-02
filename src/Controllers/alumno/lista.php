<?php
include('../../Models/Dao.php');
include('../../utils/utils.php');

$query = "SELECT idalumno, nombre, cuenta, correo, Nombreprograma 
        FROM alumno 
        INNER JOIN programa on alumno.idprograma=programa.idprograma";
$buscador = Dao::select($query);

$query = "SELECT idalumno, nombre, cuenta, IFNULL(correo, '- - - ¡SIN CORREO! - - -') correo, Nombreprograma 
        FROM alumno 
        INNER JOIN programa on alumno.idprograma=programa.idprograma";
$alumnos = Dao::select($query);

includeView('Lista.php', array("buscador" => $buscador, "alumnos"=>$alumnos));
