<?php
ob_start();
require_once("conexion.php");
$identificador=$_GET['usuario'];
echo "$identificador";
?>
<!DOCTYPE html>
<html>
<head>
  <title>Guardado de Solicitudes</title>
                                    

</head>
<body>
  <?php
  $usuarioM=$_POST['idUsuario'];
  $nombreM=$_POST['Nombre'];
  $paternoM=$_POST['Paterno'];
  $maternoM=$_POST['Materno'];
  $codigoPostalM=$_POST['CodigoPostal'];
  $calleM=$_POST['Calle'];
  $coloniaM=$_POST['Colonia'];
  $ciudadM=$_POST['Ciudad'];
  $institutoM=$_POST['Instituto'];
  $promedioM=$_POST['Promedio'];  
  $tipoSangreM=$_POST['TipoSangre'];
  $discapacidadM=$_POST['Discapacidad'];
  $otroM=$_POST['Otro'];
  $Consulta = "UPDATE  usuario SET idUsuario='{$usuarioM}', Nombre='{$nombreM}', Paterno='{$paternoM}', Materno='{$maternoM}', CodigoPostal='{$codigoPostalM}', Calle='{$calleM}', Colonia='{$coloniaM}', Ciudad='{$ciudadM}', Instituto='{$institutoM}', Promedio='{$promedioM}', TipoSangre='{$tipoSangreM}', Discapacidad='{$discapacidadM}', Otro='{$otroM}' WHERE idUsuario='{$identificador}'";

  
  if($resultado=mysqli_query($conexion,$consulta))
  {
    echo "La Solicitud se ha ingresado Correctamente";
  }
  else
  {
    echo "El registros Fallo, verifique la informacion ingresada".mysqli_error($conexion);
  }
  ?>

  

</body>
</html>
<?php
//5. Descontamos la base de datos
  mysqli_close($conexion);
  // Regresa el control a la pagina ListadoSucursales.php css, javascript
  print "<meta http-equiv=Refresh content=\"2 ; url=actualizar.php\">";
?>