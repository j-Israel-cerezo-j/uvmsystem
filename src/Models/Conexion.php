<?php
function conectar(){
  $usuario='root';
  $contrasena='';
  $srv='localhost';
  $BD='uvm_prueba';
  $conexion = mysqli_connect( $srv, $usuario, "" );
  mysqli_select_db( $conexion, $BD ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );
  return $conexion;
}

?>