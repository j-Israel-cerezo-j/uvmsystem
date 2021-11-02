<?php 
    include "Conexion.php";
    $conexion = conectar();
    $quitar=$_POST['quitarcur'];
    $nombre=$_POST['quitarcur1'];
    $quitar1=$_POST['quitaracur'];
    $nom=$_POST['quitaracur1'];
    //$materias=$_POST['materia'];
    session_start();
    $idalum=$_SESSION['idsesion'];
    //$nombre=$_POST['materia'];
    //$materias=$_POST['nombre'];
    if($quitar!=null)
    {
     $sql="DELETE FROM cursado where idalumno=$idalum and nombremateria='$nombre' ";
        $result = mysqli_query($conexion, $sql);
        header("Location: inicio.php?var=$idalum");  
    }
    if ($quitar1!=null)
    {
        $sql="DELETE FROM a_cursar where idalumno=$idalum and nombremateria='$nom' ";
        $result = mysqli_query($conexion, $sql);
        header("Location: inicio.php?var=$idalum");
    }

?>