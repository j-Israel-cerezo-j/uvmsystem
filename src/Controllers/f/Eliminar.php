<?php
include 'Conexion.php';
$conexion=conectar();
session_start();
$egresado=$_POST["egresado"];
$baja=$_POST["baja"];
$fecha=$_POST["fecha"];
$motivo=$_POST["situaciones"];

$idalum=$_POST["idalumno"];
if($egresado!=null)
{

 $consulta="SELECT nombre,correo,telefono from alumno where idalumno=$idalum";
 if($result = mysqli_query($conexion, $consulta)){
     $fila=mysqli_fetch_assoc($result);
        $nombre=$fila['nombre'];
     $correo=$fila['correo'];
    $telefono=$fila['telefono'];
    }
    if($fecha!=""){

$consulta= "INSERT INTO egresados1 VALUES ('$nombre','$correo','$telefono','$fecha')";
$ejecutar = mysqli_query($conexion, $consulta);

$sql="DELETE FROM alumno where idalumno=$idalum";
$result = mysqli_query($conexion, $sql);
$sql="DELETE FROM cursado where idalumno=$idalum";
$result = mysqli_query($conexion, $sql);

  
header('Location: Lista1.php');
    }else{?>
        

        <script>
        alert("Ingresa una fecha para darlo como egresado");
       location.href='http://localhost/sistemauvm_ver3.0/Lista1.php';
    </script>
    <?php
    }
}
elseif ($baja!=null)
 {
    $consulta="SELECT nombre,correo, telefono from alumno where idalumno=$idalum";
 if($result = mysqli_query($conexion, $consulta)){
     $fila=mysqli_fetch_assoc($result);
        $nombre=$fila['nombre'];
        $correo=$fila['correo'];
        $telefono=$fila['telefono'];
    }
    if($motivo!=""){
    $consulta= "INSERT INTO bajas VALUES ('$nombre','$correo','$telefono','$motivo')";
$ejecutar = mysqli_query($conexion, $consulta);

$sql="DELETE FROM alumno where idalumno=$idalum";
$result = mysqli_query($conexion, $sql);
$sql="DELETE FROM cursado where idalumno=$idalum";
$result = mysqli_query($conexion, $sql);

    
      
    header('Location: Lista1.php');
    }else{?>
    <script>
        alert("Ingresa un motivo por el cual se dará de baja al alumno");
       location.href='http://localhost/sistemauvm_ver3.0/Lista1.php';
    </script>
    <?php
         //header('Location: inicio.php');
      
    }
    
}
?>