<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="CSS/inicio.css" type="text/css">
    <link rel="stylesheet"  href="CSS/materiaCheck.css" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    
    <title>Alumnos</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker3.css" rel="stylesheet" id="bootstrap-css">
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="tabs.js"></script>  
  
  </head>
<body style="background: #D4D4D4;">
<?php session_start(); ?>
<header>
            <?php
                require_once('Header&Footer/header.php'); 
            ?>
        </header>
<div class="wrap">
		<ul class="tabs" style="color:black; list-style: none; display: flex;">
			<li style="width: 18%;"><a href="#tab1" style="color:black; text-decoration: none; font-size: 16px; text-align: center; display: block;
	padding: 0px 0px;"><span class="fa fa-home"></span><span class="tab-text"><p class="text-success">INFORMACIÓN PERSONAL</p></span></a></li>
			<li style="width: 18%;"><a href="#tab2" style="color:black; text-decoration: none; font-size: 16px; text-align: center; display: block;
	padding: 0px 0px;"><span class="fa fa-group"></span><span class="tab-text"><p class="text-success">HISTORIAL ACADÉMICO</p></span></a></li>
		</ul>
    <div class= "container">
     <div class="secciones" style="width: auto; height:auto;padding:0;margin:0;">
      <article id="tab1">
     <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
    <br>
    <br>
     
    <h2><p class="text-success">Situaciones para el alumno:</p></h2>
      
            <div id="info"> 
               <?php
                   include "Conexion.php"; 
                   $conexion= conectar();
                ?>
           
                <form method='POST' action='Eliminar.php'>
                <div class="row">
                <div class="col-sm-6">
                  <div class="card">
                    <div class="card-body">
                     
                      <h2 class="card-title">Egresado</h2>
                      <h5 class="card-text">Fecha: </h5>
                      <div class='input-group date' id='datepicker'>
		                    <input type='text'   name="fecha"  class="form-control" />
		                    <span class="input-group-addon">
		                        <span class="glyphicon glyphicon-calendar"></span>
		                    </span>
		                </div>
                      
                     
                      <br>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title"> Dar de baja </h2>
                    
                      <h5 class="card-text">Motivo:    
                      <br>
                    <select name="situaciones" >
                       <option value="">Selecciona una opción</option>
                        <option value="economico">Economico</option>
                        <option value="personal">Personal</option>
                        <option value="salud">Salud</option>
                        
                    </select> <br></h5> <br>                
</div>
</div>
<br>
<br>
<br>
<br>
</div>
<br>

<br>
<div class= "container">
<h2 class="text-danger"> Informacion personal </h2>
<br>
<br>
<br>
                <table  class="table" style='background-color: white;'>
                    <tr>
                      <td class="table-success">Nombre</td>
                      <td class="table-success">Cuenta</td>
                      <td class="table-success">Correo</td>
                      <td class="table-success">Telefono</td>
                      <td class="table-success">Programa</td>
                      <td class="table-success">Acciones</td>
                      
                    </tr> 
                  <?php 
                  if(isset($_GET['var']))
                  {
                    $id=$_GET['var'];
                    //$_SESSION['idsesion']=$id;
                    $sql = "SELECT nombre,cuenta,correo,telefono, Nombreprograma FROM alumno INNER JOIN programa on alumno.idprograma=programa.idprograma where idalumno=$id";
                    $result = mysqli_query($conexion, $sql);
                    while($ver=mysqli_fetch_row($result)){                          
                  ?>
                   <tr>
                      <td><?php echo $ver[0];?></td>
                      <td><?php echo $ver[1];?></td>
                      <td><?php echo $ver[2];?></td>
                      <td><?php echo $ver[3];?></td> 
                      <td><?php echo $ver[4];?></td>  
                      <td><button type="submit" class="btn btn-danger" value="<?php echo $id?>" name="baja"> Por baja</button>
                      <br>
                     <br> 
                       <button type="submit" class="btn btn-warning" value="<?php echo $id?>" name="egresado" > Egresado </button>  </td> 
                                                                                                                   
                   </tr>
                  <?php 
                    } 
                  } 
                  ?>
                </table>
               
                
                <br>
                </div>
                <div class="container">
                <div class="center">

                
                <a class="btn btn-primary" href="http://localhost/sistemauvm_ver3.0/listabajas.php"name="ba" role="button">Ver lista de alumnos de baja</a>    
                 
                <a class="btn btn-primary" href="http://localhost/sistemauvm_ver3.0/listaegresados.php" name="egre" role="button">Ver lista de egresados</a>
                </div>
                </div>
                <br>
                <br>
                
                <input type="hidden" id="v1" value="<?php echo $id?>" name="idalumno">  </input>
                <br>
                  </form>
                  </div>
              </div>  
      </div> 
      </div><br>
      </article>
                </div>

      
                <div class="secciones" style="width: auto; height:auto;padding:10px;margin:0;" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                <article id="tab2">
                <div id="info" style=" width: auto;  height: auto; padding: 5px; float: left;" >
                        <div id="mat" style=" float: left; margin-left: 200px; width: 400px; text-align: center; height: auto; margin-top: auto; border: 1px; background:#FFAF33"> 
                          <form method="POST" action="Tabladatos.php" autocomplete="off">
                          <h1 style="top: 90%;"> Selección de Materias: </h1>  
                            <?php
                                if(isset($_GET['var']))
                                 {
                                 $id=$_GET['var'];
                                 $_SESSION['idsesion']=$id;
                                 $consulta= mysqli_query($conexion,"select materia.nombremateria, materia.Clave from materia inner join programa on materia.idprograma=programa.idprograma 
                                 inner join alumno on programa.idprograma=alumno.idprograma where alumno.idalumno=$id");
                                 while($filas = mysqli_fetch_array($consulta))
                                 {
                                    /*$result = mysqli_query($conexion, $consulta);
                                     foreach($result as $b):
                                     echo"<br>". $b['nombremateria'];
                                     endforeach;*/
                             ?> 
                           <br>
                             <fieldset>
                             <input type="checkbox" name="opciones[]"  value="<?php echo $filas['nombremateria'];?>"><span class="ocultar"><?php echo $filas['nombremateria']?> <?php echo'<br> Clave: '. $filas['Clave']?></span>
                             </fieldset>
                      
                             <?php 
                               }
                             }
                             ?>
                            <p class="card-text">
                            <label for="motivo"><h5>Elija la opción:</h5></lablel>      
                            <select name="materias">
                            <option  value="0">Materias Ya Cursadas</option>
                            <option  value="1">Materias A Cursar</option>
                            </select>
                            </p> 
                            </select>
                            <input type="submit" value="Guardar">
                            </div>
                         </form>
                         
                      </div>
                      <div  style=" font-style:Arial; text-align: center; float: right; background-color: #FFF633; color: #0f0f0d; width: 400px;  height: auto; padding:5px; margin-right: 200px; border: 1px;">
                      <form method="POST" action="quitarmateria.php">
                      <h1 style="top: 50px;">Materias Ya Cursadas</h1>
                      <?php 
                          if(isset($_GET['var']))
                          { 
                            $consulta= mysqli_query($conexion,"select nombremateria from cursado where cursado.idalumno=$id");
                            foreach($consulta as $res){
                              echo'<br>'. $res['nombremateria'];
                              echo '<br>'; 
                              ?>
                              <button type="submit" class="btn btn-danger" value="<?php echo $nombre=$res['nombremateria'];?>" name="quitarcur" >Quitar</button>
                              <?php echo '<br>';
                            }
                          }  
                          ?>
                              <input type="hidden" id="v1" value="<?php echo $nombre=$res['nombremateria']; ?>" name="quitarcur1">  </input>
                     </div>
                     <div  id="muestra"style=" font-style:Arial; text-align: center; float: right; background-color: #A8FF33; color: #0f0f0d; width: 400px;  height: auto; margin-right: 200px;border: 1px; padding: 20px">
                     <h1 style="top: 50px;"> Materias A Cursar</h1>
                     <?php 
                          if(isset($_GET['var']))
                          { 
                            $consulta= mysqli_query($conexion,"select nombremateria from a_cursar where a_cursar.idalumno=$id");
                            foreach($consulta as $res){
                              echo'<br>'. $res['nombremateria'];
                              echo '<br>';
                              ?>
                              <button type="submit" class="btn btn-danger" value="<?php echo $nombre=$res['nombremateria'];?>" name="quitaracur" >Quitar</button>
                              <?php echo '<br>';
                            }
                          }  
                          ?>
                              <input type="hidden" id="v1" value="<?php echo $nombre=$res['nombremateria']; ?>" name="quitaracur1">  </input>
                     </div>
                        </form>
              </div><!---->
              </article>
        </div>

        <div class="secciones" style="width: auto; height:auto" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
        <article id="tab3">
        </article>
        </div>
</div><!--end item3---->

      
  </div>

</div>

</div>
      
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
       <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
<script >
    $(function () {
        $('#datepicker').datepicker({
            format: "dd/mm/yyyy",
            autoclose: true,
            todayHighlight: true,
          showOtherMonths: true,
          selectOtherMonths: true,
          autoclose: true,
          changeMonth: true,
          changeYear: true,
          orientation: "button"
        });
    });
</script>