<?php
$errores=array();
$idpaciente=null;
$nombre=null;
$apellidos=null;
$fechaingreso=null;
$fechaalta=null;
$mensaje="";

//definir un array con las opciones disponibles
$secciones = ['alta', 'consulta', 'mantenimiento'];

//extraer la clave del array $_GET
$clave = array_keys($_GET);

//comprobar si llega un parámetro por la url (GET)
$componente = $clave[0] ?? 'index';

//verificar que la opción sea correcta
if (!in_array($componente, $secciones)) {
	$seccion = 'index';
}else{ 
	$seccion = $componente;
}
	
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Hospital</title>
	<link rel="stylesheet" type="text/css" href="css/hospital.css">
</head>
<body>
<div class="container">
	<header>
		<h1 id="title">HOSPITAL</h1>
	</header>
	<nav>
		<?php require_once "secciones/menu.php"; ?>
	</nav>
	<section id='contenido'>
		<div>
			<?php require_once "./secciones/$seccion.php"; ?>
		</div>
	</section>
</div>
</body>
</html>