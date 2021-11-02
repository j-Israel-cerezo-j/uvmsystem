<?php 
    include "Conexion.php";
    $mensaje=" ";
    $conexion = conectar();
    $checkbox = $_POST['opciones'];
    $opselec=$_POST['materias'];
    session_start();
    $idsesion=$_SESSION['idsesion'];

    if($opselec==0)
    {
        foreach($checkbox as $llave ){
            $consultaa= "insert into cursado values('$llave.',$idsesion,1)";
             $ejecutar = mysqli_query($conexion, $consultaa);
        }
    }
    else if($opselec==1){
        foreach($checkbox as $llave ){
            $consultaa= "insert into a_cursar values('$llave.',$idsesion,1)";
             $ejecutar = mysqli_query($conexion, $consultaa);
            }
    }
    else{
            echo "no se pudo agregar la materia";
        }

   header("Location: inicio.php?var=$idsesion");

?>
     
        
    