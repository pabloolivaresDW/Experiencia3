<?
// Función para evitar inyecciones
function Filtro($texto) {
  return htmlspecialchars(trim($texto), ENT_QUOTES);
}

$nombre = isset($_POST['nombre']) ? Filtro($_POST['nombre']) : '';
$sexo = isset($_POST['sexo']) ? Filtro($_POST['sexo']) : '';
$apellido = isset($_POST['apellido']) ? Filtro($_POST['apellido']) : '';
$fecha=isset($_POST['fecha']) ? Filtro($_POST['fecha']) : '';
$region=isset($_POST['region']) ? Filtro($_POST['region']) : '';
$pagina=isset($_POST['pagina']) ? Filtro($_POST['pagina']) : '';
$correo=isset($_POST['correo']) ? Filtro($_POST['correo']) : '';
$color=isset($_POST['color']) ? Filtro($_POST['color']) : '';
$area=isset($_POST['area']) ? Filtro($_POST['area']) : '';
?>

<!DOCTYPE html>
	<!DOCTYPE html>
	<html>
	<!DOCTYPE html>
	<!DOCTYPE html>
	<html>
	<head>

		<title>Formulario Listo</title>
		<!-- Bootstrap Core CSS -->
    	<link href="css/bootstrap.min.css" rel="stylesheet">

    	<!-- Custom CSS -->
    	<!-- link href="css/sb-admin.css" rel="stylesheet">

   		<!-- Custom Fonts -->
    	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	</head>

	<body>
		<h1> Formulario Listo</h1>
		Muchas gracias
		<? echo $nombre ?>
		<?echo $apellido; ?>;
		<br></br>
		La siguiente información ha sido registrada 
		<br>
		Fecha de nacimiento:
		<? echo $fecha; ?>
		<br>
		Sexo:
		<? echo $sexo; ?>
		<br>
		Región:
		<? echo $region; ?>
		<br>
		Área de interés:
		<? echo $area; ?>
		<br>
		Página personal:
		<? echo $pagina; ?>
		<br>
		Correo electrónico:
		<? echo $correo; ?>
		<br>
		Color Favorito:
		<font color="<? echo $color; ?>" size=10> Color</font>
	</body>
	</html>