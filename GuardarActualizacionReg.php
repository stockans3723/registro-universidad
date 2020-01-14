<?php
ob_start();
require_once("conexion.php");
$identificador=$_GET['registro'];
echo "$identificador";
?>
<!DOCTYPE html>
<html>
<head>
  <title>Guardado de Solicitudes</title>
                                    

</head>
<body>
  <?php  
  $registroM=$_POST['idRegistro'];
  $nombreM=$_POST['Nombre'];
  $paternoM=$_POST['Paterno'];
  $maternoM=$_POST['Materno'];
  $institutoM=$_POST['Instituto'];
  $universidadM=$_POST['idUniversidad'];
  $carrerasM=$_POST['idCarreras'];
  $consulta="UPDATE registro SET idRegistro='{$registroM}', Nombre='{$nombreM}', Paterno='{$paternoM}', Materno='{$maternoM}', Instituto='{$institutoM}', idUniversidad='{$universidadM}', idCarreras='{$carrerasM}'  WHERE idRegistro='{$identificador}'";
 
  
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