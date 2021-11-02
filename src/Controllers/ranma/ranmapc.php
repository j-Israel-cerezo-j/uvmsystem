<?php
include('../../Models/Dao.php');
include('../../utils/utils.php');

$query = "SELECT PCMNUC41F09.idprograma, alumno.correo, PCMNUC41F09.cuenta, PCMNUC41F09.nombre, 
            PCMNUC41F09.Fundamentos_Nutricion, PCMNUC41F09.Evaluacion_Clinica_Nutricional,
            PCMNUC41F09.Calculo_Requerimientos_Nutrimentales, PCMNUC41F09.Nutricion_Metabolismo, 
            PCMNUC41F09.Tendencias_Actuales_Nutricion, PCMNUC41F09.Alimentacion_Enteral, 
            PCMNUC41F09.Alimentacion_Parental,PCMNUC41F09.Evaluacion_Nutricional_Paciente_Hospitalizado, 
            PCMNUC41F09.Nutricion_Perioperatoria, PCMNUC41F09.Metodologia_Investigacion, 
            PCMNUC41F09.Nutricion_Enfermedades_Cardiovasculares, PCMNUC41F09.Nutricion_Cancer,
            PCMNUC41F09.Nutricion_Enfermedad_Pulmonar,PCMNUC41F09.Nutricion_EnfermedadRenal,
            PCMNUC41F09.Nutricion_Trastornos_Musculoesqueletico_Neurologicos, 
            PCMNUC41F09.Nutricion_Enfermedades_Infecciosas_Hipermetabolicas,
            PCMNUC41F09.Nutricion_Enfermedades_Endocrinologicas, 
            PCMNUC41F09.Nutricion_Enfermedades_Gastrointestinales 
        FROM PCMNUC41F09 
        INNER JOIN alumno on PCMNUC41F09.cuenta=alumno.cuenta" ;
$PCMNUC41F09 = Dao::select($query);

includeView('ranma/RanmaPC.php', array("PCMNUC41F09" => $PCMNUC41F09));
?>