<?

include 'Conexion.php';
$conexion=conectar();


// if(isset($_POST['generar_reporte']))
// {
	// NOMBRE DEL ARCHIVO Y CHARSET
	header('Content-Type:text/csv; charset=latin1');
	header('Content-Disposition: attachment; filename="Reporte_Fechas_Ingreso.csv"');

	// SALIDA DEL ARCHIVO
	$salida=fopen('php://output', 'w');
	// ENCABEZADOS
	fputcsv($salida, array('Nombre','Correo', 'Telefono', 'Fecha'));
	// QUERY PARA CREAR EL REPORTE
    $consulta= "SELECT *  FROM egresados_al";
    $ejecutar = mysqli_query($conexion, $consulta);
	//$reporteCsv=$conexion->query("SELECT *  FROM bajas");
	while($filaR=mysqli_fetch_assoc($ejecutar); ){
		fpucsv($salida, array($filaR['nombre'], 
		                        $filaR['correo'],
								$filaR['telefono'],
								$filaR['fecha']));
    }
// }
