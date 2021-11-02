<?php
include('../../Models/Dao.php');
include('../../utils/utils.php');

$query = "SELECT * FROM PTMGEC33F15";
$PTMGEC33F15 = Dao::select($query);

includeView('ranma/RanmaPT.php', array("PTMGEC33F15" => $PTMGEC33F15));
?>