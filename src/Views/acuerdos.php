<?php
include('../utils/utils.php')
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="<?php css("inicio.css")?>">
    <link rel="stylesheet" href="<?php css("materiaCheck.css")?>">
    <link rel="stylesheet" href="<?php css("estilo_lista1.css?jol")?>" type="text/css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Acuerdos</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker3.css" rel="stylesheet" id="bootstrap-css">
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="<?php js('tabs.js') ?>"></script>  
  
  </head>
<body style="background: #D4D4D4;">
<?php session_start(); ?>
<header>
            <?php
                includeView('header.php'); 
            ?>
        </header>
        <div class="wrap">
		<ul class="tabs" style="color:black; list-style: none; display: flex;">
			<li style="width: 18%;"><a href="#tab1" style="color:black; text-decoration: none; font-size: 16px; text-align: center; display: block;
	padding: 0px 0px;"><span class="fa fa-home"></span><span class="tab-text"><p class="text-success">AVISO DE PRIVACIDAD</p></span></a></li>
			<li style="width: 18%;"><a href="#tab2" style="color:black; text-decoration: none; font-size: 16px; text-align: center; display: block;
	padding: 0px 0px;"><span class="fa fa-group"></span><span class="tab-text"><p class="text-success">ACUERDO DE CONFIDENCIALIDAD</p></span></a></li>
		</ul>
    <div class= "container">
     <div class="secciones" style="width: auto; height:auto;padding:0;margin:0;">
      <article id="tab1">
     <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
    <br>
    <br>
    <h2 class="text-danger"> Aviso de Privacidad </h2>
<br>
<center>
   <p>AVISO DE PRIVACIDAD INTEGRAL
       <br>
Aviso de Privacidad
<br>
Universidad del Valle de M??xico
</center>
<br>
Este Aviso de Privacidad tiene por objeto proporcionarle una visi??n clara de c??mo usamos los datos personales que el titular de los datos (en adelante ???Usted???) nos proporciona, nuestros esfuerzos por protegerlos, al igual que proteger su privacidad, la forma en que utilizamos sus datos personales y los terceros con los que la compartiremos. Utilizamos los datos personales que comparte con nosotros, para hacer que su experiencia en la p??gina sea segura y que obtenga los servicios que esta ofrece.
En cumplimiento con la Ley Federal de Protecci??n de Datos Personales en Posesi??n de los Particulares y su Reglamento (en lo sucesivo, la ???Ley de Datos???), as?? como de conformidad con los Lineamientos del Aviso de Privacidad publicados en el Diario Oficial de la Federaci??n el 17 de enero de 2013, se informa lo siguiente:
<br>
??Para qu?? fines utilizaremos sus datos personales?
<br>
UVM tratar?? sus datos personales para las siguientes finalidades primarias:
<br>
1.	Crear un usuario ??nico para su acceso a la p??gina en cuesti??n.
<br>
2.	Identificar que tipo de usuario es usted al acceder a la pagina y que pueda tener los servicios correctos dentro de esta.
<br>
3.	Conocer su situaci??n acad??mica, carrera y todo lo referente a sus materias para poder guardarlas en su historial acad??mico.
<br>
4.	Ofreceremos servicios escolares para agilizar algunos procesos que suelen ser tardados en la Universidad de manera f??sica.
<br>
No utilizaremos sus datos personales para finalidades secundarias.
<br>
??Qu?? datos personales utilizamos?
<br>
Para llevar a cabo las finalidades descritas en el presente aviso de privacidad, recabaremos los siguientes datos personales:
<br>
1.	Datos de identificaci??n personal,
<br>
2.	Datos personales sensibles por medio de un docente de la Universidad a cargo de los procesos de Posgrado.
Para las finalidades descritas anteriormente, debemos tratar datos personales sensibles relativos a su situaci??n acad??mica dentro de la Universidad del Valle de M??xico.
<br>
Transferencias de datos personales
<br>
Le informamos que sus datos personales podr??an ser compartidos por el encargado del ??rea de Posgrado con nosotros los desarrolladores de la p??gina, con fines de pruebas de funcionalidad a esta.
<br>
Revocaci??n de su consentimiento
<br>
Usted puede revocar el consentimiento que, en su caso, nos haya otorgado para el tratamiento o transferencia de sus datos personales. Sin embargo, es importante que tenga en cuenta que no en todos los casos podremos atender su solicitud o concluir el uso de forma inmediata, ya que es posible que por alguna obligaci??n legal requiramos seguir tratando sus datos personales.
Para revocar su consentimiento deber?? presentar su solicitud a trav??s del siguiente medio: correo electr??nico yamilld2909@gmail.com.
<br>
Limitaciones sobre el uso o divulgaci??n de sus datos personales
El tratamiento de sus datos personales para las finalidades establecidas en este aviso de privacidad conlleva una limitaci??n legal sobre el uso o divulgaci??n de sus datos personales a lo estrictamente necesario para cumplir con dichas finalidades; el responsable no pueda usar ni divulgar sus datos personales para ning??n prop??sito distinto. Sin perjuicio de lo anterior, usted puede solicitar la limitaci??n sobre el uso o divulgaci??n de sus datos personales mediante solicitud expresa y por escrito al respecto.
<br>
Actualizaci??n: 07/10/21 
</p>
</div>
</div>
</div>
<div class= "container">
    <h2 class="text-danger"> Acuerdo de Confidencialidad </h2>
                          <p>
                              <br>
                              <center>
                              Puebla de Zaragoza, a __ de ___de 2021
                              <br>
Centro de Especializaci??n de Recursos Humanos de Alto Nivel para el Sector Automotriz (CERHAN)
</center>
<br>
P r e s e n t a
<br>
Ambas partes se reconocen mutuamente con capacidad para obligarse y, al efecto, suscriben el presente Acuerdo de Confidencialidad y de No Divulgaci??n de Informaci??n en base a las siguientes ESTIPULACIONES:
<br>
<br>
PRIMERA. Objeto. El presente Acuerdo se refiere a la informaci??n que EL DIVULGANTE (cliente) proporcione al RECEPTOR (CERHAN), ya sea de forma oral, grafica o escrita y, en estos dos ??ltimos casos, ya este contenida en cualquier tipo de documento, para identificar una(s) propuesta(s) de innovaci??n, o en su caso, para estructurar un(los) proyecto(s) de innovaci??n, que se est??n desarrollando / que se van a desarrollar.
<br>
SEGUNDA. 1. EL RECEPTOR ??nicamente utilizar?? la informaci??n facilitada por EL DIVULGANTE para el fin mencionado en la Estipulaci??n anterior, comprometi??ndose EL RECEPTOR a mantener la m??s estricta confidencialidad respecto de dicha informaci??n, advirtiendo de dicho deber de confidencialidad y secreto a sus empleados, asociados y a cualquier persona que, por cumplimiento de las obligaciones del RECEPTOR, deba tener acceso a dicha informaci??n para el correcto cumplimiento de las obligaciones del RECEPTOR para con EL DIVULGANTE.
<br>
2.EL RECEPTOR o las personas mencionadas en el p??rrafo anterior no podr??n reproducir, modificar, hacer p??blica o divulgar a terceros la informaci??n objeto del presente Acuerdo sin previa autorizaci??n escrita y expresa del DIVULGANTE.
<br>
3.De igual forma, EL RECEPTOR adoptar?? respecto de la informaci??n objeto de este Acuerdo las mismas medidas de seguridad que tomar??n normalmente respecto a la informaci??n confidencial de su propia Empresa, evitando en la medida de lo posible su p??rdida, robo o sustracci??n.
<br>
TERCERA. Sin perjuicio de lo estipulado en el presente Acuerdo, ambos partes aceptan que la obligaci??n de confidencialidad no se aplicar?? en los siguientes casos:
<br>
a)	Cuando la informaci??n se encontrar?? en el dominio p??blico en el momento de su suministro al RECEPTOR.
<br>
b)	Cuando la informaci??n ya estuviera en el conocimiento del RECEPTOR con anterioridad a la firma del presente Acuerdo y sin obligaci??n de guardar confidencialidad.
<br>
c)	 En caso de que EL RECEPTOR pueda probar que la informaci??n fue desarrollada o recibida leg??timamente de terceros, de forma totalmente independiente a su relaci??n con EL DIVULGANTE.
<br>
CUARTA. Los derechos de propiedad intelectual de la informaci??n objeto de este Acuerdo pertenecen al DIVULGANTE y el hecho de revelarla al RECEPTOR para el fin mencionado en la Estipulaci??n Primera no cambiar?? tal situaci??n.
<br>
QUINTA. Las partes se obligan a devolver cualquier documentaci??n, antecedentes facilitados en cualquier tipo de soporte y, en su caso, las copias obtenidas de los mismos, que constituyan informaci??n amparada por el deber de confidencialidad objeto del presente Acuerdo en el supuesto de que cese la relaci??n entre las partes por cualquier motivo.
<br>
SEXTA. El presente Acuerdo entrar?? en vigor en el momento de la firma del mismo por ambas partes, extendi??ndose su vigencia hasta un plazo de 5 a??os despu??s de finalizada la relaci??n entre las partes o, en su caso, la prestaci??n del servicio.
<br>
S??PTIMA. En caso de cualquier conflicto o discrepancia que pueda surgir en relaci??n con la interpretaci??n y/o cumplimiento del presente Acuerdo, las partes se someten expresamente a los Juzgados y Tribunales del Distrito Federal, con renuncia a su fuero propio, aplic??ndose la legislaci??n vigente.
</p>


