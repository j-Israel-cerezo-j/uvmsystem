<?php
include "Conexion.php";
$conexion=conectar();

$consulta=ConsultarAlumno($_GET['cuenta']);
function ConsultarAlumno($cuenta_alum)
{
    $sentencia="SELECT * FROM PCMNUC41F09 WHERE cuenta='".$cuenta_alum."' ";
    if($resultado= mysqli_query($conexion, $sentencia)){
        $most=mysqli_fetch_assoc($resultado);
        return[
        $most['idprograma'],
        $most['cuenta'],
        $most['nombre'],
        $most['Fundamentos_Nutrición'],
        $most['Evaluación_Clínica_Nutricional'],
        $most['Cálculo_Requerimientos_Nutrimentales'],
        $most['Nutrición_Metabolismo'],
        $most['Tendencias_Actuales_Nutrición'],
        $most['Alimentación_Enteral'],
        $most['Alimentación_Parental'],
        $most['Evaluación_Nutricional_Paciente_Hospitalizado'],
        $most['Nutrición_Perioperatoria'],
        $most['Metodología_Investigación'],
        $most['Nutrición_Enfermedades_Cardiovasculares'],
        $most['Nutrición_Cáncer'],
        $most['Nutrición_Enfermedad_Pulmonar'],
        $most['Nutrición_EnfermedadRenal'],
        $most['Nutrición_Trastornos_Musculoesquelético_Neurológicos'],
        $most['Nutrición_Enfermedades_Infecciosas_Hipermetabólicas'],
        $most['Nutrición_Enfermedades_Endócrinológicas'],
        $most['Nutrición_Enfermedades_Gastrointestinales']
        ];
  }
}
?><!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTP-8">
        <title>Universidad del Valle de Mexico</title>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <link rel="stylesheet" href="CSS/estilo_lista1.css">
    </head>

    <body style="background: #D4D4D4;">
    <?php session_start(); ?>
    <?php
                   include "Conexion.php"; 
                   $conexion= conectar();
                ?>
                <div>
                <label>Modificar Materias</label>
                <br>
                <label>Id_Prog</label>
                <input type="text" value="<?php echo $consulta[0]?>"><br>
                <label>cuenta</label>
                <input type="text" value="<?php echo $consulta[1]?>"><br>
                <label>nombre</label>
                <input type="text" value="<?php echo $consulta[2]?>"><br>
                <label>Fundamentos_Nutrición</label>
                <input type="text" value="<?php echo $consulta[3]?>"><br>
                <label>Evaluación_Clínica_Nutricional</label>
                <input type="text" value="<?php echo $consulta[4]?>"><br>
                <label>Cálculo_Requerimientos_Nutrimentales</label>
                <input type="text" value="<?php echo $consulta[5]?>"><br>
                <label>Nutrición_Metabolismo</label>
                <input type="text" value="<?php echo $consulta[6]?>"><br>
                <label>Tendencias_Actuales_Nutrición</label>
                <input type="text" value="<?php echo $consulta[7]?>"><br>	
                <label>Alimentación_Enteral</label>
                <input type="text" value="<?php echo $consulta[8]?>"><br>
                <label>Alimentación_Parental</label>
                <input type="text" value="<?php echo $consulta[9]?>"><br>
                <label>Evaluación_Nutricional_Paciente_Hospitalizado</label>
                <input type="text" value="<?php echo $consulta[10]?>"><br>
                <label>Nutrición_Perioperatoria</label>
                <input type="text" value="<?php echo $consulta[11]?>"><br>
                <label>Metodología_Investigación</label>
                <input type="text" value="<?php echo $consulta[12]?>"><br>
                <label>Nutrición_Enfermedades_Cardiovasculares</label>
                <input type="text" value="<?php echo $consulta[13]?>"><br>
                <label>Nutrición_Cáncer</label>
                <input type="text" value="<?php echo $consulta[14]?>"><br>
                <label>Nutrición_Enfermedad_Pulmonar</label>
                <input type="text" value="<?php echo $consulta[15]?>"><br>
                <label>Nutrición_EnfermedadRenal</label>
                <input type="text" value="<?php echo $consulta[16]?>"><br>
                <label>Nutrición_Trastornos_Musculoesquelético_Neurológicos</label>
                <input type="text" value="<?php echo $consulta[17]?>"><br>
                <label>Nutrición_Enfermedades_Infecciosas_Hipermetabólicas</label>
                <input type="text" value="<?php echo $consulta[18]?>"><br>
                <label>Nutrición_Enfermedades_Endócrinológicas</label>
                <input type="text" value="<?php echo $consulta[19]?>"><br>
                <label>Nutrición_Enfermedades_Gastrointestinales</label>
                <input type="text" value="<?php echo $consulta[20]?>"><br>
                <button type="submit" class="btn btn-warning" value="" name="Cambios" >Modificar</button>
                </div>
                </body>