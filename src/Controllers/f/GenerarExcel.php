<?php 
    header("Content-Type: application/vnd.ms-excel; charset=iso-8859-1");
    header("Content-Disposition: attachment; filename=Lista_bajas.xls")
?>
<table style="border=1">
        <caption>Datos del Alumno</caption>
            <tr>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Telefono</th>
                <th>Motivo</th>
            </tr>

            <?php 
            include("Conexion.php");
            $con = conectar();
            $consulta = "SELECT * FROM bajas_al ";
            $resultado = mysqli_query($con, $consulta);
            while($row=mysqli_fetch_assoc($resultado)) { ?>
                <tr>
                    <td><?php echo $row["nombre"]?></td>
                    <td><?php echo $row["correo"]?></td>
                    <td><?php echo $row["telefono"]?></td>
                    <td><?php echo $row["motivo"]?></td>
                </tr>
            <?php } mysqli_free_result($resultado)?>
</table>