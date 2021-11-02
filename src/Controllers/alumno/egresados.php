<?php
include('../../Models/Dao.php');
include('../../utils/utils.php');

$query = "SELECT `nombre`, IFNULL(correo, '- - - ¡SIN CORREO! - - -') `correo` , `telefono`, `fecha` 
            FROM `egresados_al`";
$egresados = Dao::select($query);

includeView('listaegresados.php', array("egresados" => $egresados));
?>