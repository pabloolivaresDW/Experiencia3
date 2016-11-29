<?
// Función para evitar inyecciones
function Filtro($texto) {
  return htmlspecialchars(trim($texto), ENT_QUOTES);
}

$titulo = isset($_POST['titulo']) ? Filtro($_POST['titulo']) : '';
$unidades = isset($_POST['unidades']) ? Filtro($_POST['unidades']) : '';
$instrucciones = isset($_POST['instrucciones']) ? Filtro($_POST['instrucciones']) : '';

//echo $titulo;
//echo $unidades;
//echo $instrucciones;

$titulo=strtolower($titulo);
if($titulo=="matrix" && $unidades>2){
	echo "Error la cantidad de peliculas es muy alta";
	echo "<script language='javascript'>alert('Error, la cantidad de peliculas pedidas es muy alta');</script>";
	echo "<h1>Unidades insuficientes</h1>";

}else{
	echo"<h1>Pedido aceptado</h1>";
}

?>