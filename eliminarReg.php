<?php
ob_start();
require_once("conexion.php");
$identificador=$_GET['inden'];
echo "$identificador";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Eliminar Registro</title>
</head>
<body>
<?php
$Consulta="DELETE FROM registro  WHERE idRegistro='{$identificador}'";
// echo "<br>"."Consulta Enviada:"."<br>";
// echo $Consulta;
// echo "<br>";
 if($resultado=mysqli_query($conexion,$Consulta))
 {
 	echo "El Producto ha sido eliminado"."<br>";
 }
 else
 {
 	echo "<br>"."No se pudo eliminar el producto".mysqli_error($conexion);
 }
?>
</body>
</html>
<?php
//Desconectamos la base de datos.
mysqli_close($conexion);
//REGRESA EL CONTROL A LA PAGINA DE LISTADOSUCURSALES.PHP
print"<meta http-equiv=Refresh content=\"2;url=eliminar.php\">";
?>