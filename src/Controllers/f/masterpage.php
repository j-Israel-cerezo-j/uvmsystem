<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="CSS/inicio.css" type="text/css">
    <link rel="stylesheet"  href="CSS/fondo.css" type="text/css">
    <!--<link rel="stylesheet"  href="CSS/style.css" type="text/css">--->
    <link rel="stylesheet"  href="CSS/materiaCheck.css" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    
    <title>Document</title>
    
	<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker3.css" rel="stylesheet" id="bootstrap-css">
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<body>
    <?php session_start(); ?>
<nav class="navbar navbar-light" style="background-color: #F20B0B">
  <div class="container-fluid">
    <a class="navbar-brand" href="Lista.php"><h1> Universidad del Valle de Mexico</h1></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Egresados</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><?php echo $_SESSION['username']; ?></a>
        </li>
        <li>
          <a class="nav-link" href = "Logout.php">Cerrar Sesión</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
  <div id="item3">
      <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
           <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="http://localhost/Sistemauvm1/acciones.php" role="tab" aria-controls="nav-home" aria-selected="true">Informacion Personal</a>
           <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Historial Academico</a>
           <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">opcional</a>
        </div>
     </nav>
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