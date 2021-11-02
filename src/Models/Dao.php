<?php
include('Conexion.php');
class Dao{

    public static function select($selectQuery){      
        $db = conectar();
        
        $result = $db->query($selectQuery);
        if( !$result ){
            throw new Exception("Error en consulta de datos: (" . $db->connect_errno . ") " . $db->connect_error);
        }
        
        $records = array();
        while( ($row = $result->fetch_assoc()) != null ){                        
            array_push($records, $row);
        }
        return $records;
    }
}
?>