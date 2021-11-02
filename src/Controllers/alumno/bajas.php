<?php
include('../../Models/Dao.php');
include('../../utils/utils.php');

$query = "SELECT `nombre`, IFNULL(correo, '- - - ¡SIN CORREO! - - -') `correo` , `telefono`, `motivo` 
            FROM `bajas_al`";
$bajas = Dao::select($query);

includeView('listabajas.php', array("bajas" => $bajas));
?>