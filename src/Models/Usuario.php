<?php
include('Conexion.php');
class  Usuario{

    public $idusuario;
    public $nombreusuario;
    public $contrasenia;

    public static function findById($id){        
        $con=conectar();
        $query = "SELECT * FROM usuarios WHERE idusuario=$id";

        $result = mysqli_query($con,$query);
        //$active = $row['active'];
        
        $records = array();
        while( ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) != null ){
            $record = new Usuario();
            $record->idusuario = $row['idusuario'];
            $record->nombreusuario = $row['nombreusuario'];
            $record->contrasenia = $row['contrasenia'];
            array_push($records, $record);
        }

        return $records;
    }

    public static function findBy(array $atributos){
        
        $db =conectar();                
        $fields=array_keys($atributos);
        $where="";
        foreach ($fields as $field){
            // $value = $db->real_escape_string($atributos[$field]); 
            $where .= " and ".$field."=".$atributos[$field];
        }
        $where=substr($where, 5);
        $query = "SELECT * FROM usuario WHERE $where";

        $result = $db->query($query);
        if( !$result ){
            throw new Exception("Error en consulta de datos: (" . $db->connect_errno . ") " . $db->connect_error);
        }

        $count = $result->num_rows;
        $user=null;
        if($count==1){
            $row = $result->fetch_assoc();
            $user = new Usuario();
            $user->idusuario = $row['idusuario'];
            $user->nombreusuario = $row['nombreusuario'];
            $user->contrasenia = $row['contrasenia'];            
        }
        return  $user;
    }   
}
?>
