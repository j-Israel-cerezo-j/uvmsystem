<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    session_start();
    if (isset($_GET['var']))
    {
        $id=$_GET['var'];
        include('Conexion.php');
        $con=conectar();
        $consulta = "SELECT nombre,cuenta,correo, Nombreprograma FROM alumno INNER JOIN programa on alumno.idprograma=programa.idprograma where idalumno=$id";
        $resultado = mysqli_query( $con, $consulta);
        $_SESSION['id'];
         foreach($resultado as $most):
            echo $most['nombre'];
         endforeach;

    }
    ?>
</body>
</html>