<?php   
include('../Models/Usuario.php');
include('../utils/utils.php');
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form 
    
    $myusername = $_POST['user'];
    $mypassword = $_POST['contra']; 
    
    $user=Usuario::findBy(array('nombreusuario' => '"'.$myusername.'"', 'contrasenia' => '"'.$mypassword.'"'));
    
    // If result matched $myusername and $mypassword, table row must be 1 row
      
    if($user!=null) {
        
        $_SESSION['username']= $myusername;
        //session_register("myusername");
       //$_SESSION['login_user'] = $myusername;              
       goToController("alumno/lista.php");
    }else {        
        goToView("InicioSesion.html");
    }
}
?>